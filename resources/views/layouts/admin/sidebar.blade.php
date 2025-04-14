<aside class="sidebar">
    <a href="{{ route('welcome.admin') }}" class="sidebar-logo">
        <img src="{{ asset('assets/img/Logo/Logo Achie Bakery.png') }}" alt="Navbar Logo" />
        <h4>Achie Bakery</h4>
    </a>
    <hr />
    <ul>
        <li>
            <a href="{{ route('welcome.admin') }}" class="{{ Request::routeIs('welcome.admin') ? 'active' : '' }}">
                <i class="fa-solid fa-house"></i>
                <span class="text a-poppins">Dashboard</span>
            </a>
        </li>
        
        <li>
            <a href="{{ route('category.index') }}"
            ><i class="fa-solid fa-rectangle-list"></i>
            <span class="text a-poppins">Kategori & Produk</span></a
            >

            @foreach ($categories as $category)

                <a href="{{ route('product.index', ['category' => $category->id_category]) }}" class="child-link {{ Request::is('category/*') ? 'active' : '' }}">
                    <span class="text a-poppins">Kategori {{ $category->category_name }}</span>
                </a>

            @endforeach
        </li>
        
        <li>
            <a href="{{ route('admin-order.index') }}" class="{{ Request::routeIs('admin-order.index') ? 'active' : '' }}"
            ><i class="fa-solid fa-box-open"></i>
            <span class="text a-poppins">Pesanan</span></a
            >
        </li>
        
        <li>
            <a href="{{ route('calendar.index') }}" class="{{ Request::routeIs('calendar.index') ? 'active' : '' }}"
            ><i class="fa-solid fa-calendar-days"></i>
            <span class="text a-poppins">Kalender</span></a
            >
        </li>
        
        {{-- <li>
            <a href="#"
            ><i class="fa-solid fa-cart-plus"></i>
            <span class="text a-poppins">Buat Pesanan</span></a
            >
        </li> --}}
        
        <li>
            <a href="{{ route('admin-user.index') }}" class="{{ Request::routeIs('admin-user.index') ? 'active' : '' }}"
            ><i class="fa-solid fa-users"></i>
            <span class="text a-poppins">Pengguna</span></a
            >
        </li>
    </ul>
</aside>