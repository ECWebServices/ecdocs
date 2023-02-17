<?php

namespace ECDoc\Ecdocs\Commands;

use Illuminate\Console\Command;

class EcdocsCommand extends Command
{
    public $signature = 'ecdocs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
