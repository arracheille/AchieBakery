@include('layouts.admin.admin')

<main class="content">
    <div class="heading-buttons">
        <h3>Kategori {{ $category->category_name }}</h3>
        <div class="buttons-container">
            <button class="btn" onclick="openAddProduct()">Tambahkan Data</button>
            <div class="input-container">
                <input
                    type="text"
                    id="search"
                    placeholder="Cari Data..."
                    autocomplete="off"
                />
            </div>
        </div>
    </div>
    <table class="admin-table">
        <thead>
            <th>ID Produk</th>
            <th>Gambar Produk</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Deskripsi Produk</th>
            <th>Ukuran Produk</th>
            <th>Aksi</th>
        </thead>
        @forelse ($category->products as $product)
            <tr>
                <td>{{ $product['id_product'] }}</td>
                <td>
                    <div class="product-img">
                        <img src="{{ asset($product->product_img) }}" alt="{{ $product->product_img }}" />
                    </div>
                </td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->product_description }}</td>
                <td>{{ $product->product_size }}</td>
                <td>
                    <span class="action">
                        <a href="#" class="btn-icon" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="#" class="btn-icon" >
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </span>
                </td>
            </tr>
        @empty
            <p>Belum ada data produk dari kategori ini!</p>
        @endforelse
    </table>
</main>

@include('components.modals.admin.products.add-products')

<script>
    function openAddProduct() {
        document.getElementById('addProductModal').style.display = 'block';
    }

    function closeAddProduct() {
        document.getElementById('addProductModal').style.display = 'none';
    }
</script>