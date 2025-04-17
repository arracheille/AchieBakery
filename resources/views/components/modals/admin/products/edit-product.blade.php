<div id="editProductModal-{{ $product->id_product }}" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Edit Produk <span>{{ $product->id_product }}</span></h2>
            <span class="close" onclick="closeEditProduct('{{ $product->id_product }}')">&times;</span>
        </div>

        <form action="{{ route('product.edit', ['product' => $product->id_product]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" id="editProductId-{{ $product->id_product }}" name="id_product">

            <label for="product_img">Gambar Kategori :</label>

            <img src="{{ asset($product->product_img) }}" alt="edit-product-{{ $product->product_img }}">

            <label for="product_img">Ubah Gambar</label>

            <div class="input-container">
                <input
                    type="file"
                    id="product_img"
                    name="product_img"
                    autocomplete="off"
                />
            </div>

            <label for="product_name">Nama Kategori :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    autocomplete="off"
                    value="{{ $product->product_name }}"
                    required
                />
            </div>

            <label for="product_price">Harga Produk :</label>

            <div class="input-container">
                <input
                    type="number"
                    id="product_price"
                    name="product_price"
                    autocomplete="off"
                    value="{{ $product->product_price }}"
                    required
                />
            </div>

            <label for="product_description">Deskripsi Kategori :</label>

            <div class="input-container">
                <textarea name="product_description" id="product_description" rows="4" required>{{ $product->product_description }}</textarea>
            </div>

            <label for="product_size">Ukuran Produk :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="product_size"
                    name="product_size"
                    autocomplete="off"
                    value="{{ $product->product_size }}"
                    required
                />
            </div>

            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeEditProduct('{{ $product->id_product }}')">
                    Cancel
                </button>
                
                <button type="submit" class="btn" id="modal-submit-btn">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>