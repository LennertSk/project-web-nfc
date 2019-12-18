<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Count;

class ResetValuesDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:resetValuesDaily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Script that runs at the end of the day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
    }
}
