@extends('layout/ViewLayout')

@section('content')
<br><br><br><br><br>

<center>
    <h2>Cadastro de Funcionario</h2>
</center>
<br>

<div class = "container">
    
    <form class = "container" action = "/adicionafuncionario" method = "POST"> 
        <div class = "container">
            <input type="hidden" name="_token" value='{{ csrf_token() }}'>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" id="sobrenome" class="form-control" name="sobrenome" placeholder="Sobrenome">
            </div>
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="titulocortesia">Titulo Cortesia</label>
                <input type="text" id="titulocortesia" class="form-control" name="titulocortesia" placeholder="Titulo Cortesia">
            </div>
            <div class="form-group">
                <label for="datanac">Data de Nascimento</label>
                <input type="date" id="datanac" class="form-control" name="datanac" placeholder="Data Nascimento">
            </div>
            <div class="form-group">
                <label for="dataadmissao">Data de Adminissão</label>
                <input type="date" id="dataadmissao" class="form-control" name="dataadmissao" placeholder="Data Admissão">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Endereço">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" class="form-control" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="regiao">Região</label>
                <input type="text" id="regiao" class="form-control" name="regiao" placeholder="Região">
            </div>
            <div class="form-group">
                <label for="cep">cep</label>
                <input type="text" id="cep" class="form-control" name="cep" placeholder="Cep">
            </div>
            <div class="form-group">
                <label for="pais">País</label>
                <input type="text" id="pais" class="form-control" name="pais" placeholder="País">
            </div>
            <div class="form-group">
                <label for="telefoneresidencial">Telefone Residencial</label>
                <input type="text" id="telefoneresidencial" class="form-control" name="telefoneresidencial" placeholder="Telefone">
            </div>
        </div>

        <button type="submit" class="btn btn-default">Confirmar</button>
        <button type="reset" class="btn btn-default" >Limpar</button>
        <a class="btn btn-default" href="/home/consultafuncionario">Cancelar</a>
        
    </form>
</div>
<br>

@stop