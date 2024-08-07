<?php

declare(strict_types=1);

namespace Codeat3\BladeElementPlusIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeElementPlusIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-element-plus-icons', []);

            $factory->add('element-plus-icons', array_merge(['path' => __DIR__ . '/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-element-plus-icons.php', 'blade-element-plus-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-element-plus-icons'),
            ], 'blade-element-plus'); // TODO: updating this alias to `blade-element-plus-icons` in next major release

            $this->publishes([
                __DIR__ . '/../config/blade-element-plus-icons.php' => $this->app->configPath('blade-element-plus-icons.php'),
            ], 'blade-element-plus-icons-config');
        }
    }
}
