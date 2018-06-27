<?php

namespace Northwind\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * Controllador do Funcionário
 * 
 * @package Controller
 * @author  William Goebel
 * @since   25/06/2018
 */
class ControllerFuncionario extends Controller {

    /**
     * SQL padrão da Consulta de Funcionários.
     * 
     * @return Object
     */
    public function getSqlPadraoConsultaFuncionario() {
        $bFuncionario = DB::select('SELECT * FROM funcionarios');
        return view('funcionario/ViewConsultaFuncionario')->with('funcionarios', $bFuncionario);
    }

    /**
     * Busca o SQL da consulta do Relacionamento Funcionário x Território.
     * 
     * @return Object
     */
    public function getSqlConultaFuncionarioTerritorio() {
        $bFuncionariosTerritorios = DB::select('SELECT * FROM funcionarios_territorios JOIN territorios USING(IDTerritorio) JOIN funcionarios USING(IDFuncionario)');
        return view('funcionario/ViewConsultaFuncionarioTerritorio')->with('funcionarios_territorios', $bFuncionariosTerritorios);
    }

    public function getSqlAdicionaFuncionario() {
        $bFuncionario = DB::select('SELECT * FROM funcionarios');
        $Contador = DB::select('SELECT COUNT(IDFuncionario) from funcionarios') + 1;
        $Nome = Request::input('nome');
        $Sobrenome = Request::input('sobrenome');
        $Titulo = Request::input('titulo');
        $TituloCortesia = Request::input('titulocortesia');
        $DataNac = Request::input('datanac');
        $DataAdmissao = Request::input('dataadmissao');
        $Endereco = Request::input('endereco');
        $Cidade = Request::input('cidade');
        $Regiao = Request::input('regiao');
        $Cep = Request::input('cep');
        $Pais = Request::input('pais');
        $TelefoneResidencial = Request::input('telefoneresidencial');

        DB::table('funcionarios')->insert(
                ['IDFuncionario' => $Contador,
                    'Nome' => $Nome,
                    'Sobrenomenome' => $Sobrenome,
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
