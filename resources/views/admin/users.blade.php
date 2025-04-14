@include('layouts.admin.index')
@include('components.datatable')

<main class="content">
    <div class="heading-buttons">
        <h3>Pesanan Pengguna</h3>
        <div class="buttons-container">
            <button class="btn" onclick="openAddModal()">Tambahkan Data</button>
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
    <table id="adminTable" class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Email Terverivikasi Pada</th>
                <th>Token Ingat</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id_user }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->usertype }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->email_verified_at }}</td>
                    <td>{{ $user->remember_token }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <span class="action">
                            <button onclick="openEditModal('{{ $user->id_user }}')" class="btn-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <a href="#" class="btn-icon">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data pesanan!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</main>

@include('components.datatable-script')