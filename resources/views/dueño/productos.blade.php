@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">PRODUCTOS</h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/dueño" class="btn btn-danger"> Atras </a>
    </div> 
</div>
<br>
<div class="row">
    <div class="col">
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">IdProducto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection