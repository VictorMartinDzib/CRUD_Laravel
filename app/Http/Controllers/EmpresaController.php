<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas=\App\Empresa::all();
        return view('index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nuevaempresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('logotipo'))
        {
            $file = $request->file('logotipo');
            $name = time() . $file->getClientOriginalName();
            //CREA EN PUBLIC LA CARPETA images/empresas
            $file->move(public_path().'/images/empresas', $name);
        }else{
            $name = "hola";
        }
        $empresa = new \App\Empresa;
        $empresa->nombre=$request->get('nombre');
        $empresa->RFC=$request->get('rfc');
        $empresa->direccion=$request->get('direccion');
        $empresa->sitioWeb=$request->get('sitioWeb');
        $empresa->telefono=$request->get('telefono');
        $empresa->contacto=$request->get('contacto');
        $empresa->email=$request->get('email');
        $empresa->logotipo=$name;
        $empresa->save();

        return redirect('empresas')->with('success', "Empresa guardada correctamente");
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
        $empresa = \App\Empresa::find($id);
        return view('editarempresa', compact('empresa', 'id'));
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
        $empresa = new \App\Empresa;
        $empresa->nombre=$request->get('nombre');
        $empresa->RFC=$request->get('rfc');
        $empresa->direccion=$request->get('direccion');
        $empresa->sitioWeb=$request->get('sitioWeb');
        $empresa->telefono=$request->get('telefono');
        $empresa->contacto=$request->get('contacto');
        $empresa->email=$request->get('email');
        $empresa->logotipo=$name;
        $empresa->save();

        return redirect('empresas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = \App\Empresa::find($id);
        $empresa -> delete();
        return redirect('empresas') -> with('success', 'La empresa ha sido eliminada');
    }
}
