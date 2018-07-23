<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Marca;
use App\Feriado;

class FeriadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$marcas = Marca::where([
            ['Codigo','0000000192'],
            ['Fecha','>','1-06-2018']
        ])->get();
        $empleados = Empleado::where([
            ['Sueldo','>',1000]
        ])->get();
        return view('feriados.index',compact('marcas','empleados'));*/
        $feriados = Feriado::all();
        return view('Feriados.index',compact('feriados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Feriados.create',[
            'route' => route('Feriados.store'),
            'model' => Feriado::class,
            'action' => 'create'
        ])->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Feriado::create($request->all());
        return redirect()->route('Feriados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feriado = Feriado::findOrFail($id);
        return view('Feriados.show', compact('feriado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feriado = Feriado::findOrFail($id);
        return view('Feriados.edit',[
            'route' => route('Feriados.update',$id),
            'model' => Feriado::class,
            'action' => 'edit',
            'feriado' => $feriado
        ])->render();
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
        Feriado::findOrFail($id)->Update($request->all());
        return redirect()->route('Feriados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feriado::findOrFail($id)->delete();
        return redirect()->route('Feriados.index');
    }
}
