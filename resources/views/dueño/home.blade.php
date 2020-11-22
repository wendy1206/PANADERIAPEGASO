@extends('layouts.app')

@section('content')

<div class="row mb-3">
    <div class="col text-left mb-4">
        <h4>A donde quieres ir ? </h4>
    </div>
</div>
<div class="row mb-3">
    <div class="col text-center" >
        <a href="/dueño/listar" class="btn btn-secondary btn-block active" style="font-size:20px"> ADMINISTRADORES </a>
    </div>
    <div class="col text-center" >  
        <a href="/dueño/productos" class="btn btn-secondary btn-block active" style="font-size:20px"> PRODUCTOS </a>
    </div>
    <div class="col text-center" > 
        <a href="/dueño/vendedores" class="btn btn-secondary btn-block active" style="font-size:20px"> VENDEDORES </a>
    </div>
</div>
<div class="row mb-3">
    <div class="col text-center" >
        <a href="/dueño/domiciliarios" class="btn btn-secondary btn-block active" style="font-size:20px"> DOMICILIARIOS </a>
    </div>
    <div class="col text-center" >  
        <a href="/dueño/ventas" class="btn btn-secondary btn-block active" style="font-size:20px"> VENTAS </a>
    </div>
    <div class="col text-center" > 
        <a href="/dueño/clientes" class="btn btn-secondary btn-block active" style="font-size:20px"> CLIENTES </a>
    </div>
</div>
<div class="row">
    <div class="col-xs-4 col-sm-12 col-md-12 col-lg-12">
        <div class="col alert alert-primary text-center mb-4">
            <img src="images/form.png"  style=" height:300px;" >
        </div>
    </div>
</div>

@endsection