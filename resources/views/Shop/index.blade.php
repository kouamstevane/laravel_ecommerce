@extends('accueil')

@section('content')
<div class="album py-5 bg-light">

    <div class="container">


        <div class="row">
            @foreach ($produits as $produit)

            <div class="column">
              <div class="content">
                <a href="#" > <img src="{{ asset("img/img_cath/".$produit->photo_principale) }}" alt="Mountains" style="width:100%; height:250px"> </a>


                <h3>{{ $produit->nom }}</h3>

                <div class="d-flex justify-content-between mt-4">
                    <span> {{ $produit->prix_ht }} frs </span>
                    <div>
                        <a href="#" class="btn btn-primary">Ajouter</a>

                        <a href="#" class="btn btn-sm bg-warning">
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

        {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
                @foreach ($produits as $produit)
            <div class="card shadow-sm">
              <img src="{{asset("img/img_cath/tele.png")}}" alt="images des produits">

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
        </div>
        @endforeach --}}

            {{-- <div class="column">
              <div class="content">
              <img src="{{asset("img/img_cath/ecouteur.png")}}" alt="Lights" style="width:100%">
                <h3>My Work</h3>
                <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus</p>
              </div>
            </div>
            <div class="column">
              <div class="content">
              <img src="{{asset("img/img_cath/electromenager.png")}}" alt="Nature" style="width:100%">
                <h3>My Work</h3>
                <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus</p>
              </div>
            </div>
            <div class="column">
              <div class="content">
              <img src="{{asset("img/img_cath/laptop.png")}}" alt="Mountains" style="width:100%">
                <h3>My Work</h3>
                <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibuss</p>
              </div>
            </div> --}}



      </div>

    </div>
  </div>
@endsection
