@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-success text-center">Editar Administrador "{{$product->id}}" </h1>
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
        <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="description">Closet_Description</label>
                <input type="string" class="form-control" id="description" name="description" placeholder="Closet_Description"
                value="{{old('closet_description', $product->closet_description)}}">
            </div>
            <div class="form-group">
                <label for="width">Closet_Width</label>
                <input type="string" class="form-control" id="width" name="width" placeholder="Closet_Width" 
                value="{{old('closet_width', $product->closet_width)}}">
            </div>
            <div class="form-group">
                <label for="height">Closet_Height</label>
                <input type="string" class="form-control" id="height" name="height" placeholder="Closet_Height"
                value="{{old('closet_height', $product->closet_height)}}">
            </div>
            <div class="form-group">
                <label for="material">Closet_Material</label>
                <input type="string" class="form-control" id="material" name="material" placeholder="Closet_Material" 
                value="{{old('closet_material', $product->closet_material)}}">
            </div>
            <div class="form-group">
                <label for="imagen">Image:</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen"/>
            </div>
                <div class="col text-center">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection