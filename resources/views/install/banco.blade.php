@extends('theme::main')

<?php $sideleft = false; ?>

@section('content')
    <h4>Configurando o banco de dados</h4>
    <p>
        Abaixo você deve digitar as informações de conexão com o banco de dados. Se você não tem certeza quais são, contate sua hospedagem.
    </p>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="dbname" class="col-sm-3">Nome do banco de dados</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="dbname" ng-model="db.name">
                <p class="help-block">Nome do banco de dados onde você quer instalar o NetForce Framework</p>
            </div>
        </div>
        <div class="form-group">
            <label for="usuario" class="col-sm-3">Nome do usuário</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="usuario" ng-model="db.user">
                <p class="help-block">O nome do usuário deve ter previlégios de administração</p>
            </div>
        </div>
        <div class="form-group">
            <label for="senha" class="col-sm-3">Senha</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="senha" placeholder="Senha do usuário" ng-model="db.password">
                <p class="help-block">Senha para acesso do banco mysql para o usuário informado</p>
            </div>
        </div>
        <div class="form-group">
            <label for="servidor" class="col-sm-3">Nome do servidor</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="servidor" ng-model="db.host">
                <p class="help-block">Você deve obser esta informação do seu servidor de hospedagem, se localhost não funcionar</p>
            </div>
        </div>
        <button ng-click="go('install/home');" class="btn btn-default">Voltar</button>
        <button ng-click="go('install/ambiente');" class="btn btn-primary">Próximo</button>
    </form>
@endsection
