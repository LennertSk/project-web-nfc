<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Count;
use App\Storage;

class ResetValuesDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:resetValues';

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
        // get all users
        $users = Count::all();

        foreach ( $users as $user ) {
            // get storage data 
            $storage = Storage::where('username', $user->username)->first();

            // copy data to storage
            $new_entry = new Storage();
            $new_entry->username = $user->username;
            $new_entry->coffee_value = $user->value_coffee;
            $new_entry->water_value = $user->value_water;
            $new_entry->save();
            echo('Added to storage: ' . $new_entry->username . PHP_EOL);

            $user->value_coffee = 0;
            $user->value_water = 0;
            $user->save();
            echo('Values Reset' . PHP_EOL);
        }
        
    }
}
