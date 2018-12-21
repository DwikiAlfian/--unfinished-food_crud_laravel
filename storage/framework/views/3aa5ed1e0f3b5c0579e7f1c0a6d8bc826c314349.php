<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel CRUD Food || <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
</head>
<body>
    <div class="uk-section-primary">
        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">

            <nav class="uk-navbar-container">
                <div class="uk-container uk-container-expand">
                    <div uk-navbar>

                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="<?php echo e(route('food.create')); ?>">Create</a></li>
                            <li class="uk-active"><a href="<?php echo e(route('food.index')); ?>">Home</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>