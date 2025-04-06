<div id="addcalendarModal" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Buat Pesanan</h2>
            <span class="close" onclick="closeAddcalendar()">&times;</span>
        </div>
        <form action="/calendar-create" method="POST">
            @csrf

            <div class="product-add-container">
                <div class="search-container">
                    <div class="input-container">
                        <input type="text" placeholder="Cari Produk...">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="dropdown">
                        <table class="admin-table">
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product['id_product'] }}</td>
                                    <td>
                                        <div class="product-img">
                                            <img src="{{ asset($product->product_img) }}" alt="{{ $product->product_img }}" />
                                        </div>
                                    </td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>
                                        <span class="action">
                                            <div class="item-quantity">
                                                <button><i class="fa-solid fa-plus"></i></button>
                                                <div class="input-container">
                                                    <input type="number" name="product_quantity" id="product_quantity" value="0">
                                                </div>
                                                <button><i class="fa-solid fa-minus"></i></button>
                                            </div>                                  
                                        </span>
                                    </td>
                                    <td>
                                        <button class="btn">Tambah</button>
                                    </td>
                                </tr>
                            @empty
                                <p>Belum ada data produk!</p>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>

            <label for="order_products">Produk yang Dipesan:</label>
            <table class="admin-table" id="table-order">
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product['id_product'] }}</td>
                        <td>
                            <div class="product-img">
                                <img src="{{ asset($product->product_img) }}" alt="{{ $product->product_img }}" />
                            </div>
                        </td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>
                            <span class="action">
                                <div class="item-quantity">
                                    <button><i class="fa-solid fa-plus"></i></button>
                                    <div class="input-container">
                                        <input type="number" name="product_quantity" id="product_quantity" value="0">
                                    </div>
                                    <button><i class="fa-solid fa-minus"></i></button>
                                </div>                                  
                            </span>
                        </td>
                        <td>
                            <button class="btn">Ubah</button>
                        </td>
                    </tr>
                @empty
                    <p>Belum ada produk ditambahkan!</p>
                @endforelse
            </table>

            <label for="customer_name">Nama Customer :</label>
            <div class="input-container">

                <input type="text" name="customer_name" id="customer_name" placeholder="Aqilla Rachel">

            </div>

            <label for="delivery_date">Tanggal Pengiriman :</label>
            <div class="input-container">

                <input type="datetime-local" id="delivery_date" name="delivery_date" required>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeAddcalendar()">
                    Cancel
                </button>
                
                <button type="submit" class="btn" id="modal-submit-btn">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>