// import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    // presets: [preset],
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/css/**/*.css',
    ],
    plugins: [
    require('@tailwindcss/typography'),
    // ...
  ],
   
}

