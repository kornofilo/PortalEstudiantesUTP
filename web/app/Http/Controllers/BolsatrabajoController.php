<?php

namespace App\Http\Controllers;

use App\Bolsatrabajo;
use Illuminate\Http\Request;

class BolsatrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      # llama la vista y trae todos datos de la tabla
      $datos = Bolsatrabajo::orderBy('id','desc')->get();
      return view('Bolsatrabajos.bolsatrabajos',compact('datos'));
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

        #datos que van a la base de datos

        $this->validate($request,[
        'urgente' => 'required',
        'titulo' => 'required',
        'ubicacion' => 'required',
        'empresa' => 'required',
        'tipopuesto' => 'required',
        'salario' => 'required',
        'direccion' => 'required',
        'descripcion' => 'required',
        'habilidades' => 'required',
        'fecha' => 'required',
        'beneficio' => 'required',
        'nombcont' => 'required',
        'celular' => 'required',
        'emailcont' => 'required',
        // 'imagen' => 'required',


    ]);

        $bolsatrabajo = new Bolsatrabajo();
        $bolsatrabajo->urgente= $request->input('urgente');
        $bolsatrabajo->titulo= $request->input('titulo');
        $bolsatrabajo->ubicacion= $request->input('ubicacion');
        $bolsatrabajo->empresa= $request->input('empresa');
        $bolsatrabajo->tipopuesto= $request->input('tipopuesto');
        $bolsatrabajo->salario= $request->input('salario');
        $bolsatrabajo->direccion= $request->input('direccion');
        $bolsatrabajo->descripcion= $request->input('descripcion');
        $bolsatrabajo->habilidades= $request->input('habilidades');
        $bolsatrabajo->fecha= $request->input('fecha');
        $bolsatrabajo->beneficio= $request->input('beneficio');
        $bolsatrabajo->nombcont= $request->input('nombcont');
        $bolsatrabajo->celular= $request->input('celular');
        $bolsatrabajo->emailcont= $request->input('emailcont');


       #salvar en la base de datos
        $bolsatrabajo->save();
          return back()->with('success',' Data Saved');
      }


    /**
     * Display the specified resource.
     *
     * @param  \App\Bolsatrabajo  $bolsatrabajo
     * @return \Illuminate\Http\Response
     */
    public function show(Bolsatrabajo $bolsatrabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bolsatrabajo  $bolsatrabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(Bolsatrabajo $bolsatrabajo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bolsatrabajo  $bolsatrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bolsatrabajo $bolsatrabajo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bolsatrabajo  $bolsatrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bolsatrabajo $bolsatrabajo)
    {
        //
    }
}
