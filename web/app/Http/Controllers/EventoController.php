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
    public function searchE(Request $request)
    {
       $search = $request->get('search');
       $datos = Evento::where('id','like','%'.$search.'%')->get();
       return view('Eventos.eventos',compact('datos'));
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
        $file->move(public_path().'/imagenes/eventos',$name_image);
    }
      $eventos = new Evento();
      //Generación de Código de Publicación.
      $eventos->codigoPost = 'EV-' . (Evento::all()->max('id') + 1);
      $eventos->titulo= $request->input('titulo');
      $eventos->fecha= $request->input('fecha');
      $eventos->lugar= $request->input('lugar');
      $eventos->costo= $request->input('costo');
      $eventos->facultad_nomb= $request->input('facultad_nomb');
      $eventos->descripcion= $request->input('descripcion');
      $eventos->email = \Auth::user()->email;
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
    public function show($id)
    {
      $datos = Evento::find($id);
      return view('Perfil.Eventos.show', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $datosE = Evento::find($id);
      return view('Perfil.Eventos.detalles', compact('datosE'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $eventos = Evento::find($id);
          $eventos->titulo= $request->input('titulo');
          $eventos->fecha= $request->input('fecha');
          $eventos->lugar= $request->input('lugar');
          $eventos->costo= $request->input('costo');
          $eventos->facultad_nomb= $request->input('facultad_nomb');
          $eventos->descripcion= $request->input('descripcion');

          if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name_image = 'Evento'.'.'.$request->imagen->extension();
            $file->move(public_path().'/imagenes/evento/',$name_image);
            $eventos->imagen = $name_image;

          }

          $eventos->save();
          return redirect('/miPerfil')->with('success','Datos Actualizados.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Evento::where('id',$id)->delete();
      return back()->with('success','Anuncio eliminado exitosamente.');
    }
}
