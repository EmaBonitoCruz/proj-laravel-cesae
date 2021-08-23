<nav class="navbar navbar-expand-lg sticky-top">
    @auth
    <a class="navbar-brand" href="{{ url('/home') }}" style="text-transform: uppercase" >
        
        <img src="{{ URL::to('/assets/img/logo.png') }}" >
        mealpal
    </a>

    @else

    <a class="navbar-brand" href="{{ url('/') }}" style="text-transform: uppercase" >
        
        <img src="{{ URL::to('/assets/img/logo.png') }}" >
        mealpal
    </a>

    @endauth

    @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">recipes</a>
            <a href="{{ url('/profile') }}">profile</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">logout</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @else
            <a href="{{ route('login') }}">login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">register</a>
            @endif
        @endauth
    </div>
    @endif

  
    
  </nav>