@extends('layouts.app')
@section('titulo', 'Listagem de Aluno')
@section('conteudo')
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <h4>Alunos</h4>
                    <table class="table bordered responsive-table">
                        <tr>
                            <th>Ação</th>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Celular</th>
                        </tr>
                        @foreach($dados as $atual)
                            <tr>
                                <td><i class="material-icons">edit</i></td>
                                <td>{{$atual['id_aluno']}}</td>
                                <td>{{$atual['nu_codigo']}}</td>
                                <td>{{$atual['tx_nome']}}</td>
                                <td>{{$atual['nu_fone']}}</td>
                                <td>{{$atual['nu_fone2']}}</td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="right-align">
                        <a class="btn-floating btn-large waves-effect waves-light red"
                        href="{{route('aluno.form')}}">
                            <i class="material-icons">add</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection