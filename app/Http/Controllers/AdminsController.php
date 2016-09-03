<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\AdminRequest;

use App\Http\Requests\UserRequest;

use App\Admin;

use App\User;

use Validator;

use Redirect;

use Laracasts\Flash\Flash;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return View('admins.index')->with('admins',$admins);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admins.templeate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        if($this->usernameValid($request->username, ''))
            return Redirect::back()->withErrors(['El nombre de usuario ya esta en Uso']);    
        
        $user = new User();
        $user->username = $request->username; 
        $user->password = bcrypt($request->username); 
        $user->type = 'admin';
        $user->save();

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->user_id = $user->id;
        $admin->state = '1';
        $admin->save();

        Flash::info('El admin se ha creado correctamente', 'El password igual al Nombre de Usuario');
        return redirect()->route('admin.admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admins.templeate')->with('admin',$admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        if($this->usernameValid($request->username, $admin->user->id))
            return Redirect::back()->withErrors(['El nombre de usuario ya esta en Uso']); 
        //dd($request);
        if(isset($request->passwords_check)){
            if($request->password != $request->password_confirmation)
            return Redirect::back()->withErrors(['Los passwords no coinciden']);    
        
            if($this->validPassword($request->password,$request->password_confirmation))
                return Redirect::back()->withErrors(['El nuevo password no es correcto, deberia tener mas de 6 caracteres']);        
        }
        
        
        $user = User::find($admin->user->id);
        $user->username = $request->username; 
        $user->password = bcrypt($request->username); 
        $user->type = 'admin';
        $user->save();
        
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->user_id = $user->id;
        $admin->state = '1';
        $admin->save();
        Flash::info('El admin se ha actualizado correctamente', 'El password igual al Nombre de Usuario');
        return redirect()->route('admin.admins.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Player::find($id);
        $admin->delete();
        Flash::info('El Administrador se ha eliminado correctamente');
        return redirect('/admin/admins')->with('success','noticia');
    }

    /**
     * Validate username.
     *
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    public function usernameValid($username, $idUser)
    {
        $validaciones = 'required|max:255|unique:users,username';
        
        if($idUser!='') $validaciones.= ','.$idUser;
        
        $user = array();
        $user['username'] = $username;
         $res = Validator::make($user, ['username' => $validaciones]);
        return $res->fails();
    }
    /**
     * Validate username.
     *
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    
    public function validPassword($password, $password_confirmation)
    {
        $user = array();
        $user['password'] = $password;
        $user['password_confirmation'] = $password_confirmation;
        $res = Validator::make($user, ['password' => 'required|min:6|confirmed']);
        return $res->fails();
    }
}
