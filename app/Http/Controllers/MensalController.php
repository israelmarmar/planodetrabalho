<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mensal;

class MensalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mensal::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Mensal::create($request->all());
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
        Mensal::find($id);
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
        $mensal = Mensal::find($id);

        if($request->has('Relatorios'))
        $mensal->Relatorios = $request->Relatorios;

        if($request->has('Reunioes'))
        $mensal->Reunioes = $request->Reunioes;

        if($request->has('Status'))
        $mensal->Status = $request->Status;

        if($request->has('Status'))
        $mensal->Status = $request->Status;

        $mensal->touch();

        $mensal->save();

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
        Mensal::destroy($id);
        return ["status" => "ok", "code"=> 200, 'message' => 'removido'];
    }
}
