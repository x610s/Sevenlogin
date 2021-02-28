<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PanelAdministrador extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'roles:admin']);
    }

    public function index(Request $request){
        $relacionEloquent = 'roles'; //Nombre de tu relacion con roles en el modelo User
 
      
         if($request->ajax()){
            return User::all();
            /*  return $usuariosAdmins = User::whereHas($relacionEloquent, function ($query) {
                 return $query->where('key', '=', 'admin');
             })->get(); */
         }else{
             return view('administrador');
         } 

    
     }
 
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update($id)
    {
        return  User::findOrFail($id)->update(Request()->all());
    } 
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
    }
}
