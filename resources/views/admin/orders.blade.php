@include('layouts.admin.index')

<main class="content">
    <div class="heading-buttons">
        <h3>Kategori Produk</h3>
        <div class="buttons-container">
            <button class="btn" onclick="openAddCategory()">Tambahkan Data</button>
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
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
            <th>Deskripsi Kategori</th>
            <th>Aksi</th>
        </thead>
        @forelse ($categories as $category)
            <tr>
                <td>{{ $category->id_category }}</td>
                <td>{{ $category->category_name }}</td>
                <td>{{ $category->category_description }}</td>
                <td>
                    <span class="action">
                        <button onclick="openEditCategory('F')" class="btn-icon" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <a href="#" class="btn-icon" >
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </span>
                </td>
            </tr>
        @empty
            <p>Belum ada data kategori!</p>
        @endforelse
    </table>
</main>

@foreach ($categories as $category)
    @include('components.modals.admin.category.edit-category')
@endforeach

@include('components.modals.admin.category.add-category')

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