<?php

namespace LivewireSlider\LivewireSlider;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
class LivewireSliderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewireslider');
    }

    public function bootingPackage(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-slider');

        Blade::component('slider', LivewireSlider::class);

        View::composer('livewire-slider::components.scripts', function ($view) {
            $view->jsPath = __DIR__.'/../dist/slider.js';
        });
    }
}
