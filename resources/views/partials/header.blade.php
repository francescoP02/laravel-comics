<header>
    <section class="header-top">
        <div class="container">
            <span>DC POWER™ VISA®</span>
            <span>ADDITIONAL DC SITES</span>
        </div>
    </section>
    <section class="header container">
        <div class="header__logo">

            <a href="/"><img src="{{ asset('img/dc-logo.png') }}" alt="" /></a>
        </div>
        <nav>
          <ul class="header__menu">
            <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
            <li><a href="{{ route('comics') }}">COMICS</a></li>
            <li><a href="{{ route('movies') }}">MOVIES</a></li>
            <li><a href="{{ route('tv') }}">TV</a></li>
            <li><a href="{{ route('games') }}">GAMES</a></li>
            <li><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
            <li><a href="{{ route('videos') }}">VIDEOS</a></li>
            <li><a href="{{ route('fans') }}">FANS</a></li>
            <li><a href="{{ route('news') }}">NEWS</a></li>
            <li><a href="{{ route('shop') }}">SHOP</a></li>
            <li class="search"><input type="text" name="search" id="search" placeholder="Search"></li>
          </ul>
        </nav>
      </section>
</header>