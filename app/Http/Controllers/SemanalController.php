<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Semanal;

class SemanalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Semanal::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Semanal::create($request->all());
        return $request->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Semanal::find($id);
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
        $semanal = Semanal::find($id);

        if($request->has('RotinaDefinida'))
        $semanal->RotinaDefinida = $request->RotinaDefinida;

        if($request->has('Checagem'))
        $semanal->Checagem = $request->Checagem;

        if($request->has('Backup'))
        $semanal->Backup = $request->Backup;

        if($request->has('Manuntencao'))
        $semanal->Manuntencao = $request->Manuntencao;

        if($request->has('Status'))
        $semanal->Status = $request->Status;

        if($request->has('meta_id'))
        $semanal->meta_id = $request->meta_id;

        $semanal->touch();

        $semanal->save();

        return ["status" => "ok", "code" => 200, 'message' => 'alterado'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Semanal::destroy($id);
        return ["status" => "ok", "code"=> 200, 'message' => 'removido'];
    }
}
