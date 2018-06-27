<?php
namespace Northwind\Http\Controllers;
use Illuminate\Support\Facades\DB;

/**
 * Controllador do Território
 * 
 * @package Controller
 * @author  William Goebel
 * @since   25/06/2018
 */
class ControllerTerritorio extends Controller {
    
    /**
     * Busca o SQL da Consulta Padrão do Território.
     * 
     * @return Object
     */
    
    public function getSqlPadraoConsultaTerritorio() {
        $bTerritorio = DB::select('SELECT * FROM territorios JOIN regiao USING(IDRegiao)');
        return view('territorio/ViewConsultaTerritorio')->with('territorios', $bTerritorio);
    }
    
}