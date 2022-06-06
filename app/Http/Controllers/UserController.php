<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->get('remember'))) {
            $request->session()->regenerate();

            if(Auth::user() &&  Auth::user()->address_1 !== null){
                return redirect()->intended(route('orders'));
            }
            else{
                return redirect()->route('settings');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('welcome');
    }
    public function update(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:225|'. Rule::unique('users')->ignore($user->id),
            'address_1' => 'required|max:255',
            'address_2' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'postal' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);

        // if fails redirects back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Fill user model
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'city' => $request->city,
            'state' => $request->state,
            'postal' => $request->postal,
            'phone' => $request->phone
        ]);

        // Save user to database
        $user->save();

        // Redirect to route
        return redirect()->route('settings', ['msg' => 'success']);
    }
    public function update_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        User::find(auth()->user()->id)->update(['password'=> $request->new_password]);

        return redirect()->route('password', ['msg' => 'success']);
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required','email','max:225',
            function ($attribute, $value, $fail) {
                if (User::whereEmail($value)->count() > 0) {
                    $fail($attribute.' is already used.');
                }
            }],
            'password' => 'required',
            'confirm_password' => 'same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->intended(route('settings'));
    }
    public function admin_user(Request $request)
    {
        $users = User::paginate(10);

        return view('admin-user')->with('users',$users);//
    }
    public function admin_edit_user($id)
    {
        $user = User::find($id);

        return view('admin-user-alter')->with('user',$user);//
    }
    public function admin_edit_user_update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:225|'. Rule::unique('users')->ignore($user->id),
            'address_1' => 'required|max:255',
            'address_2' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'postal' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);

        // if fails redirects back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Fill user model
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'city' => $request->city,
            'state' => $request->state,
            'postal' => $request->postal,
            'phone' => $request->phone
        ]);

        // Save user to database
        $user->save();

        // Redirect to route
        return redirect()->route('admin-user', ['msg' => 'success']);
    }
}
