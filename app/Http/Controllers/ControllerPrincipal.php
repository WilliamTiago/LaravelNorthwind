<?php

namespace Northwind\Http\Controllers;

/**
 * Controllador Principal
 * 
 * @package Controller
 * @author  William Goebel
 * @since   25/06/2018
 */

class ControllerPrincipal extends Controller {
    
    /**
     * Busca a View Inicial da Página
     * 
     * @return Object
     */
    
    public function getViewHome() {
        return view('layout/ViewHome');
    }
    
    /**
     * Busca a View de Cadastro do Funcionário
     * 
     * @return Object
     */
    
    public function getViewCadastroFuncionario() {
        return view('funcionario/ViewCadastroFuncionario');
    }
    
    /**
     * Busca a View de Cadstro do Território
     * 
     * @return Object
     */
    
    public function getViewCadastroTerritorio() {
        return view('territorio/ViewCadastroTerritorio');
    }
    
    /**
     * Busca a View de Cadastro da Região
     * 
     * @return Object
     */
    
    public function getViewCadastroRegiao() {
        return view('regiao/ViewCadastroRegiao');
    }
    
}