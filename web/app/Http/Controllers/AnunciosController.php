<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compraventa;
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

    // }

    public function show($id)
    {
        $datos = Compraventa::find($id);
        return view('Perfil.Compraventa.show', compact('datos'));
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
         return view('Perfil.Compraventa.detalles', compact('datos'));
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

          if($request->hasFile('imagen')){
            $profileImage = $request->file('imagen');
            $name_image = 'profileImage'.'.'.$request->imagen->extension();
            $profileImage->move(public_path().'/imagenes/clasificado/anuncios/',$name_image);
            $datos->imagen = $name_image;

          }

          $datos->save();

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
        Compraventa::where('id', $id)->delete();
        return back()->with('success','eliminado exitosamente.');
      }
}
