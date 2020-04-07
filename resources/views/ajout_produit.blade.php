@extends('layouts/app')
@section('content')

<h2 class="text-center">Ajout un produit</h2>
<form action="{{route('save_produit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row text-center">
  


   <div class="form-group col-md-6 mx-auto py-4">
    <label for="">Nom</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@if($errors->first('name')) 
    @else{{old('name')}}@endif"/>
    <div class="validation"></div>
</div>
  @error('name')  
  <div class="text-danger">{{ $message }}</div>  
  @enderror
  <div class="form-group col-md-6 mx-auto py-4">
    <label for="">Prix</label>
    <input type="number" class="form-control @error('prix') is-invalid @enderror" name="prix" value="@if($errors->first('prix')) 
    @else{{old('prix')}}@endif"/>
    <div class="validation"></div>
</div>
  @error('prix')  
  <div class="text-danger">{{ $message }}</div>  
  @enderror

<div class="form-group col-md-6 mx-auto py-4">
    <label for="">Photo</label>
    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="@if($errors->first('photo')) 
    @else{{old('photo')}}@endif"/>
    <div class="validation"></div>
</div>

  @error('photo')  
  <div class="text-danger">{{ $message }}</div>  
  @enderror
  
    </div>
        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
@endsection
