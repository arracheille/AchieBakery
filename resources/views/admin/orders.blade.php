@include('layouts.admin.index')
@include('components.datatable')

<main class="content">
    <div class="heading-buttons">
        <h3>Pesanan Pengguna</h3>
    </div>
    <table id="adminTable" class="admin-table">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>ID User</th>
                <th>ID Alamat</th>
                <th>Tanggal Pengiriman</th>
                <th>Metode Pembayaran</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->id_order }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->address_id }}</td>
                    <td>{{ $order->delivery_date }}</td>
                    <td>{{ $order->method }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <span class="action">
                            <button onclick="openEditModal('{{ $order->id_order }}')" class="btn-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <a href="#" class="btn-icon">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </span>
                    </td>
                </tr>
                @include('components.modals.admin.order.edit-order')
            @empty
                <tr>
                    <td colspan="7">Belum ada data pesanan!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</main>

@include('components.datatable-script')

<script>
    function openEditModal(id) {
        document.getElementById('editOrderModal-' + id).style.display = 'block';
        document.getElementById('editOrderId-' + id).value = id;
    }

    function closeEditModal(id) {
        document.getElementById('editOrderModal-' + id).style.display = 'none';
    }
</script>