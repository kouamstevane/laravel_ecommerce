@extends('accueil')

@section('content')
@section('content')
<div class="album py-5 bg-light">

    <div class="container">

        <div class="row">
            @foreach ($laptops as $laptop)

            {{-- {{dd($laptops)}} --}}

            <div class="column">
              <div class="content">
                <a href="#" > <img src="{{ asset("img/laptop/". $laptop->photo_principale) }}" alt="Mountains" style="width:100%; height:250px"> </a>


                <h3>{{ $laptop->nom }}</h3>

                <div class="d-flex justify-content-between mt-4">
                    <span> {{ $laptop->prix_ht }} frs </span>
                    <div>
                        <form action=" {{ route('cart.store') }}" method="post" class="d-inline">
                            @csrf

                            <input type="hidden" name="id" value="{{$laptop->id}}">
                            <input type="hidden" name="nom" value=" {{$laptop->nom}} ">
                            <input type="hidden" name="prix" value=" {{$laptop->prix_ht}} ">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>

                        <a href=" {{route('voir_un_laptop', ['id' => $laptop->id])}} " class="btn btn-sm bg-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg>
                        </a>
                    </div>
                </div>

                </div>
            </div>

            @endforeach
            <div class="d-flex justify-content-end">
                {{-- {{ $produits->links() }} --}}
            </div>
@endsection
