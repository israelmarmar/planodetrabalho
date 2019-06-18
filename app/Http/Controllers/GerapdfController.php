<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Http\Controllers\PlanodetrabalhoController;
use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\MetaController;
use PDF;
  
class GerapdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        $id=$request->id;
        $Plano = (new AtividadeController())->mostrar_planodetrabalho($id);
        $Metas=(new PlanodetrabalhoController())->mostrar_metas($Plano->id);
        $Data = ['Metas' => $Metas,'Titulo' => $Plano->NomePlano];

        $pdf = PDF::loadView('myPDF', $Data);
  
        //return $pdf->download('relatorio.pdf');
        return view('myPDF',$Data);
    }
}