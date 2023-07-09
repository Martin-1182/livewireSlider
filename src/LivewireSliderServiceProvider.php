<?php

namespace LivewireSlider\LivewireSlider;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LivewireSlider\LivewireSlider\Commands\LivewireSliderCommand;

class LivewireSliderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewireslider')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livewireslider_table')
            ->hasCommand(LivewireSliderCommand::class);
    }
}
