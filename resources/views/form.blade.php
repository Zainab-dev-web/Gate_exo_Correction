@extends('layouts/app')
@section('content')

<form action='{{route('save_produit')}}' method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input name="name" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Image</label>
      <input name='photo' type="file" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Prix</label>
        <input name='prix' type="text" class="form-control">
      </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
@endsection