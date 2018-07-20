<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IdeHelper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide-helper';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate All IDE Helper file.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('ide-helper:models', ['--nowrite' => true]);
        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');
    }
}
