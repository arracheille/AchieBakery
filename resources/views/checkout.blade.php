<x-app-layout>
    <head>
        <style>
            section {
              min-height: 10vh;
            }
            .cart-product-container {
                gap: 20px;
            }
            .cart-total-content {
                gap: 15px;
            }
            .cart-total-content hr{
                border: none;
                border-top: 2px solid var(--dark-pink);
            }
            .quantity-per-product{
                margin-left: auto;
            }
            #map { 
                height: 30vh;
                z-index: 1;
            }
            .cdc,
            .input-inline{
                display: flex;
                align-items: center;
            }
            .cdc{
                justify-content: space-between;
            }
            span.cdc p{
                color: var(--dark-pink);
                font-size: 15px;
            }
            span.cdc p:last-child{
                text-align: end;
                font-weight: 700;
            }
            .input-inline{
                gap: 20px;
            }
            .input-inline .input-container{
                width: 100%;
                background-color: var(--pink);
            }
            .date-order.input-container{
                background-color: var(--pink);
            }
            .input-inline .input-container input,
            .date-order.input-container input{
                background-color: var(--pink);
            }
            hr{
                border: none;
                border-top: 2px solid var(--dark-brown);
            }
        </style>

        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    </head>
    <section class="cart">
        <div class="section-container cart">
            <h2>Checkout</h2>
            <div class="cart-divider">
                <div class="cart-container">
                    <div id="map"></div>
                    <div class="cdc">
                        <p id="display-address"></p>
                        <a href="#" class="btn">Ubah Lokasi</a>
                    </div>

                    <hr>

                    <div class="checkout-items">
                        <div class="cart-product-container">
                            @foreach ($carts as $cart)
                            <div class="cart-product-container">
                                <div class="cart-product-content">
                                    <div class="product-img">
                                        <img src="{{ asset($cart->product->product_img) }}" alt="{{ $cart->product->product_name }}" />
                                    </div>
                                    <div class="product-info">
                                        <h3>{{ $cart->product->product_name }}</h3>
                                        <p>Rp. {{ number_format($cart->product->product_price, 0, ',', '.') }}</p>
                                    </div>
                                    <p class="quantity-per-product">{{ $cart->quantity }}x</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="input-inline">
                        <label for="catatan">Catatan:</label>

                        <div class="input-container">

                            <input type="text" name="catatan" id="catatan" placeholder="Ketikkan catatan seperti, toppingnya all chocochips ya!">

                        </div>
                    </div>
                    
                    <hr>

                    <h4>Metode Pembayaran</h4>

                    <div class="payment-method">
                        <div class="variants-container">
                            <input type="radio" id="option1" name="options" value="1" checked/>
                            <label for="option1" class="option-variants">COD</label>
            
                            <input type="radio" id="option2" name="options" value="2" />
                            <label for="option2" class="option-variants">Qris</label>

                            <input type="radio" id="option3" name="options" value="3" />
                            <label for="option3" class="option-variants">Gopay</label>
                        </div>
                    </div>

                    <h4>Tanggal Pengiriman (minimal h-3)</h4>

                    <div class="date-order input-container">
                        <input type="date" name="delivery_date" id="delivery_date">
                    </div>
                </div>
              <div class="cart-total-container">
                <div class="cart-total-content">
                    <h3>Detail Pesanan</h3>
                    <hr>

                    <span class="cdc"><p>Nama Penerima</p><p>{{ Auth::user()->name }}</p></span>
                    <span class="cdc"><p>Nomor Telepon</p><p>{{ Auth::user()->phone_number }}</p></span>
                    <span class="cdc"><p>Tujuan Pengiriman</p><p id="detail-order-location"></p></span>
                    <span class="cdc"><p>Tanggal Pengiriman</p><p id="detail-order-date"></p></span>

                    <hr />

                    <h4>Total Pesanan</h4>
                    <hr>

                    <span class="cdc"><p>Harga Ongkir</p><p>Rp. 10.000</p></span>
                    <hr>

                    <span class="cdc" style="margin-left: auto"><p>Metode Pembayaran: COD</p></span>
                    <span class="cdc"><h3>Total</h3><h2 class="a-poppins">Rp. {{ $total_price + 10000 }}</h2></span>
                </div>
                <button class="btn">Pesan</button>
              </div>
            </div>
        </div>
    </section>

    @include('components.modals.add-map')

    @include('components.jquery')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        const date = new Date();
        date.setDate(date.getDate() + 4);
        document.getElementById('delivery_date').min = date.toISOString().split("T")[0];

        const deliveryDateInput = document.getElementById('delivery_date');
        deliveryDateInput.value = today.toISOString().split('T')[0];

        var map = L.map('map').setView([-7.250445, 112.768845], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        function onLocationFound(e) {
            var radius = e.accuracy / 2;

            L.marker(e.latlng).addTo(map)
                .bindPopup("You are within " + radius + " meters from this point").openPopup();

            L.circle(e.latlng, radius).addTo(map);

            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            // Isi koordinat
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;

            // Ambil alamat dari API OpenStreetMap
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data && data.display_name) {
                        var location_address = data.display_name;

                        // Isi input dan tampilkan ke <p>
                        document.getElementById('location_address').value = location_address;
                        document.getElementById('display-address').innerText = location_address;
                        document.getElementById('detail-order-location').innerText = location_address;
                    } else {
                        alert('Location address not found.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Unable to retrieve location address. Please try again.');
                });
        }

        map.on('locationfound', onLocationFound);
        map.locate({setView: true, maxZoom: 16});

        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data && data.display_name) {
                        var location_address = data.display_name; // Nama lokasi
                        document.getElementById('latitude').value = lat;
                        document.getElementById('longitude').value = lng;
                        document.getElementById('location_address').value = location_address; // Simpan nama lokasi

                        document.getElementById('locationModal').style.display = 'block'; // Tampilkan modal
                    } else {
                        alert('Location address not found.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Unable to retrieve location address. Please try again.');
                });
        });

        document.getElementById('locationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            fetch('/locations', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                alert(data.success);
                document.getElementById('locationModal').style.display = 'none';
                this.reset();
            });
        });

        function closeAddcalendar() {
            document.getElementById('locationModal').style.display = 'none';
        }
    </script>
</x-app-layout>