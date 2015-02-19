@extends('theme::main')

<?php $sideleft = false; ?>

@section('content')
    <h4>Configurando o ambiente</h4>
    <p>
        Abaixo você deve digitar algumas informações que definem qual o ambiente que pretendes instalar.
    </p>

    <form class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-3">Tipo de ambiente</label>
            <div class="col-sm-5">
                <div class="radio">
                    <label>
                        <input type="radio" name="gambiente" value="development" ng-model="ambiente.type">
                        de Desenvolvimento e Teste (recomendado para instalações locais)
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gambiente" value="production" ng-model="ambiente.type">
                        de Produção
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="dominio" class="col-sm-3">Domínio</label>
            <div class="col-sm-5">
                <input type="url" class="form-control" id="dominio" ng-model="ambiente.domain">
                <p class="help-block">Informa a URL base de seu dominio. Ex.: http://localhost/netforce ou http://www.netforce.com.br</p>
            </div>
        </div>

        <button ng-click="go('install/banco');" class="btn btn-default">Voltar</button>
        <button ng-click="go('install/xxx');" class="btn btn-primary">Próximo</button>
    </form>
@endsection
