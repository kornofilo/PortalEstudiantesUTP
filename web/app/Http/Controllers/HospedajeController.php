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
      $datos = Hospedaje::where('estadoPost','Aprobada')->orderBy('created_at','desc')->paginate(10);
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
    public function search(Request $request)
    {
        $search = $request->get('search');
       $datos = Hospedaje::where('estadoPost','Aprobada')
                ->whereRaw('concat(codigoPost,categoria,titulo,descripcion,ubicacion,precio) like \'%' .$search .'%\' ')
                ->orderBy('created_at','desc')
                ->paginate(10);
       return view('clasificado.Hospedador.alquilerhospedajes',compact('datos'));
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
               // 'imagen' => 'required',
          ]);

          $hospedador = new Hospedaje();
          //Generación de Código de Publicación.
          $hospedador->codigoPost= 'AH-' . (Hospedaje::all()->max('id') + 1);
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
          $hospedador->nombre = \Auth::user()->nombre;
          $hospedador->email = \Auth::user()->email;
          //
          if ($request->hasFile('imagen'))
           {
            $file = $request->file('imagen');
            $name_image = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/clasificados/hospedador',$name_image);
            $hospedador->imagen =$name_image;
           }

          $hospedador->save();
          return back()->with('success','Anuncio: '.$hospedador->titulo.' Creado exitosamente');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $datosB = Hospedaje::find($id);
      return view('Perfil.alquilerHospedaje.show', compact('datosB'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $datosH = Hospedaje::find($id);
      return view('Perfil.alquilerHospedaje.detalles', compact('datosH'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hospedador = Hospedaje::find($id);
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
        $hospedador->estadoPost = ('En Moderación');

        if($request->hasFile('imagen')){
          if ($hospedador->imagen === 'post-placeholder.jpg')
          {
          }else {
          unlink(public_path().'/imagenes/clasificados/hospedador/'.$hospedador->imagen);
          }
          $file = $request->file('imagen');
          $name_image = time().$file->getClientOriginalName();
          $file->move(public_path().'/imagenes/clasificados/hospedador/',$name_image);
          $hospedador->imagen = $name_image;

        }

        $hospedador->save();

      return redirect('/miPerfil')->with('success','Datos del anuncio de Alquiler Actualizados Exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { $file = Hospedaje::where('id', $id)->find($id);
      $usr = (auth()->user()->email);

      if ($usr ===$file->email)
      {
        if ($file->imagen === 'post-placeholder.jpg')
        {
        Hospedaje::where('id', $id)->delete();
        return back()->with('success','Anuncio eliminado exitosamente.');
        }
       else {
         $file = Hospedaje::where('id', $id)->find($id);
         if(unlink(public_path().'/imagenes/clasificados/hospedador/'.$file->imagen)){
          $file->delete();
          return back()->with('success','Anuncio eliminado exitosamente.');
             }
       }
      }
     }

}
