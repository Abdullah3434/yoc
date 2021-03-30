<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;
class everyminute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is command for close of sale status';

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
        //
        // date_default_timezone_set("Asia/Karachi");
        // $date = date('Y-m-d');
        // $status='0';
        //  DB::table('product,discount_table')
        //     ->where('discount_table.end_date','<', $date)->update(['discount_status' => $status]);
        // DB::delete("delete from test");
       
          
    }
}
