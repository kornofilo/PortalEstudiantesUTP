<?php

namespace App\Http\Controllers;
#este el modal
use App\Alhos; 
use Illuminate\Http\Request;

class AlhosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Alhos::orderBy('id','desc')->get();
    return view('clasificado.Hospedador.alquilerhospedajes',compact('datos'));
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
           //  'imagen' => 'required',
            //  'email' => 'required',

        ]);
        
        $hospedador = new Alhos();

        $hospedador->categoria = $request->input('categoria');
        $hospedador->titulo = $request->input('titulo');
        $hospedador->ubicacion = $request->input('ubicacion');
        $hospedador->precio = $request->input('precio');
        $hospedador->estacionamiento = $request->input('estacionamiento');
        $hospedador->habitaciones = $request->input('habitaciones');
        $hospedador->baños = $request->input('baños');
        $hospedador->amueblado = $request->input('amueblado');
        $hospedador->celular = $request->input('celular');
        $hospedador->nombre = \Auth::user()->nombre;
        $hospedador->apellido = \Auth::user()->apellido;
        

        
        $hospedador->save();
        return redirect('/alquilerhospedajes')->with('success',' Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alhos  $alhos
     * @return \Illuminate\Http\Response
     */
    public function show(Alhos $alhos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alhos  $alhos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alhos $alhos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alhos  $alhos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alhos $alhos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alhos  $alhos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alhos $alhos)
    {
        //
    }
}
