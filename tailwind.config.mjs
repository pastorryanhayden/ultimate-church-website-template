import preset from './vendor/filament/support/tailwind.config.preset'

import defaultTheme from './node_modules/tailwindcss/defaultTheme'


export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './resources/**/*.blade.php',
    ],
    corePlugins: {
    aspectRatio: false,
    },
    theme: {
        extend: {
          fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
          },
        },
    },
    plugins: [
    require('@tailwindcss/aspect-ratio'),
    // ...
    ],
}
 