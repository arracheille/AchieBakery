@include('layouts.admin.admin')

<main class="content">
    <div class="heading-buttons">
        <h3>Kategori Brownies</h3>
        <div class="buttons-container">
            <button class="btn" id="add-card">Tambahkan Data</button>
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
            <p>Belum ada data kategori!</p>
        @endforelse
    </table>
</main>

@include('components.modals.admin.category.add-category')