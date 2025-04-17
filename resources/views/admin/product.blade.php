@include('layouts.admin.index')
@include('components.datatable')

<main class="content">
    <div class="heading-buttons">
        <h3>Kategori {{ $category->category_name }}</h3>
        <div class="buttons-container">
            <button class="btn" onclick="openAddProduct()">Tambahkan Produk</button>
        </div>
    </div>
    <table id="adminTable" class="admin-table">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Gambar Produk</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Deskripsi Produk</th>
                <th>Ukuran Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
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
                            <button onclick="openEditProduct('{{ $product->id_product }}')" class="btn-icon" >
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <form action="{{ route('product.delete', ['product' => $product->id_product]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-icon">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </span>
                    </td>
                </tr>
                @include('components.modals.admin.products.edit-product')
            @empty
                <tr>
                    <td colspan="7">Belum ada data produk dari kategori ini!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</main>

@include('components.modals.admin.products.add-products')

@include('components.datatable-script')
<script>
    function openAddProduct() {
        document.getElementById('addProductModal').style.display = 'block';
    }

    function closeAddProduct() {
        document.getElementById('addProductModal').style.display = 'none';
    }

    function openEditProduct(id) {
        document.getElementById('editProductModal-' + id).style.display = 'block';
        document.getElementById('editProductId-' + id).value = id;
    }

    function closeEditProduct(id) {
        document.getElementById('editProductModal-' + id).style.display = 'none';
    }
</script>