<?php

namespace LivewireSlider\LivewireSlider;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LivewireSlider\LivewireSlider\Commands\LivewireSliderCommand;

class LivewireSliderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewireslider')
            ->hasViewComponent('slider', LivewireSlider::class)
            ->hasViewComposer('livewire-slider::components.scripts', function ($view) {
                $view->jsPath = __DIR__ . '/../dist/slider.js';
            });
    }
}
