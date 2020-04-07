
@extends('layouts/app')
@section('content')
      
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="mt-5"><h3 class="text-center">Tout nos produits</h3>
            </div>
            @can('ajout_product')
            <div class="text-center py-5">
                <a href="{{route('ajout_produit')}}"><button class="btn btn-success text-center">Ajouter</button></a>
            </div>
            @endcan
                <table class="table" >
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nom</th>
                     <th scope="col">Prix</th>
                     <th scope="col">Photo</th>
                     <th scope="col">User-id</th>
                     <th scope="col">Action</th>

                     
                   </tr>
                 </thead>
                 <tbody>
                     @foreach ($produits as $item)
                     
                         <tr>
                             <td>{{$item->id}}</td>
                             <td>{{$item->name}}</td>
                             <td>{{$item->prix}} crédits</td>
                             <td><img  class="w-25"src="{{$item->photo}}" alt=""></td>
                             {{-- <td>{{$item->user->name}}</td> --}}
                             <td>
                                @can('edit_product', $item)
                                <a href="{{route('edit_produit' ,$item->id)}}"><button class="btn btn-warning">Modifier</button></a> 
                                @endcan
                                
                                @can('delete_product')
                                    <a href="{{route('delete_produit' ,$item->id)}}"><button class="btn btn-danger">Supprimer</button></a> 
                                @endcan
                              
                              </td>
                             
                         </tr>
                        @endforeach
                   
                 </tbody>
               </table>



                
            </div>
        </div>
@endsection
