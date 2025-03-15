<header>
    <nav>
      <div class="top-space"></div>
      <div class="main-nav">
        <div class="nav-container">
          <a href="{{ route('welcome') }}" class="nav-logo">
            <img
              src="assets/img/Logo/Logo Achie Bakery.png"
              alt="Navbar Logo"
            />
          </a>
          <ul class="nav-links">
            <li class="nav-link"><a href="{{ route('welcome') }}">Beranda</a></li>
            <li class="nav-link"><a href="#">Menu</a></li>
            <li class="nav-link"><a href="#">Pilih Momenmu</a></li>
            <li class="nav-link"><a href="#">Tentang Achie Bakery</a></li>
          </ul>
        </div>
        <ul class="nav-buttons">
          <li>
            <a href="#" class="btn-icon"
              ><i class="fa-solid fa-magnifying-glass"></i
            ></a>
          </li>
          <li>
            <a href="#" class="btn-icon"
              ><i class="fa-solid fa-cart-shopping"></i
            ></a>
          </li>
          @if (Route::has('login'))
            @auth
              <li>
                <a href="{{ route('profile.edit') }}" class="btn-icon"><i class="fa-solid fa-user"></i></a>
              </li>

              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a :href="route('logout')" class="btn"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Keluar') }}
                </a>
            </form>
            @else
              <li>
                <a href="{{ route('login') }}" class="btn-icon"><i class="fa-solid fa-user"></i></a>
              </li>

              <li><a href="{{ route('login') }}" class="btn">Masuk</a></li>

              @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="btn">Daftar</a></li>        
              @endif
            @endauth
          @endif
        </ul>
      </div>
    </nav>
</header>
