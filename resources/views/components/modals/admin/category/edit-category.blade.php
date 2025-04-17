<div id="editCategoryModal-{{ $category->id_category }}" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Edit Kategori <span>{{ $category->category_name }}</span></h2>
            <span class="close" onclick="closeEditCategory('{{ $category->id_category }}')">&times;</span>
        </div>

        <form action="{{ route('category.edit', ['category' => $category->id_category]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" id="editCategoryId-{{ $category->id_category }}" name="id_category">

            <label for="category_img">Gambar Kategori :</label>

            <img src="{{ asset($category->category_img) }}" alt="edit-category-{{ $category->category_img }}">

            <p>Ubah Gambar</p>
            <div class="input-container">
                <input
                    type="file"
                    id="category_img"
                    name="category_img"
                    autocomplete="off"
                />
            </div>

            <label for="category_name">Nama Kategori :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="category_name"
                    name="category_name"
                    autocomplete="off"
                    value="{{ $category->category_name }}"
                    required
                />
            </div>

            <label for="category_description">Deskripsi Kategori :</label>

            <div class="input-container">
                <textarea name="category_description" id="category_description" rows="4" required>{{ $category->category_description }}</textarea>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeEditCategory('{{ $category->id_category }}')">
                    Cancel
                </button>
                
                <button type="submit" class="btn" id="modal-submit-btn">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>