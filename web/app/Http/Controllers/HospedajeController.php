<?php

namespace App\Http\Controllers;

use App\Hospedaje;
use Illuminate\Http\Request;

class HospedajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos = Hospedaje::orderBy('id','desc')->get();
     return view('clasificado.Hospedador.alquilerhospedajes',compact('datos'));
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
          #Insertar a la base de datos
          $this->validate($request,[
              'categoria' => 'required',
              'titulo' => 'required',
              'ubicacion' => 'required',
              'descripcion' => 'required',
              'precio' => 'required',
              'estacionamiento' => 'required',
              'habitaciones' => 'required',
              'baños' => 'required',
              'amueblado' => 'required',
              'celular' => 'required',
               'imagen' => 'required',
             
          ]);

          if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name_image = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/clasificado/alquilerhospedaje',$name_image);

          $hospedador = new Hospedaje();
          //Generación de Código de Publicación.
          $hospedador->codigoPost= 'AH-' . (Hospedaje::all()->count() + 1);
          $hospedador->categoria = $request->input('categoria');         
          $hospedador->titulo = $request->input('titulo');
          $hospedador->ubicacion = $request->input('ubicacion');
          $hospedador->descripcion = $request->input('descripcion');
          $hospedador->precio = $request->input('precio');
          $hospedador->estacionamiento = $request->input('estacionamiento');
          $hospedador->habitaciones = $request->input('habitaciones');
          $hospedador->baños = $request->input('baños');
          $hospedador->amueblado = $request->input('amueblado');
          $hospedador->celular = $request->input('celular');
          $hospedador->imagen =$name_image;
          $hospedador->nombre = \Auth::user()->nombre;
          $hospedador->email = \Auth::user()->email;
          
          



          $hospedador->save();
          return back()->with('success',' Data Saved');
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function show(Hospedaje $hospedaje)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospedaje $hospedaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospedaje $hospedaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospedaje $hospedaje)
    {
        //
    }
}
