<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compraventa;


class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Compraventa::orderBy('id','desc')->get();
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
        return redirect('/anuncios')->with('success',' Data Saved');


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
