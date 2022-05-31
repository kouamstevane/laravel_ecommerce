<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/menu.css")}}">
    <title>Document</title>
</head>

<body>
    {{-- <header>
        <div class="menu">
            <div class="subnav">
              <button class="subnavbtn">Accueil</button>
            </div>
            <div class="subnav">
              <button class="subnavbtn">Categories <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
              </svg></i></button>
              <div class="subnav-content">
                <a href="#bring">SmarthPhones</a>
                <a href="#deliver">Televiseurs HD Full Option</a>
                <a href="#package">Ordinateurs et Accessoires</a>
                <a href="#express">Electromenagers</a>
                <a href="#express">Autres Appareils Multimedia</a>
              </div>
            </div>
            <div class="subnav">
              <button class="subnavbtn">A Propos</button>
            </div>
            <a href="#contact">Contact</a>
          </div>


    </header> --}}

    @include('layouts.menu')



    @yield('content')
</body>
</html>
