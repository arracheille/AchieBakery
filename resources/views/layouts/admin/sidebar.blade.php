<aside class="sidebar">
    <div class="sidebar-logo">
        <img src="../assets/img/Logo/Logo Achie Bakery.png" alt="Navbar Logo" />
        <h4>Achie Bakery</h4>
    </div>
    <hr />
    <ul>
        <li>
            <a href="#"
            ><i class="fa-solid fa-house"></i>
            <span class="text a-poppins">Dashboard</span></a
            >
        </li>
        
        <li>
            <a href="{{ route('category.index') }}"
            ><i class="fa-solid fa-rectangle-list"></i>
            <span class="text a-poppins">Kategori & Produk</span></a
            >

            @foreach ($categories as $category)

                <a href="{{ route('product.index', ['category' => $category->id_category]) }}" class="child-link">
                    <span class="text a-poppins">Kategori {{ $category->category_name }}</span>
                </a>

            @endforeach
        </li>
        
        <li>
            <a href="#"
            ><i class="fa-solid fa-box-open"></i>
            <span class="text a-poppins">Pesanan</span></a
            >
        </li>
        
        <li>
            <a href="{{ route('calendar.index') }}"
            ><i class="fa-solid fa-calendar-days"></i>
            <span class="text a-poppins">Kalender</span></a
            >
        </li>
        
        <li>
            <a href="#"
            ><i class="fa-solid fa-cart-plus"></i>
            <span class="text a-poppins">Buat Pesanan</span></a
            >
        </li>
        
        <li>
            <a href="#"
            ><i class="fa-solid fa-users"></i>
            <span class="text a-poppins">Pengguna</span></a
            >
        </li>
    </ul>
</aside>