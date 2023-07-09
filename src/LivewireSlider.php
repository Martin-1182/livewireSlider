<?php

namespace LivewireSlider\LivewireSlider;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;
use LivewireSlider\LivewireSlider\Exceptions\SliderException;

class LivewireSlider extends Component
{
    const EMPTY_MODIFER = 'empty';

    const LAZY_MODIFIER = 'lazy';

    const DEFER_MODIFIER = 'defer';

    public function __construct(public array $options)
    {
    }

    public function render(): Application|Factory|View
    {
        return view('livewire-slider::components.slider');
    }

    /**
     * @throws SliderException
     */
    public function getWireModel(ComponentAttributeBag $attributes): array
    {
        $attribute = $attributes->wire('model');
        $separator = ',';

        if (
            (!$attribute->value() || is_bool($attribute->value())) ||
            empty($attribute->value())
        ) {
            throw new SliderException(
                'Missing or empty wire:model attribute.'
            );
        }

        return explode($separator, $attribute->value());
    }

    public function getWireModelModifier(ComponentAttributeBag $attributes): string
    {
        if ($attributes->wire('model')->hasModifier('lazy')) {
            return self::LAZY_MODIFIER;
        }

        if ($attributes->wire('model')->hasModifier('defer')) {
            return self::DEFER_MODIFIER;
        }

        return self::EMPTY_MODIFER;
    }
}
