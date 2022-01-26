<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\TipoContrato;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();

        return view('welcome', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contratos = TipoContrato::all();
        return view('empleado.form', compact('contratos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();

        $empleado->contrato_id = $request->get('contrato_id');
        $empleado->fullname = $request->get('fullname');
        $empleado->dni = $request->get('dni');
        $empleado->email = $request->get('email');
        $empleado->phone = $request->get('phone');

        $empleado->save();

        return redirect('/');
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
        $empleado = Empleado::find($id);
        $contratos = TipoContrato::all();

        return view('empleado.edit', compact('empleado', 'contratos'));
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
        $empleado = Empleado::find($id);

        $empleado->contrato_id = $request->get('contrato_id');
        $empleado->fullname = $request->get('fullname');
        $empleado->dni = $request->get('dni');
        $empleado->email = $request->get('email');
        $empleado->phone = $request->get('phone');

        $empleado->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();

        return redirect('/');
    }
}
