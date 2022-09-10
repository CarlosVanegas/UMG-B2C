<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class MenuController extends Controller
{
    public function get_modules_bussines() {

        $module = DB::table('tmodule')->where('active','=',1)
                ->orderBy('index', 'ASC')->get();

        return view('business',    array('modules'=>$module));
    }


}
