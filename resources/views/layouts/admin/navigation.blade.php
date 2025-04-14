<header>
    <nav>
        <div class="top-space"></div>
        <div class="main-nav">
            <div class="nav-container">
                <h4>Achie Bakery Admin</h4>
            </div>
            <ul class="nav-buttons">
                <li>
                    <a href="#" class="btn-icon"
                    ><i class="fa-solid fa-magnifying-glass"></i
                    ></a>
                </li>
                <li>
                    <a href="#" class="btn-icon"><i class="fa-solid fa-user"></i></a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
        
                        <a :href="route('logout')" class="btn logout"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Keluar') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
