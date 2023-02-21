<?php

namespace App\Console\Commands;
use App\Models\Category;

use Illuminate\Console\Command;

class StoreData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store.data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'store data in db';

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
     * @return int
     */
    public function handle()
    {
        $cat= new Category();
        $cat->name= 'Cat two is not on job';
        $cat->save();
    }
}
