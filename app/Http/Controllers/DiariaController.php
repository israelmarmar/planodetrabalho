<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DateTime;

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
        $datainicio =  $request->datainicio;
        $datafim =  $request->datafim;

        $datainicioTimestamp = strtotime($datainicio);
        $datafimTimestamp = strtotime($datafim);

        $dif = $datafimTimestamp - $datainicioTimestamp;

        $dias = floor($dif / (60 * 60 * 24)) + 1;

        for ($i = 0; $i < $dias; $i++) {
            $response = $request->all();

            $date1 = new DateTime();
            $date2 = new DateTime();

            $date1->setTimestamp($datainicioTimestamp + $i*24*60*60);
            $date2->setTimestamp($datainicioTimestamp + $i*24*60*60);

            $response["datainicio"] = $date1->format('Y-m-d');
            $response["datafim"] = $date2->format('Y-m-d');

            Diaria::create($response);
        }

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

        $currentTime = time();
        $final = (new DateTime('23:59:59'))->getTimestamp();

        $Diaria = Diaria::find($id);
        $dif = $final - $currentTime;

        $Diaria["restante"] = $dif/ 3600 % 24 . ':' . $dif/ 60 % 60 . ':' . $dif % 60;
        // $Diaria["restante"] = $currentTime/ 3600 % 24 . ':' . $currentTime/ 60 % 60 . ':' . $currentTime % 60;
        return $Diaria;
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

        if ($request->has('RotinaDefinida'))
            $diaria->RotinaDefinida = $request->RotinaDefinida;

        if ($request->has('Checagem'))
            $diaria->Checagem = $request->Checagem;

        if ($request->has('Backup'))
            $diaria->Backup = $request->Backup;

        if ($request->has('Manutencao'))
            $diaria->Manutencao = $request->Manutencao;

        if ($request->has('Status'))
            $diaria->Status = $request->Status;

        if ($request->has('datainicio'))
            $diaria->datainicio = $request->datainicio;

        if ($request->has('datafim'))
            $diaria->datafim = $request->datafim;

        if ($request->has('observacoes'))
            $diaria->observacoes = $request->observacoes;

        if ($request->has('meta_id'))
            $diaria->meta_id = $request->meta_id;

        if ($request->has('resultado'))
            $diaria->resultado = $request->resultado;

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
        return ["status" => "ok", "code" => 200, 'message' => 'removido'];
    }
}
