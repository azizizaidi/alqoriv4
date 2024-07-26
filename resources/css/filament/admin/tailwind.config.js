import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './resources/views/livewire/*.blade.php',
        './vendor/filament/**/*.blade.php',
        '<path-to-vendor>/awcodes/filament-versions/resources/**/*.blade.php',
        'node_modules/preline/dist/*.js',
        '<path-to-vendor>/awcodes/filament-badgeable-column/resources/**/*.blade.php',
       
    ],
    plugins: [
        require('preline/plugin'),
    ],
}
