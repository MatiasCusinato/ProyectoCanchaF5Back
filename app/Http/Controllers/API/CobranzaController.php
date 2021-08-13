<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cobranza;

class CobranzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cobranza = Cobranza::all();
        return $cobranza->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cobranza = Cobranza::create($request->all());
        return response()->json($cobranza, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cobranza = Cobranza::find($id);
        return $cobranza->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cobranza $cobranza)
    {
        $cobranza->update($request->all());
        return response()->json(['SolicitudHTTP' => 'Exitosa', 'Mensaje' => 'Cobranza editada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cobranza $cobranza)
    {
        Cobranza::destroy($cobranza->id);
        return response()->json(['SolicitudHTTP' => 'Exitosa', 'Mensaje' => 'Cobranza eliminada']);
    }
}
