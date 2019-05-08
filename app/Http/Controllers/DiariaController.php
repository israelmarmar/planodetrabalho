<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Diaria;

class DiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Diaria::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Diaria::create($request->all());
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
        return Diaria::find($id);
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
        $diaria = Diaria::find($id);

        if($request->has('RotinaDefinida'))
        $diaria->RotinaDefinida = $request->RotinaDefinida;

        if($request->has('Checagem'))
        $diaria->Checagem = $request->Checagem;

        if($request->has('Backup'))
        $diaria->Backup = $request->Backup;

        if($request->has('Manuntencao'))
        $diaria->Manuntencao = $request->Manuntencao;

        if($request->has('Status'))
        $diaria->Status = $request->Status;

        if($request->has('meta_id'))
        $diaria->meta_id = $request->meta_id;

        $diaria->touch();

        $diaria->save();

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
        Diaria::destroy($id);
        return ["status" => "ok", "code"=> 200, 'message' => 'removido'];
    }
}
