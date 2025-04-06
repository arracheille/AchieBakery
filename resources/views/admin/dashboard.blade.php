@include('layouts.admin.index')

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
            <th>ID</th>
            <th>ID Produk</th>
            <th>Gambar Produk</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Deskripsi Produk</th>
            <th>Ukuran Produk</th>
            <th>Aksi</th>
        </thead>
        <tr>
            <td>01</td>
            <td>01PID</td>
            <td>
                <div class="product-img">
                    <img src="../assets/img/Katalog/brownies hero.jpg" alt="" />
                </div>
            </td>
            <td>Brownies Sekat</td>
            <td>Rp. 60.000</td>
            <td>
                Fudged brownies dengan rasa manis dan sedikit pahit, autentik dari
                Achie Bakery.
            </td>
            <td>Ukuran 30 cm dengan 25 potongan, 5-8 orang.</td>
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
    </table>
</main>