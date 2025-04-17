@include('layouts.admin.index')
@include('components.datatable')

<main class="content">
    <div class="heading-buttons">
        <h3>Kategori Produk</h3>
        <div class="buttons-container">
            <button class="btn" onclick="openAddCategory()">Tambahkan Kategori</button>
        </div>
    </div>
    <table id="adminTable" class="admin-table">
        <thead>
            <th>ID Kategori</th>
            <th>Gambar Kategori</th>
            <th>Nama Kategori</th>
            <th>Deskripsi Kategori</th>
            <th>Aksi</th>
        </thead>
        @forelse ($categories as $category)
            <tr>
                <td>{{ $category->id_category }}</td>
                <td>
                    <div class="product-img">
                        <img src="{{ asset($category->category_img) }}" alt="{{ $category->category_img }}" />
                    </div>
                </td>
                <td>{{ $category->category_name }}</td>
                <td>{{ $category->category_description }}</td>
                <td>
                    <span class="action">
                        <button onclick="openEditCategory('{{ $category->id_category }}')" class="btn-icon" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <form action="{{ route('category.delete', ['category' => $category->id_category]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-icon">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </span>
                </td>
            </tr>
            @include('components.modals.admin.category.edit-category')
        @empty
            <p>Belum ada data kategori!</p>
        @endforelse
    </table>
</main>

@include('components.modals.admin.category.add-category')

@include('components.datatable-script')
<script>
    function openAddCategory() {
        document.getElementById('addCategoryModal').style.display = 'block';
    }

    function closeAddCategory() {
        document.getElementById('addCategoryModal').style.display = 'none';
    }

    function openEditCategory(id) {
        document.getElementById('editCategoryModal-' + id).style.display = 'block';
        document.getElementById('editCategoryId-' + id).value = id;
    }

    function closeEditCategory(id) {
        document.getElementById('editCategoryModal-' + id).style.display = 'none';
    }
</script>