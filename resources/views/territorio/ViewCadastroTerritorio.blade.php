@extends('layout/ViewLayout')

@section('content')

<br><br><br><br><br>

<center>
    <h2>Cadastro de Território</h2>
</center>
<br>

<div class = "divFormCadFuncionarios">
    <form class = "container" action = "" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="idfuncionario">Identificador do Território</label>
                    <input style="width: 100px;" type="number" id="idfuncionario" class="form-control" name="idfuncionario" placeholder="Cód Ter">
                </div>
                <div class="form-group">
                    <label for="descricaoterritorio">Descrição do Território</label>
                    <input style="width: 400px;" type="text" id="descricaoterritorio" class="form-control" name="descricaoterritorio" placeholder="Descrição">
                </div>
                <div class="form-group">
                    <label for="idregiao">Código da Região</label>
                    <input style="width: 100px;" type="text" id="idregiao" class="form-control" name="idregiao" placeholder="Cód Reg">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição do Região</label>
                    <input style="width: 300px;"type="text" id="descricao" class="form-control" name="descricao" placeholder="Selecione...">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a href = ""><button class="btn btn-default">Cancelar</button></a>
        <button class="btn btn-default" >Limpar</button>
    </form>
</div>

@stop
