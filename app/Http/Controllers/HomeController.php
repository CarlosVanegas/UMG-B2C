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


    public function save_data_roll(Request $request){


        var_dump($request);
        die;

        $request = array(
            'name' => request('categoryName'),
            'description' => request('description'),
            'active' => request('status'),
            /*'id_staff' => request('module'),*/
            /* 'id_permissions' => request('module'),*/
            'id_module' => request('module')
        );

        $request2 = array(
            'name' => request('categoryName'),
            'description' => request('description'),
            'active' => request('status'),
            /*'id_staff' => request('module'),*/
            /* 'id_permissions' => request('module'),*/
            'id_module' => request('module'),
            'sub_module_1' => request('sub_module_1'),
            'sub_module_2' => request('sub_module_2'),
            'sub_module_3' => request('sub_module_3'),
            'sub_module_4' => request('sub_module_4'),
            'sub_module_5' => request('sub_module_5'),
            'sub_module_6' => request('sub_module_6'),
        );

        print_r($request2);

        die;
        DB::table('troll')->insert([
            'name' => request('categoryName'),
            'description' => request('description'),
            'active' => request('status'),
            'id_module' => request('module')
        ]);

        return redirect('/access-user-groups')->with('success','Categoria creada correctamente');
    }

    public function demodemo(){
        echo ":D";
    }
}
