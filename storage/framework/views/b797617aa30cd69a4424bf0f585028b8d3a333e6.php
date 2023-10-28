<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bible Baptist Church - Mattoon, IL</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
         <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    </head>
    <body class="home">
    <?php echo $__env->make('partials._mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._announcements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <header>
            <section class="top" style="background-image: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5));">
            <div class="overlay"></div>
            <video  autoplay muted loop poster="<?php echo e($site_global->header_image); ?>">
            <source src="<?php echo e($site_global->header_video); ?>" type="video/mp4">
            </video>
            <?php echo $__env->make('partials._main-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <h1><?php echo e($site_global->heading); ?></h1>
        </section>
        </header>
      
          <?php echo $__env->make('partials._actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('partials._event', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials._ministries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
       <?php echo $__env->make('partials._footer', ['show_map' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/resources/views/welcome.blade.php ENDPATH**/ ?>