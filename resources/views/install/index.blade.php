@extends('theme::main')

<?php $sideleft = false; ?>

@section('content')
    <h3>NetForce Framework</h3>

    <div ng-controller="InstallCtrl" ng-init="step.urlbase = '[[ URL::to('') ]]'; go('install/home');">
        <div ng-include="step.url"></div>
    </div>

@endsection
