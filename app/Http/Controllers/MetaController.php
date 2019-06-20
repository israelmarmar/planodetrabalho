<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Meta;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Meta::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Meta::create($request->all());
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
        return Meta::find($id);
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
        $meta = Meta::find($id);

        if($request->has('Atividade'))
        $meta->Atividade = $request->Atividade;

        if($request->has('Responsavel'))
        $meta->Responsavel = $request->Responsavel;

        if($request->has('atividade_id'))
        $meta->atividade_id = $request->atividade_id;

        $meta->touch();

        $meta->save();

        return ["status" => "ok", "code" => 200, 'message' => 'alterado'];
    }

    public function metas_diarias($id)
    {   
        return Meta::find($id)->diaria("2019-06-20");
    }

    public function metas_diarias_all($id)
    {   
        return Meta::find($id)->diaria_all;
    }


    public function metas_semanais($id)
    {
        return Meta::find($id)->semanal;
    }

    public function metas_mensais($id)
    {
        return Meta::find($id)->mensal;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Meta::destroy($id);
        return ["status" => "ok", "code"=> 200, 'message' => 'removido'];
    }
}
