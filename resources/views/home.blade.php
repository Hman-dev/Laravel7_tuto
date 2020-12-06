@extends('layouts.app')

@section('title,Acceuil')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <!-- @dump($annonces) permet d'affifcher la bdd $annonces !-->

        <!-- Pour récupérer mon tableau dans la base de données-->
        <!-- permet a blade d'interpreter le langae html -->
        @foreach($annonces as $annonce)
           <div class="col-3">
               <article class="card">
                   <header class="card-header">
                       <h1>{{$annonce->title}}</h1>
                   </header>
                   <div class="card-body">
                       <div>
                           {!!$annonce->content!!}
                       </div>
                   </div>
                   <footer class="card-footer">
                       {{$annonce->created_at->format('d/m/y à H:i:s')}}
                   </footer>
               </article>
           </div> 

        @endforeach
    </div> 
</div>
@endsection
