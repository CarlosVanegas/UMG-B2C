<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class MenuController extends Controller
{
    public function get_modules_bussines() {

        return view('business',self::getParametros() );
    }

    public function getDemo(){


        $moduleArray = array();
        $modules = DB::table('tmodule')->where('active','=',1)
            ->orderBy('index', 'ASC')->get();

        foreach ($modules as $module){
            $sub_module = DB::table('tassigning_submodule_module')
                ->join('tsub_module', 'tassigning_submodule_module.id_submodule', '=', 'tsub_module.id_submodule')
                ->join('tmodule', 'tassigning_submodule_module.id_module', '=', 'tmodule.id_module')
                ->select('tmodule.id_module','tsub_module.id_submodule','tsub_module.nombre','tsub_module.uri_direct')
                ->where('tmodule.active','=',1)
                ->where('tsub_module.active','=',1)
                ->where('tassigning_submodule_module.id_module','=',$module->id_module)
                ->get();

            array_push($moduleArray,   array( $module, 'sub_module'=> $sub_module));
        }
        return $moduleArray;
        die;

        $moduleArray = array();
        $modules = DB::table('tmodule')->where('active','=',1)
            ->orderBy('index', 'ASC')->get();

        foreach ($modules as $module){
            $sub_module = DB::table('tassigning_submodule_module')
                ->join('tsub_module', 'tassigning_submodule_module.id_submodule', '=', 'tsub_module.id_submodule')
                ->join('tmodule', 'tassigning_submodule_module.id_module', '=', 'tmodule.id_module')
                ->select('tmodule.id_module','tsub_module.id_submodule','tsub_module.nombre')
                ->where('tmodule.active','=',1)
                ->where('tsub_module.active','=',1)
                ->where('tassigning_submodule_module.id_module','=',$module->id_module)
                ->get();

            array_push($moduleArray,   array( $module, 'sub_module'=> $sub_module));
        }

        foreach ($moduleArray as $value){
            foreach ($value as $info){
                if(isset($info->name)){
                    print "<pre>";
                    echo "<br> *".$info->name." -> ".$info->id_module;
                    print "</pre>";
                    if (count($value['sub_module']) > 0){
                        foreach ($value['sub_module'] as $item) {
                            print "<pre>";
                            echo "<br> ------".$item->nombre." -> ".$info->id_module;;
                            print "</pre>";
                        }
                    }
                }
            }

        }

    }


    public function getAccess(){
        return view('access', self::getParametros());
    }

    public function user_groups(){
        return view('user_groups', self::getParametros());
    }




    public function getParametros(){
        $moduleArray = array();
        $modules = DB::table('tmodule')->where('active','=',1)
            ->orderBy('index', 'ASC')->get();

        foreach ($modules as $module){
            $sub_module = DB::table('tassigning_submodule_module')
                ->join('tsub_module', 'tassigning_submodule_module.id_submodule', '=', 'tsub_module.id_submodule')
                ->join('tmodule', 'tassigning_submodule_module.id_module', '=', 'tmodule.id_module')
                ->select('tmodule.id_module','tsub_module.id_submodule','tsub_module.nombre','tsub_module.uri_direct')
                ->where('tmodule.active','=',1)
                ->where('tsub_module.active','=',1)
                ->where('tassigning_submodule_module.id_module','=',$module->id_module)
                ->get();

            array_push($moduleArray,   array( $module, 'sub_module'=> $sub_module));
        }

        $data_business = DB::table('tbusiness')->where('id_business','=',1)->get();

        return array('modules'=>$moduleArray,'dataBusiness'=>$data_business);
    }

}
