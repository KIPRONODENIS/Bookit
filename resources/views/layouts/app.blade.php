<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/font-awesome/css/font-awesome.css')}}">
</head>
<body style="overflow-x:hidden">
    <div id="app">
      <nav class="navbar navbar-expand-lg  text-white" style="background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);">
        <a class="navbar-brand" href="#">Bookit.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>

            </li>
              <li class="nav-item">
            <a class="block   lg:inline-block lg:mt-0 text-blue-500 text-xl hover:text-white " style="color:#ff0066 !important">
  <div class="absolute" style="z-index: 4; margin-top: -20px !important">
@livewire('search')
</div>
</a>

            </li>


          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto ">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="" aria-labelledby="navbarDropdown">
                          <a class="" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
        </div>
      </nav>







        <main class="">
            @yield('body')
        </main>
    </div>

    <div class="footer border-t py-2">
<div class="col-8 mx-auto font-black text-center" >&copy; copyright 2020. Made by Steve Kiplang'at finalYear Project</div>
     </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    @include('sweetalert::alert')
    @livewireAssets

</body>
</html>
