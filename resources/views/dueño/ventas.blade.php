@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">VENTAS</h1>
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
                        <th scope="col">IdVentas</th>
                        <th scope="col">Status</th>
                        <th scope="col">Fechas</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection