<?php

namespace Northwind\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Request;

/**
 * Controllador do Funcionário
 * 
 * @package Controller
 * @author  William Goebel
 * @since   25/06/2018
 */

class ControllerFuncionario extends Controller {

    /**
     * Consulta de Funcionários.
     * 
     * @return Object
     */
    public function getSqlPadraoConsultaFuncionario() {
        $bFuncionario = DB::select('SELECT * FROM funcionarios');
        return view('funcionario/ViewConsultaFuncionario')->with('funcionarios', $bFuncionario);
    }
    
    /**
     * Carregar dados do funcionário selecionado na tela de alteração.
     * 
     * @return Object
     */
    public function getSqlAlteraFuncionario($id) {
        $bFuncionario = DB::select("SELECT * FROM funcionarios WHERE IDFuncionario = {$id}");
        return view('funcionario/ViewAlteraFuncionario')->with('bFuncionario', $bFuncionario[0]);
    }
    
    /**
     * Excluir dados do funcionário selecionado na tela de alteração.
     * 
     * @return Object
     */
    public function getSqlExcluiFuncionario($id) {
        $bFuncionario = DB::select("Delete FROM funcionarios WHERE IDFuncionario = {$id}");
        $bFuncionario = DB::select('SELECT * FROM funcionarios');
        return view('funcionario/ViewConsultaFuncionario')->with('funcionarios', $bFuncionario);
    }
    
    /**
     * Alterar dados do funcionário selecionado.
     * 
     * @return Object
     */
    public function getSqlAlteraUpdateFuncionario() {
        $ID                = Request::input('id');
        $Nome              = Request::input('nome');
        $bFuncionario = DB::select("UPDATE `funcionarios` SET `Nome` = '".$Nome."'  WHERE IDFuncionario =" . $ID );
        $bFuncionario = DB::select('SELECT * FROM funcionarios');
        return view('funcionario/ViewConsultaFuncionario')->with('funcionarios', $bFuncionario);
    }

    /**
     * Busca o Relacionamento Funcionário x Território.
     * 
     * @return Object
     */
    public function getSqlConultaFuncionarioTerritorio() {
        $bFuncionariosTerritorios = DB::select('SELECT * FROM funcionarios_territorios JOIN territorios USING(IDTerritorio) JOIN funcionarios USING(IDFuncionario)');
        return view('funcionario/ViewConsultaFuncionarioTerritorio')->with('funcionarios_territorios', $bFuncionariosTerritorios);
    }

    /**
     * Insere o Funcionário no Banco.
     * 
     * @return Object
     */
    public function getSqlAdicionaFuncionario() {
        $bFuncionario        = DB::select('SELECT * FROM funcionarios');
        $Contador            = DB::select('SELECT (MAX(IDFuncionario+1)) AS max FROM funcionarios');
        $Nome                = Request::input('nome');
        $Sobrenome           = Request::input('sobrenome');
        $Titulo              = Request::input('titulo');
        $TituloCortesia      = Request::input('titulocortesia');
        $DataNac             = Request::input('datanac');
        $DataAdmissao        = Request::input('dataadmissao');
        $Endereco            = Request::input('endereco');
        $Cidade              = Request::input('cidade');
        $Regiao              = Request::input('regiao');
        $Cep                 = Request::input('cep');
        $Pais                = Request::input('pais');
        $TelefoneResidencial = Request::input('telefoneresidencial');

        DB::table('funcionarios')->insert(
                ['IDFuncionario' => $Contador[0]->max,
                    'Nome' => $Nome,
                    'Sobrenome' => $Sobrenome,
                    'Titulo' => $Titulo,
                    'TituloCortesia' => $TituloCortesia,
                    'DataNac' => $DataNac,
                    'DataAdmissao' => $DataAdmissao,
                    'Endereco' => $Endereco,
                    'Cidade' => $Cidade,
                    'Regiao' => $Regiao,
                    'Cep' => $Cep,
                    'Pais' => $Pais,
                    'TelefoneResidencial' => $TelefoneResidencial]
        );

        return view('funcionario/ViewConsultaFuncionario')->with('funcionarios', $bFuncionario);
    }

}
