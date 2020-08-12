<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudantes;
use Illuminate\Support\Facades\Auth;

class certificados9Controller extends Controller
{
    
    public function index()
    {
       
         if (Auth::check()) {

             return view('conteudos.certificados9.app_certificados');
         }
        return redirect('/login');

    }
 
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }
 
    public function show($id)
    {
        //
         if (Auth::check()) {

             $estudante = estudantes::find($id);
        return view('conteudos.certificados9.app_visualizar_certificado', compact('estudante'));
         }
        return redirect('/login');

        
    }

     
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
