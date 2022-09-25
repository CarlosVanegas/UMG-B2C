<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function get_modules_bussines() {

        return view('business',self::getParametros() );
    }

    public function getDemo(){


        echo "sdd";
        die;
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

        $code =  strtoupper(Str::random(6));
        $stores = DB::select("SELECT id_store, CONCAT(name, ' | ', municipio,' | ' ,departament) AS store  FROM tstore  WHERE active = 1;");
        $roll = DB::select("SELECT * FROM troll WHERE active = 1;");

        return view('access', (self::getParametros()),array('code'=>$code,'stores'=>$stores,'roll'=>$roll));
    }

    public function getstores(){
        $code =  strtoupper(Str::random(6));
        $departaments = DB::select("SELECT * FROM tdepartament ");
        $tipeStore = DB::select("SELECT * FROM ttype_store;");
        $store = DB::select("SELECT * FROM tstore ORDER BY id_store ASC;");


        return view('store-create', (self::getParametros()),
            array('code'=>$code,'departament'=>$departaments,'typeStore'=>$tipeStore,'stores'=>$store));
    }

    public function user_groups(){
        $roll = DB::select("SELECT tmodule.name as module, t.* FROM tmodule
                INNER JOIN troll t on tmodule.id_module = t.id_module ORDER BY t.id_roll ASC") ;

        return view('user_groups',  (self::getParametros()),array('roll'=>$roll) );

    }

    public function user_permissions(){
        return view('user_permissions', self::getParametros());
    }

    public function user_get(){
        $staff = DB::select("SELECT staff.id_staff,staff.code_satff,staff.first_name,staff.last_name,
              staff.active,staff.photo,(CONCAT(t2.departament ,' | ', t2.municipio)) as store,t.name FROM tstaff staff
            INNER JOIN troll t on staff.id_roll = t.id_roll
        INNER JOIN tstore t2 on staff.id_store = t2.id_store;") ;


        return view('user_get', (self::getParametros()),  array('staff' =>$staff));
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


    public function getMoules(){
        $modules = DB::table('tmodule')->where('active','=',1)
            ->orderBy('index', 'ASC')->get();


        return view('user_groups', array( 'modules'=> $modules));

       // return array('modules'=>$modules);
    }




}
