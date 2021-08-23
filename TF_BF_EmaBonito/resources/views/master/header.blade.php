<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="{{ url('/') }}" style="text-transform: uppercase" >
        <img src="{{ URL::to('/assets/img/logo.png') }}" >
        mealpal
    </a>

    @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">register</a>
            @endif
        @endauth
    </div>
    @endif

  
    
  </nav>