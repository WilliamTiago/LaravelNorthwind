@extends('layout/ViewLayout')

@section('content')

<br><br><br><br><br>

<center>
    <h2>Consulta de Funcionarios</h2>
</center>
<br>

<table class="table table-striped">

    <tr>
        <th>Cód Func</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Titulo</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Região</th>
        <th>País</th>
        <th>Ações</th>
    </tr>
    
    @foreach ($funcionarios as $oFunc)
    
        <tr>
            <td>{{ $oFunc->IDFuncionario }}</td>
            <td>{{ $oFunc->Nome }}</td>
            <td>{{ $oFunc->Sobrenome }}</td>
            <td>{{ $oFunc->Titulo }}</td>
            <td>{{ $oFunc->Endereco }}</td>
            <td>{{ $oFunc->Cidade }}</td>
            <td>{{ $oFunc->Regiao }}</td>
            <td>{{ $oFunc->Pais }}</td>
            <td>
                <a href="/home/alterafuncionario/{{ $oFunc->IDFuncionario }}" >
                    <i class="far fa-edit"></i>
                </a>
                <a href="">
                    <i class="far fa-file-excel"></i>
                </a>
            </td>
        </tr>
        
    @endforeach

</table>

@stop
