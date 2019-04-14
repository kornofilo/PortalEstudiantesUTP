<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

#llamar al modal
use App\Tutorias;

class TutoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      # llama la vista y trae todos datos de la tabla
      $datos = Tutorias::orderBy('id','desc')->get();
      return view('clasificado.Tutorias.tutorias',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {

     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      #datos que van a la base de datos

      $this->validate($request,[
      'titulo' => 'required',
      'nomtutor' => 'required',
      'materia' => 'required',
      'costo' => 'required',
      'ubicacion' => 'required',
      'descripcion' => 'required',
      'celular' => 'required',
      // 'imagen' => 'required',


  ]);

      $tutorias = new Tutorias();
      $tutorias->titulo= $request->input('titulo');
      $tutorias->nomtutor= $request->input('nomtutor');
      $tutorias->materia= $request->input('materia');
      $tutorias->costo= $request->input('costo');
      $tutorias->ubicacion= $request->input('ubicacion');
      $tutorias->descripcion= $request->input('descripcion');
      $tutorias->celular= $request->input('celular');
      $tutorias->nombre =\Auth::user()->nombre;
      $tutorias->email =\Auth::user()->email;

     #salvar en la base de datos
      $tutorias->save();
        return back()->with('success',' Data Saved');
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
