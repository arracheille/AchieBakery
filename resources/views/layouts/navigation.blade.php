<header>
    <nav>
      <div class="top-space"></div>
      <div class="main-nav">
        <div class="nav-container">
          <a href="{{ route('welcome') }}" class="nav-logo">
            <img
              src="{{ asset('assets/img/Logo/Logo Achie Bakery.png') }}"
              alt="Navbar Logo"
            />
          </a>
          <ul class="nav-links">
            <li class="nav-link {{ Request::is('/*') ? 'active' : '' }}">
              <a href="{{ route('welcome') }}">Beranda</a>
            </li>
            <li class="nav-link {{ Request::is('category*') ? 'active' : '' }}">
              <a href="{{ route('user.category.index') }}">Kategori</a>
            </li>
            <li class="nav-link {{ Request::is('choose-your-moment*') ? 'active' : '' }}">
              <a href="{{ route('cym.index') }}">Pilih Momenmu</a>
            </li>
            <li class="nav-link {{ Request::is('about*') ? 'active' : '' }}">
              <a href="{{ route('about.index') }}">Tentang Achie Bakery</a>
            </li>
          </ul>
        </div>
        <ul class="nav-buttons">
          <li>
            <input type="checkbox" name="search-toggle" id="search-toggle">
            <label for="search-toggle" class="btn-icon" style="cursor: pointer;">
              <i class="fa-solid fa-magnifying-glass"></i>
            </label>
          </li>

          @if (Route::has('login'))
            @auth
              <li>
                <a href="{{ route('my-orders.index') }}" class="btn-icon"><i class="fa-solid fa-clipboard-list"></i></a>
              </li>

              <li>
                <a href="{{ route('cart.index') }}" class="btn-icon"><i class="fa-solid fa-cart-shopping"></i></a>
              </li>

              <li>
                <a href="{{ route('profile.edit') }}" class="btn-icon"><i class="fa-solid fa-user"></i></a>
              </li>

              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a :href="route('logout')" class="btn logout"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Keluar') }}
                </a>
              </form>
            @else
              <li>
                <a href="{{ route('login') }}" class="btn-icon"><i class="fa-solid fa-clipboard-list"></i></a>
              </li>

              <li>
                <a href="{{ route('login') }}" class="btn-icon"
                  ><i class="fa-solid fa-cart-shopping"></i
                ></a>
              </li>

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

      <div class="search-container">
        <form action="{{ route('search.index') }}" method="GET" class="search-form">
            <div class="input-container">
              <input type="text" name="search" id="search" placeholder="Cari produk..." class="search-input" value="{{ request('search') }}" autocomplete="off">
            </div>
            <button class="btn-icon">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
      </div>
    </nav>
</header>
