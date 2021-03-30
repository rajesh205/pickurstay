<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUsers;
use Log;
use App\User;
class ImportHrisUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hris:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports users from HRIS CSV';

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
        // $s3_file = Storage::disk('s3')->get('werkandmeusers_20210127_010432.csv');
        $storage_path = 'sample.csv';
        // Storage::disk('public')->put($storage_path, $s3_file);
        try{
            $file = fopen(public_path()."/storage/".$storage_path,"r");
            $i = 1;
            while (($line = fgetcsv($file)) !== FALSE) {
                $userDetails = [
                                'employee_id'   => $row[0],
                                'first_name'    => $row[1],
                                'last_name'     => $row[2],
                                'user_name'     => $row[1].' '.$row[2],
                                'user_email'    => $row[3],
                                'password'      => $randomKey,
                                'dateofbirth'   => $row['dob'],
                                'department'    => $row['department'],
                                'hiredate'      => $row['hire_date'],
                                'phonenumber'   => $row['phone_number'],
                                'title'         => $row['title'],
                                'last_working_day' => $row['last_working_day'],
                                'store_number'  => $row['store_number'],
                                'group_id'      => $group->group_id,
                                'role_id'       => $role->role_id,
                                'canAnnounce'   => $announce,
                                // 'kill'          => $row['title'],
                            ];
            }
        }
        catch (\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1]; 

        }
    }
}
