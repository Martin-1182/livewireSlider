<?php

namespace LivewireSlider\LivewireSlider\Commands;

use Illuminate\Console\Command;

class LivewireSliderCommand extends Command
{
    public $signature = 'livewireslider';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
