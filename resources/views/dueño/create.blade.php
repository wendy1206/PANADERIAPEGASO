@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center"> Nuevo Administrador </h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/dueño/listar" class="btn btn-danger"> Atras </a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <form method="POST" action="{{url('/products')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
            @csrf
            <div class="form-group">
                <label for="description">Closet_Description</label>
                <input type="string" class="form-control" id="description" name="description" placeholder="Closet_Description" value="{{old('description')}}">
            </div>
            <div class="form-group">
                <label for="width">Closet_Width</label>
                <input type="string" class="form-control" id="width" name="width" placeholder="Closet_Width" value="{{old('width')}}">
            </div>
            <div class="form-group">
                <label for="height">Closet_Height</label>
                <input type="string" class="form-control" id="height" name="height" placeholder="Closet_Height" value="{{old('height')}}">
            </div>
            <div class="form-group">
                <label for="material">Closet_Material</label>
                <input type="string" class="form-control" id="material" name="material" placeholder="Closet_Material" value="{{old('material')}}">
            </div>
            <div class="form-group">
                <label for="imagen">Image:</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen"/>
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection