@extends('theme::main')

<?php $sideleft = false; ?>

@section('content')
    <h3>NetForce Framework</h3>
    <h4>Bem vindo ao NetForce Framework baseado em Laravel</h4>
    <p>
        Antes de continuar, vamos precisar de alguns minutinhos para configurar o seu ambiente.<br>
        Para começar, vamos precisar que você nos informe os seguintes parâmetros:
    </p>

    <ul>
        <li>Nome de banco de dados</li>
        <li>Nome do usuário de banco de dados</li>
        <li>Senha do banco de dados</li>
        <li>Se o ambiente será um ambiente de desenvolvimento ou produção</li>
    </ul>
    <p>
        Este framework é distribuído com seu código aberto...
    </p>
    <br>
    <br>
    <a href="[[ URL::to('/install/banco') ]]" class="btn btn-primary">Vamos lá!</a>

@endsection
