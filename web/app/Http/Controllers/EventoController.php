<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class EventoController extends Controller
{
    public function __construct()
    {
          Carbon::setLocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //muestra los datos

      $datos = Evento::orderBy('id','desc')->get();
  
      return view('Eventos.eventos')->with(compact('datos'));
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
      $this->validate($request,[
      'titulo' => 'required',
      'fecha' => 'required',
      'lugar' => 'required',
      'costo' => 'required',
      'facultad_nomb' => 'required',
      'descripcion' => 'required',
      'imagen' => 'required',
      ]);

      if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $name_image = time().$file->getClientOriginalName();
        $file->move(public_path().'/imagenes/evento',$name_image);
    }
      $eventos = new Evento();
      //Generación de Código de Publicación.
      $eventos->codigoPost = 'EV-' . (Evento::all()->count() + 1);
      $eventos->titulo= $request->input('titulo');
      $eventos->fecha= $request->input('fecha');
      $eventos->lugar= $request->input('lugar');
      $eventos->costo= $request->input('costo');
      $eventos->facultad_nomb= $request->input('facultad_nomb');
      $eventos->descripcion= $request->input('descripcion');
      $eventos->imagen =$name_image;


     #salvar en la base de datos
      $eventos->save();
        return back()->with('success','Evento Creado Exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
