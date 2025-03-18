<div id="addCategoryModal" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Tambahkan Kategori Produk</h2>
            <span class="close" onclick="closeAddCategory()">&times;</span>
        </div>

        <form action="{{ route('category.store') }}" method="POST">
            @csrf

            <label for="category_name">Nama Kategori :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="category_name"
                    name="category_name"
                    autocomplete="off"
                    required
                />
            </div>

            <label for="category_description">Deskripsi Kategori :</label>

            <div class="input-container">
                <textarea name="category_description" id="category_description" rows="4" required></textarea>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeAddCategory()">
                    Cancel
                </button>
                
                <button type="submit" class="btn" id="modal-submit-btn">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>