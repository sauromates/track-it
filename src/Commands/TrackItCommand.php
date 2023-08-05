<?php

namespace Sauromates\TrackIt\Commands;

use Illuminate\Console\Command;

class TrackItCommand extends Command
{
    public $signature = 'track-it';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
