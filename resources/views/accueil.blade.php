<!doctype html>
<html lang="en">
  @include('layouts.head')

  <body>
        @include('layouts.menu')

        <main>
            <section class="py-5 text-center">
                <div class="container">
                    <h1 class="fs-2 fw-light">Commandez  votre <br><span class="badge text-bg-light">nouveau</span> <br>Appareil <span class="badge bg-primary ">préféré </span>!</h1>
                    <p class="fst-italic opacity-50 fs-4">Tous ce que vous Desirez...Vous le trouverez ici.</p>

                </div>
            </section>

            @yield('content')

        </main>

        @include('layouts.footer')


        <script src=" {{asset("js/bootstrap.bundle.min.js")}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}




    </body>
</html>
