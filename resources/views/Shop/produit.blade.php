@extends('shop')

@section('content')
{{-- {{dd($un_produit)}} --}}
<div class="container">


    <div class="row justify-content-between">

        <div  style="width: 40%">
            <div class="card  box-shadow"  >
                <img class="card-img-top" src="{{asset('img/img_cath/'.$un_produit->photo_principale)}}" style="width:100%; height:100%" alt="Card image cap">

            </div>
        </div>
        <div class="col-6">

            <h1 class="jumbotron-heading">{{$un_produit->nom}}</h1>
            <h5>87 000frs</h5>
            <p class="lead text-muted">Cinoque aime choco! consectetur adipisicing elit. Dignissimos dolore eaque earum eos ex, exercitationem facilis magni maiores maxime natus neque odit quo quod recusandae tempora unde ut veritatis vero!</p>
            <hr>
            <label for="size">Choisissez votre marque</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>marque Anglaise</option>
                <option value="1">marque francaise</option>
                <option value="2">marque europeenne</option>
                <option value="3">marque camerounaise</option>
              </select>

            <p class="d-grid mt-3">
                <button class="btn btn-warning" data-bs-toggle="button" type="button">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                      </svg>  Ajouter au panier
                </button>
            </p>

        </div>
    </div>


<div class="album py-5 bg-light">


        <div class="container">
            <h3>Vous aimerez aussi:</h3>

            <div class="row">
              <div class="col">

                <div class="content">
                    <a href="#" > <img src="{{ asset("img/img_cath/electromenager.png") }}" alt="Mountains" style="width:100%; height:250px"> </a>


                    <h3>Electromenager</h3>

                    <div class="d-flex justify-content-between mt-4">
                        <span> 25 000 frs </span>
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
              {{-- 2 --}}
              <div class="col">
                <div class="content">
                    <a href="#" > <img src="{{ asset("img/img_cath/tele.png") }}" alt="Mountains" style="width:100%; height:250px"> </a>


                    <h3>Electromenager</h3>

                    <div class="d-flex justify-content-between mt-4">
                        <span> 25 000 frs </span>
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
              {{-- 3 --}}
              <div class="col">

                <div class="content">
                    <a href="#" > <img src="{{ asset("img/img_cath/phone.png") }}" alt="Mountains" style="width:100%; height:250px"> </a>


                    <h3>Electromenager</h3>

                    <div class="d-flex justify-content-between mt-4">
                        <span> 25 000 frs </span>
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
            </div>
          </div>

          </div>
    </div>

</div>

@endsection
