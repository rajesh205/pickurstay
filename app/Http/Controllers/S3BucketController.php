<?php

namespace App\Http\Controllers;
use Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUsers;

class S3BucketController extends Controller {
	public function index(){
		// echo "werkandmeusers_".date("Ymd")."_".date("his").".csv";
		// exit;
		// $s3_file = Storage::disk('s3')->get('werkandmeusers_20210127_010432.csv');
		$storage_path = 'sample.csv';
  // 		Storage::disk('public')->put($storage_path, $s3_file);
  		// Excel::import(new ImportUsers, public_path()."/storage/".$storage_path);
  		$file = fopen(public_path()."/storage/".$storage_path,"r");
	    $i = 1;
	    while (($line = fgetcsv($file)) !== FALSE) {
	    	echo "<pre>";print_r($line);
	    }
	}
}
