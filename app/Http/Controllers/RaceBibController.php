<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RaceBibController extends Controller
{
    //
    public function index(){
        $racebib = DB::table('racebib')
            ->where('id', 1)
            ->first();
         //$race = $racebib[2]
         return $racebib;    
    }
}
