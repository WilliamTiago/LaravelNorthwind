@extends('layout/ViewLayout')

@section('content')

<br><br><br><br><br>

<center>
    <h2>Cadastro de Região</h2>
</center>
<br>

<div class = "divFormCadFuncionarios">
    <form class = "container" action = "" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="idregiao">Identificador da Região</label>
                    <input style="width: 100px;" type="number" id="idregiao" class="form-control" name="idregiao" placeholder="Cód Reg">
                </div>
                <div class="form-group">
                    <label for="desregiao">Descrição da Região</label>
                    <input style="width: 400px;" type="text" id="desregiao" class="form-control" name="desregiao" placeholder="Descrição">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a href = ""><button class="btn btn-default">Cancelar</button></a>
        <button class="btn btn-default">Limpar</button>
    </form>
</div>

<?php @stop ?>
@endsection