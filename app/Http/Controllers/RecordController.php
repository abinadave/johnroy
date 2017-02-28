<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record as Record;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
	public static function functionName($value) {
		if ($value != '0') {
			return $value;
		}else {
			return '';
		}
	}
    public function mainRoute($province, $lgu){
    	$data = DB::table('lgu')->where('Province', $province)->where('Lgu', $lgu)->get();
        return view('child', 
        	[
        		'lgu' => $data,
        		'province' => $province,
        		'municipality' => $lgu
        	]);
    }
    public function fetch($province, $lgu){
    	// return Record::all();
    }
}
