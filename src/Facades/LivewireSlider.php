<?php

namespace LivewireSlider\LivewireSlider\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LivewireSlider\LivewireSlider\LivewireSlider
 */
class LivewireSlider extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LivewireSlider\LivewireSlider\LivewireSlider::class;
    }
}
