@extends('layouts.app')
@section('titulo', 'Formulario de aluno')
@section('conteudo')
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <div>
                        <h4 class="grey-text" align="center">Cadastro de Aluno</h4>
                    </div>
                    <form method="post" action="{{route('aluno.salvar')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div id="oculto">
                                <input type="number" name="id_aluno" id="id_aluno"
                                       value="" hidden>
                            </div>
                            <div class="input-field col s12">
                                <input id="tx_nome" name="tx_nome" type="text" class="validate" required
                                       value="">
                                <label for="tx_nome">Nome</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" id="nu_codigo" name="nu_codigo" validate required
                                       value="" maxlength="4">
                                <label for="nu_codigo">Codigo</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" maxlength="9" id="nu_cep" name="nu_cep" class="validate" required
                                       value="">
                                <label for="nu_cep">CEP</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" id="tx_endereco" name="tx_endereco" class="validate" required
                                       value="">
                                <label for="tx_endereco">Endereço</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" id="nu_numero" name="nu_numero" class="validate" required
                                       value="">
                                <label for="tx_endereco">Nº</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="tx_bairro" name="tx_bairro" class="validate" required
                                       value="">
                                <label for="tx_bairro">Bairro</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="tx_cidade" name="tx_cidade" class="validate" required
                                       value="">
                                <label for="tx_cidade">Cidade</label>
                            </div>
                            <div class="input-field col s1">
                                <input type="text" id="tx_uf" maxlength="2" name="tx_uf" class="validate" required
                                       value="">
                                <label for="tx_uf">UF</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" id="nu_fone" name="nu_fone" required class="validate"
                                       value="">
                                <label for="nu_fone">Telefone</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" id="nu_fone2" name="nu_fone2" class="validate"
                                       value="">
                                <label for="nu_fone2">Celular</label>
                            </div>

                            <div class="col s12 right-align">
                                <input type="submit" value="Salvar" id="salvar" name="salvar" class="btn btn-success">
                                <a href="{{route('aluno.index')}}" class="btn red">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection