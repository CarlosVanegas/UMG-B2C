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

    public function create_new_user(){

        $exixt =  DB::table('users')->where('email', request('email') )->exists();

        if($exixt == false){
            $path ='';
            if(!empty(request('foto_usuario'))){
                $destination_path       = 'public/img/photos';
                $photo                  = request('foto_usuario');
                $photo_name             = $photo->getClientOriginalName();
                $path                   = request('foto_usuario')->storeAs($destination_path,$photo_name);
                $path                   = str_replace('public/', '', $path);
            }


            $usersId = DB::table('users')->insertGetId([
                'name' => request('userNameInput'),
                'email' => request('email',Rule::unique('users', 'email')),
                'password' => bcrypt(request('password')),
                'phone' => request('phone'),
            ]);

             DB::table('tstaff')->insert([
                'code_store' => request('direction_store'),
                'code_satff' => request('code_staff'),//*
                'first_name' => request('firstName'),//**
                'last_name' => request('lastName'),//**
                'active' => 1,
                'age' => request('age'),//**
                'id_roll' => request('rollUser'), //**
                'id_store' => request('id_store'), //**
                'id' => $usersId,
                'photo' => $path,
            ]);

            $count = DB::select("SELECT COUNT(*) as totalStaff FROM tstaff WHERE id_store =  ".request('id_store'));

            $total = 0;
            foreach ($count as $item) {
                $total = $item->totalStaff;
            }
            DB::table('tstore')->where('id_store',request('id_store'))->update(
                array(
                    'quantity_of_employees'=>$total,
                ));

            session()->flash('success', 'Usuario creado correctamente!');
            return redirect('/access-create-users')->with('success','Usuario creado correctamente!');

        }else{
            session()->flash('success', 'Este correo ya exixte.');
            return redirect('/access-create-users')->with('warning','Este correo ya exixte');
        }
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

    //save_category_product
    public function save_category_product(Request $request){

         DB::table('tcategory')->insert([
            'name' => request('categoryName')
        ]);

        session()->flash('success', 'Categoria creada correctamente!');
        return redirect('/articles-products')->with('success','Categoria creada correctamente');
    }

    public function save_data_store(Request $request){



         DB::table('tstore')->insert([
             'name' => request('name_store'),
             'code_store' => request('codeStore'),
             'description' => request('description'),
             'departament' => request('departament'),
             'phone' => request('phone_staff'),
             'direction' => request('direction_store'),
             'active' => request('status'),
             'type_store' => request('type_store'),
             'id_departament' => request('departament'),
             'id_municipio' => request('municipio'),
             'municipio' => request('name_municipio'),
             'departament' => request('name_departament'),
        ]);


        return redirect('/store-create')->with('success','Tienda creada correctamente');
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

    public function edit_data_category(Request $request){
        $id = request('edit_id_category');
        DB::table('tcategory')->where('id_category',$id)->update(
            array(
                'name'=>request('edit_categoryName'),
            ));

        session()->flash('success', 'Categoria Modificada correctamente!');
        return redirect('/articles-products')->with('Roll editado correctamente!');
    }

}
