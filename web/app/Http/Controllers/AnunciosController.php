<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compraventa;
use App\Tutorias;
use App\User;


class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos = Compraventa::where('estadoPost','Aprobada')->get();
            // dd($data);
        return view('clasificado.Anuncios.anuncios')->with(compact('datos'));


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
            'categoria' => 'required',
            'nombreArt' => 'required',
            'precio' => 'required',
            'estado' => 'required',
            'descripcion' => 'required',
            'celular' => 'required',
            // 'imagen' => 'required',
            //  'email' => 'required',

        ]);

        $anuncio = new Compraventa();

        $anuncio->categoria = $request->input('categoria');
        //Generación de Código de Publicación.
        $anuncio->codigoPost = 'CV-' . (Compraventa::all()->count() + 1);
        $anuncio->nombreArt = $request->input('nombreArt');
        $anuncio->precio = $request->input('precio');
        $anuncio->estado = $request->input('estado');
        $anuncio->descripcion = $request->input('descripcion');
        $anuncio->celular = $request->input('celular');
        $anuncio->email = \Auth::user()->email;
        $anuncio->imagen = "/def.png";
        $anuncio->nombre = \Auth::user()->nombre;
      //  $anuncio->apellido = \Auth::user()->apellido;



        $anuncio->save();
        return back()->with('success',' Data Saved');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  public function show($id)
    // {
    //     $datos = Compraventa::find($id);
    //     return view('Perfil.detalles', compact('datos'));
    // }

    public function show($id)
    {
        $datos = Compraventa::find($id);
        return view('Perfil.show', compact('datos'));
    }
    public function show2($id)
    {
        $datosT = Tutorias::find($id);
        return view('Perfil.show2', compact('datosT'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
         $datos = Compraventa::find($id);
         return view('Perfil.detalles', compact('datos'));
     }

     public function edit2($id)
     {
         $datosT = Tutorias::find($id);
         return view('Perfil.detalles2', compact('datosT'));
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



          $datos = Compraventa::find($id);
          $datos->nombreArt = $request->get('nombreArt');
          $datos->precio = $request->get('precio');
          $datos->estado = $request->get('estado');
          $datos->descripcion = $request->get('descripcion');
          $datos->celular = $request->get('celular');
          $datos->estadoPost = ('En Moderación');
          $datos->save();

        return redirect('/miPerfil')->with('success','Datos Actualizados.');
      }

      public function update2(Request $request, $id)
      {

            $datosT = Tutorias::find($id);
            $datosT->titulo = $request->get('titulo');
            $datosT->nomtutor = $request->get('nomtutor');
            $datosT->materia = $request->get('materia');
            $datosT->costo = $request->get('costo');
            $datosT->ubicacion = $request->get('ubicacion');
            $datosT->descripcion = $request->get('descripcion');
            $datosT->celular = $request->get('celular');
            $datosT->estadoPost = ('En moderación');
            $datosT->save();

          return redirect('/miPerfil')->with('success','Datos Actualizados.');
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


      public function destroy($id)
      {
        dd($id);
        Compraventa::where('id', $id)->delete();

        return back()->with('success','eliminado exitosamente.');
      }
}
