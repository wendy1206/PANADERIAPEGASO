@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">ADMINISTRADOR</h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/dueño" class="btn btn-danger"> Atras </a>
    </div> 
    <div class="col text-right">
        <a href="/dueño/create" class="btn btn-success"> Nuevo Administrador </a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">IdUser</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>
@endsection