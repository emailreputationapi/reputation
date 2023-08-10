<?php

namespace WJGilmore\LaravelEmailreputationapi\Commands;

use Illuminate\Console\Command;

class LaravelEmailreputationapiCommand extends Command
{
    public $signature = 'laravel-emailreputationapi';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
