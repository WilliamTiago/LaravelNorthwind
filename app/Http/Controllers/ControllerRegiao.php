<?php
namespace Northwind\Http\Controllers;
use Illuminate\Support\Facades\DB;

/**
 * Controllador da Região
 * 
 * @package Controller
 * @author  William Goebel
 * @since   25/06/2018
 */

class ControllerRegiao extends Controller {
    
    /**
     * Busca o SQL padrão da Consulta da Região.
     * 
     * @return Object
     */
    
    public function getSqlPadraoConsultaRegiao() {
        $bRegiao = DB::select('SELECT * FROM regiao ');
        return view('regiao/ViewConsultaRegiao')->with('regiao', $bRegiao);
    }
    
}