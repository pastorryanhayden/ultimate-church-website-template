<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo e($title ?? 'Page Title'); ?></title>
         <style>
            [x-cloak] {
                display: none !important;
            }
         </style>
         <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
         <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
         
  
    </head>
    <body class="bg-white prose w-full font-serif antialiased">
        
        <?php echo e($slot); ?>

        
         <?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
         <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
         <script>
            window.onload = function() {
                window.print();
            };
        </script>
    </body>
</html>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/layouts/printsermon.blade.php ENDPATH**/ ?>