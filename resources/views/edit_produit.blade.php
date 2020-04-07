@extends('layouts/app')
@section('content')
<h2 class="text-center">Modifier un produit</h2>
<form action="{{route('update_produit' , $produits->id)}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-row mx-auto">
          
        <div class="form-group col-md-6">
            <label for="">Modifier le nom du produit</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name',$produits->name)}}" placeholder="Entrer un nom" />
            <div class="validation"></div>
        </div>
          @error('name')  
          <div class="text-danger">{{ $message }}</div>  
          @enderror
          <div class="form-group col-md-6">
            <label for="">Modifier le prix</label>
            <input type="number" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{old('prix',$produits->prix)}}" placeholder="Entrer un prix" />
            <div class="validation"></div>
        </div>
          @error('prix')  
          <div class="text-danger">{{ $message }}</div>  
          @enderror
          <div class="form-group col-md-6">
            <label for="">Modifier la photo du produit</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{old('photo',$produits->photo)}}" placeholder="Entrer une photo" />
            <div class="validation"></div>
        </div>
          @error('photo')  
          <div class="text-danger">{{ $message }}</div>  
          @enderror

        
    </div>
        
        <div class="text-center">
            <button class="btn btn-info"type="submit">Modifier</button>
        </div>
  </form>
  @endsection


  
  