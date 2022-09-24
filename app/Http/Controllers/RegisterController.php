<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'agreement' => ['accepted']
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );



        session()->flash('success', 'Your account has been created.');
        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/dashboard');
    }


    public function save_data_business(){

        DB::table('tbusiness')->insert([
            'code' => request('code_business'),
            'name' => request('name_business'),
            'email' => request('email_business'),
            'country' => request('country'),
            'phone' => request('phone_business'),
        ]);

        return redirect('/business')->with('success','Profile updated successfully');
    }

    public function save_data_roll(Request $request){

        $insertedId = DB::table('troll')->insertGetId([
            'name' => request('categoryName'),
            'description' => request('description'),
            'active' => request('status'),
            'id_module' => request('module')
        ]);

        $number_submodules = request('numero_submodules');

        for ($i = 1; $i<= $number_submodules; $i++){
            $status = (!empty(request('status_'.$i))) ? request('status_'.$i) : 0;
            echo "<br>".request('sub_module_'.$i)." status: ".$status;
            DB::table('troll_detail')->insert([
                'id_roll' => $insertedId,
                'id_submodule' => request('sub_module_'.$i),
                'status' => $status
            ]);
        }
        return redirect('/access-user-groups')->with('success','Categoria creada correctamente');
    }

    public function edit_data_roll(Request $request){


        $id_roll = request('edit_id_roll');

        DB::table('troll')->where('id_roll',$id_roll)->update(
            array(
            'name'=>request('edit_categoryName'),
            'description'=>request('edit_description'),
            'active'=>request('edit_status'),
            'id_module'=>request('edit_module'),
            'id_roll'=>$id_roll,
        ));

        $number_submodules_edit = request('edit_numero_submodules');
        for ($i = 1; $i<= $number_submodules_edit; $i++){
           $status = (!empty(request('edit_status_'.$i))) ? request('edit_status_'.$i) : 0;
           $id_roll_detail= request('edit_sub_submodule_'.$i);
            //echo "<br>".$id_roll_detail." -     ".request('edit_sub_module_'.$i) . " - ".$status;
            DB::table('troll_detail')->where('id_roll_detail',$id_roll_detail)->update(
                array(
                    'id_roll' => $id_roll,
                    'id_submodule' => request('edit_sub_module_'.$i),
                    'status' => $status));


        }

        return redirect('/access-user-groups')->with('Roll editado correctamente!');
    }

}
