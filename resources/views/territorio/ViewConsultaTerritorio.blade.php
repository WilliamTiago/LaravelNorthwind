@extends('layout/ViewLayout')

@section('content')

<center>
    <h2>Consulta de Território</h2>
</center>
<br>

<table class="table table-striped">
    <tr>
        <th>Código do Territorio</th>
        <th>Descrição do Territorio</th>
        <th>Código da Região</th>
        <th>Descrição da Região</th>
        <th>Ações</th>
    </tr>

    @foreach($territorios as $oTerritorio)
    <tr>
        <td>{{ $oTerritorio->IDTerritorio }}</td>
        <td>{{ $oTerritorio->DescricaoTerritorio }}</td>
        <td>{{ $oTerritorio->IDRegiao }}</td>
        <td>{{ $oTerritorio->DescricaoRegiao }}</td>
        <td>
            <a href="">
                [...]
            </a>
            <a href="">
                [ X ]
            </a>
        </td>
    </tr>
    
    @endforeach

</table>

@stop