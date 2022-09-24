<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()  {
        return redirect('dashboard');
    }

    public function getSubmodules($id){
        $results = DB::select("SELECT sub.nombre,sub.id_submodule FROM tassigning_submodule_module asign
        INNER JOIN tsub_module sub ON asign.id_submodule = sub.id_submodule
        INNER JOIN tmodule t on asign.id_module = t.id_module
            WHERE t.active = 1 AND sub.active = 1 AND asign.id_module = ".$id);


        return $results;
    }


    public function deleteRoll(Request $request){
        $message = "";
        if($request->isJson()){
            $data       = $request->all();
            $id_roll    = $data['id_roll'];

            $troll_detail =  DB::table('troll_detail')->where('id_roll', $id_roll)->delete();

            if($troll_detail == true){
                DB::table('troll')->where('id_roll', $id_roll)->delete();
                $message = "Roll eliminado correctamente";
            }else{
                $message = "Roll no encontrado";
            }

            return response([ 'code'=>201,  'message'=>$message ], 201);

        }else{
            return response([
                'code'=>401,
                'message'=>'format not allowed'
            ], 401);

        }
    }


    public function getRoll($id){

        $modules = DB::table('tmodule')->where('active','=',1)
            ->orderBy('index', 'ASC')->get();

    }

    public function demodemo(){
        echo ":D";
    }
}
