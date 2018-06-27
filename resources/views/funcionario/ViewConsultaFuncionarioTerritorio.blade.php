@extends('layout/ViewLayout')

@section('content')

<br><br><br><br><br>

<center>
    <h2>Funcionário X Território</h2>
</center>
<br>

<table class="table table-striped">
    <tr>
        <th>Código do Funcionário</th>
        <th>Nome</th>
        <th>Código do Território</th>
        <th>Descrição</th>
    </tr>

    @foreach($funcionarios_territorios as $oFunc)

    <tr>
        <td>{{ $oFunc->IDFuncionario }}</td>
        <td>{{ $oFunc->Nome }}</td>
        <td>{{ $oFunc->IDTerritorio }}</td>
        <td>{{ $oFunc->DescricaoTerritorio }}</td>
    </tr>

    @endforeach

</table>

@stop

