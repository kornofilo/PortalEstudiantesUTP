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

        $datos = Compraventa::where('estadoPost','Aprobada')->orderBy('id','desc')->paginate(10);
        return view('clasificado.Anuncios.anuncios')->with(compact('datos'));
    }
    public function search(Request $request)
    {
      $search = $request->get('search');
      $datos = Compraventa::where('estadoPost','Aprobada')
                            ->whereRaw('concat(nombreArt,categoria,precio,estado,codigoPost) like \'%' .$search .'%\' ')
                            ->paginate(10);
      return view('clasificado.Anuncios.anuncios',compact('datos'));
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
        ]);
        $anuncio = new Compraventa();

        $anuncio->categoria = $request->input('categoria');
        //Generación de Código de Publicación.
        $anuncio->codigoPost = 'CV-' . (Compraventa::all()->max('id') + 1);
        $anuncio->nombreArt = $request->input('nombreArt');
        $anuncio->precio = $request->input('precio');
        $anuncio->estado = $request->input('estado');
        $anuncio->descripcion = $request->input('descripcion');
        $anuncio->celular = $request->input('celular');
        $anuncio->email = \Auth::user()->email;
        $anuncio->nombre = \Auth::user()->nombre;
        //
        if ($request->hasFile('imagen')) {
          $file = $request->file('imagen');
          $name_image = time().$file->getClientOriginalName();
          $file->move(public_path().'/imagenes/clasificados/anuncios',$name_image);
          $anuncio->imagen =$name_image;
        }
        //
        $anuncio->save();
        return back()->with('success','Anuncio: '.$anuncio->nombreArt.' Creado exitosamente y se ha Enviado a Moderación.');
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
          $datos->categoria = $request->get('categoria');
          $datos->nombreArt = $request->get('nombreArt');
          $datos->precio = $request->get('precio');
          $datos->estado = $request->get('estado');
          $datos->descripcion = $request->get('descripcion');
          $datos->celular = $request->get('celular');
          $datos->estadoPost = ('En Moderación');

          if($request->hasFile('imagen')){
            if ($datos->imagen === 'post-placeholder.jpg')
            {
            }else {
            unlink(public_path().'/imagenes/clasificados/anuncios/'.$datos->imagen);
            }
            $file = $request->file('imagen');
            $name_image = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/clasificados/anuncios/',$name_image);
            $datos->imagen = $name_image;
          }

          $datos->save();

        return redirect('/miPerfil')->with('success','Datos del Anuncio Actualizados Existosamente.');
      }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


      public function destroy($id)
      { $file = Compraventa::where('id', $id)->find($id);
        $usr = (auth()->user()->email);

        if ($usr ===$file->email)
        {
          if ($file->imagen === 'post-placeholder.jpg')
          {
          Compraventa::where('id', $id)->delete();
          return back()->with('success','Anuncio Eliminado Exitosamente.');
          }
         else {
           $file = Compraventa::where('id', $id)->find($id);
           if(unlink(public_path().'/imagenes/clasificados/anuncios/'.$file->imagen)){
            $file->delete();
            return back()->with('success','Anuncio Eliminado Exitosamente.');
               }
         }
        }
       }
}
