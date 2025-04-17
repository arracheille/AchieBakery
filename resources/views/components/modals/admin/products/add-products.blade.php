<div id="addProductModal" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Tambahkan Produk</h2>
            <span class="close" onclick="closeAddProduct()">&times;</span>
        </div>

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf

            <input type="hidden" name="category_id" value="{{ $category->id_category }}">

            <label for="product_img">Gambar Produk :</label>

            <div class="input-container">
                <input
                    type="file"
                    id="product_img"
                    name="product_img"
                    autocomplete="off"
                    required
                />
            </div>

            <label for="product_name">Nama Produk :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    autocomplete="off"
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
                    required
                />
            </div>

            <label for="product_description">Deskripsi Produk :</label>

            <div class="input-container">
                <textarea name="product_description" id="product_description" rows="4" required></textarea>
            </div>

            <label for="product_size">Ukuran Produk :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="product_size"
                    name="product_size"
                    autocomplete="off"
                    required
                />
            </div>

            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeAddProduct()">
                    Cancel
                </button>
                
                <button class="btn" id="modal-submit-btn">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>