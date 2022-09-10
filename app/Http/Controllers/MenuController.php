<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class MenuController extends Controller
{
    public function get_modules_bussines() {

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

        return view('business', array('modules'=>$moduleArray));
    }


    public function getDemo(){

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
                    echo "<br> *".$info->name;
                    print "</pre>";
                    if (count($value['sub_module']) > 0){
                        foreach ($value['sub_module'] as $item) {
                            print "<pre>";
                            echo "<br> ------".$item->nombre;
                            print "</pre>";
                        }
                    }
                }
            }

        }

    }


}
