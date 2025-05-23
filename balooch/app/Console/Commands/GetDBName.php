<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GetDBName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:get-d-b-name';

    protected $signature = 'db:get_db_name';


    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    protected $description = 'To get the current database name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dbName = DB::connection()->getDatabaseName();
        $this->info("The Current db name is $dbName");
    }
}
