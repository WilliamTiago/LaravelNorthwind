@extends('layout/ViewLayout')

@section('content')

<br><br><br><br><br>

<center>
    <h2>Consulta de Região</h2>
</center>
<br>

<table class="table table-striped">
    <tr>
        <th>Código da Região</th>
        <th>Descrição da Região</th>
        <th>Ações</th>
    </tr>

    @foreach($regiao as $oRegiao)

    <tr>
        <td>{{ $oRegiao->IDRegiao }}</td>
        <td>{{ $oRegiao->DescricaoRegiao }}</td>
        <td>
            <a href="">
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

