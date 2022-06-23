<header>
    <div class="container box-head">

      <div class="logo">
        <a href="{{ route('home')}}"><img src={{ asset('img/dc-logo.png')}} alt="logo"></a>
      </div>

      <div class="right-head">
        <nav>
          <ul>
            <li><a class="Route::currentRouteName() === 'characters' ? 'active' : '' " href="{{ route('characters')}}">Characters</a></li>
            <li><a class="Route::currentRouteName() === 'comics' ? 'active' : '' " href="{{ route('comic')}}">Comics</a></li>
            <li><a class="Route::currentRouteName() === 'movie' ? 'active' : '' " href="{{ route('movie')}}">Movies</a></li>
            <li><a class="Route::currentRouteName() === 'tv' ? 'active' : '' " href="{{ route('tv')}}">Tv</a></li>
            <li><a class="Route::currentRouteName() === 'game' ? 'active' : '' " href="{{ route('game')}}">Games</a></li>
            <li><a class="Route::currentRouteName() === 'collectiobles' ? 'active' : '' " href="{{ route('collectiobles')}}">Collectiobles</a></li>
            <li><a class="Route::currentRouteName() === 'videos' ? 'active' : '' " href="{{ route('videos')}}">Videos</a></li>
            <li><a class="Route::currentRouteName() === 'fans' ? 'active' : '' " href="{{ route('fans')}}">Fans</a></li>
            <li><a class="Route::currentRouteName() === 'news' ? 'active' : '' " href="{{ route('news')}}">News</a></li>
            <li><a class="Route::currentRouteName() === 'shop' ? 'active' : '' " href="{{ route('shop')}}">Shop</a></li>
          </ul>
        </nav>
      </div>

    </div>
  </header>
