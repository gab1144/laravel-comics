<header>
    <div class="container">
        <div class="logo">
            <!-- percorso assoluto perché l'immagine è in public -->
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
          </div>

          <nav>
            <ul>
              <li><a class="{{ Route::currentRouteName() === 'caracters' ? 'active' : '' }}" href="{{ route('characters') }}">characters</a></li>
              <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">comics</a></li>
              <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">movies</a></li>
              <li><a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">tv</a></li>
              <li><a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{ route('games') }}">games</a></li>
              <li><a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">collectibles</a></li>
              <li><a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{ route('videos') }}">videos</a></li>
              <li><a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}">fans</a></li>
              <li><a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">news</a></li>
              <li><a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">shop</a></li>
            </ul>
          </nav>
    </div>
</header>
