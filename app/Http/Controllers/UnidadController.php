<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidad;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidad = Unidad::paginate(5);
        return $unidad;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'max:50|required',
            'municipio_id' => 'required',
            'telefono' => 'max:20|required',
        ]);

        return Unidad::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function show(Unidad $unidad)
    {
        return $unidad;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidad $unidad)
    {
        $data = $request->validate([
            'nombre' => 'max:50|required',
            'municipio_id' => 'required',
            'telefono' => 'max:20|required',
        ]);

        $unidad->update($data);

        return $unidad;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unidad $unidad)
    {
        $unidad->delete();
        return $unidad;
    }
}
