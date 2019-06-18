<?php

namespace App\Http\Controllers;

use App\Planodetrabalho;
use Illuminate\Http\Request;
use App\Http\Controllers\MetaController;
use App\Meta;

class PlanodetrabalhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Planodetrabalho::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Planodetrabalho::create($request->all());
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
     * @param  \App\Planodetrabalho  $planodetrabalho
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Planodetrabalho::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Planodetrabalho  $planodetrabalho
     * @return \Illuminate\Http\Response
     */
    public function edit(Planodetrabalho $planodetrabalho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planodetrabalho  $planodetrabalho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $planodetrabalho = Planodetrabalho::find($id);

        $planodetrabalho->NomePlano = $request->NomeProcesso;

        $planodetrabalho->touch();

        $planodetrabalho->save();

        return ["status" => "ok", "code" => 200, 'message' => 'alterado'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planodetrabalho  $planodetrabalho
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Planodetrabalho::destroy($id);
        return ["status" => "ok", "code" => 200, 'message' => 'removido'];
    }

    public function mostrar_atividades($id){
        return Planodetrabalho::find($id)->atividade;
    }

    public function mostrar_metas($id){

        $Metas = Planodetrabalho::find($id)->meta;

        for ($i = 0; $i < sizeof($Metas) - 1; $i++) {
            $Diarias = (new MetaController())->metas_diarias_all($Metas[$i]["id"]);
            $Metas[$i]["metas_diaria"] = $Diarias;
        }

        return $Metas;
    }

    public function mostrar_metas_por_data(Request $request, $id){

        return Planodetrabalho::find($id)->whereBetween('timestamp', [$request-datai, $request-dataf])->get();
    }
}
