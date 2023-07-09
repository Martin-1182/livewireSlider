<?php

namespace LivewireSlider\LivewireSlider\Exceptions;

use Exception;
use Throwable;

class SliderException extends Exception
{
    public function __construct(protected $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return "Livewire Range Slider Component Exception: {$this->message}";
    }
}
