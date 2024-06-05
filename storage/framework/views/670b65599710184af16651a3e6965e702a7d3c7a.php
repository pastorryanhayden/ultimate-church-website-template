<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(env('CHURCH_NAME')); ?> - <?php echo e(env('CHURCH_CITY')); ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
         
         <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
         <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    </head>
    <body class="bg-white w-full font-serif antialiased">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('announcement', []);

$__html = app('livewire')->mount($__name, $__params, 'kFF9MJ9', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('navigation', ['transparent' => true]);

$__html = app('livewire')->mount($__name, $__params, 'CQ05PAm', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home.hero', []);

$__html = app('livewire')->mount($__name, $__params, 'zxFzbjH', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home.actions', []);

$__html = app('livewire')->mount($__name, $__params, 'RbSbEuf', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home.events', []);

$__html = app('livewire')->mount($__name, $__params, 'ktgKNNJ', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home.ministries', []);

$__html = app('livewire')->mount($__name, $__params, '5QCvz1I', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home.devotions', []);

$__html = app('livewire')->mount($__name, $__params, '8AlSUWA', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home.map', []);

$__html = app('livewire')->mount($__name, $__params, 've7HbnM', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer', []);

$__html = app('livewire')->mount($__name, $__params, 'GltsqqR', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?> 
        
        <?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</html>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/welcome.blade.php ENDPATH**/ ?>