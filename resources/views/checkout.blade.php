<x-app-layout>
    <head>
        <style>
            section {
              min-height: 10vh;
            }
            .quantity-per-product{
                margin-left: auto;
            }
        </style>      
    </head>
    <section class="cart">
        <div class="section-container cart">
            <h2>Checkout</h2>
            <div class="cart-divider">
                <div class="cart-container">
                    <div class="map-container">
                        <div class="map"></div>
                        <div class="map-address-change">
                            <p>Jl. Diponegoro No. 131 , Semarapura, Klungkung, Bali</p>
                            <a href="#" class="btn">Ubah Lokasi</a>
                        </div>
                    </div>
                    <hr>

                    <div class="checkout-items">
                        <div class="cart-product-container">
                            <div class="cart-product-content">
                                <div class="product-img">
                                    <img src="assets/img/Katalog/brownies hero.jpg" alt="" />
                                </div>
                                <div class="product-info">
                                    <h3>Brownies Sekat 25 Pcs</h3>
                                    <p>Rp. 30.000</p>
                                </div>
                                <p class="quantity-per-product">1x</p>
                            </div>
                        </div>    
                    </div>

                    <div class="input-inline">
                        <label for="catatan">Catatan:</label>

                        <div class="input-container">

                            <input type="text" name="catatan" id="catatan" placeholder="Ketikkan catatan seperti, toppingnya all chocochips ya!">

                        </div>
                    </div>
                    <hr>

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

                    <hr>

                    <div class="date-order">
                        <h4>Tanggal Pengiriman (minimal h-3)</h4>
                        <input type="date" name="delivery-date" id="delivery-date">
                    </div>
                </div>
              <div class="cart-total-container">
                <div class="cart-total-content">
                    <h3>Detail Pesanan</h3>

                    <hr>

                    <span class="cdc"><p>Nama Penerima</p><p>Athaya Azaria</p></span>

                    <hr />

                    <h3>Total Pesanan</h3>

                    <hr>

                    <span class="cdc"><p>Harga Ongkir</p><p>Athaya Azaria</p></span>

                    <hr>

                    <span class="cdc"><h3>Total</h3><h2>Rp. 60.000</h2></span>
                </div>
                <button class="btn">Pesan</button>
              </div>
            </div>
        </div>
    </section>
</x-app-layout>