<!DOCTYPE html>
<html lang="en">
<!-- Head -->
    <head>
        <!-- Page Meta Tags-->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="keywords" content="" />

        <!-- Custom Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
        rel="stylesheet"
        />

        <!-- Favicon -->
        <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="./assets/images/favicon/apple-touch-icon.png"
        />
        <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="./assets/images/favicon/favicon-32x32.png"
        />
        <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="./assets/images/favicon/favicon-16x16.png"
        />
        <link
        rel="mask-icon"
        href="./assets/images/favicon/safari-pinned-tab.svg"
        color="#5bbad5"
        />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Vendor CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/libs.bundle.css')); ?>" />

        <!-- Main CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/theme.bundle.css')); ?>" />

        <!-- Fix for custom scrollbar if JS is disabled-->
        <noscript>
        <style>
            /**
            * Reinstate scrolling for non-JS clients
            */
            .simplebar-content-wrapper {
            overflow: auto;
            }
        </style>
        </noscript>

        <!-- Page Title -->
        <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>
    </head>
    <body class="<?php echo $__env->yieldContent('body_class'); ?>">
        <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- JQuery JS -->
        <!-- Theme JS -->
        <!-- Vendor JS -->
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
        ></script>

        <script src="<?php echo e(asset('assets/js/vendor.bundle.js')); ?>"></script>

        <!-- Theme JS -->
        <script src="<?php echo e(asset('assets/js/theme.bundle.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\inetpub\laravel-kbdmy\resources\views/layouts/app.blade.php ENDPATH**/ ?>