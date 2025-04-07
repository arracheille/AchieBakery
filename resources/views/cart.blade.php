<x-app-layout>
    <head>
        <style>
            section {
              min-height: 10vh;
            }
        </style>      
    </head>
    <section class="cart">
        <div class="section-container cart">
            <h2>Keranjangmu</h2>
            <div class="cart-divider">
                <div class="cart-container">
                    <div class="cart-title">
                    <label class="label-checkbox">
                        <input type="checkbox" id="checkAll" onclick="toggleAll(this)" />
                        Centang Semua
                    </label>
                    <p>
                        <span id="checked-item-count">3</span> dari
                        <span id="itemCount">10</span> produk dipilih
                    </p>
                    </div>
                    <div class="cart-product-container">
                        <div class="cart-product-content">
                            <input
                            type="checkbox"
                            class="itemCheckbox"
                            onchange="updateTotal()"
                            />
                            <div class="product-img">
                            <img src="assets/img/Katalog/brownies hero.jpg" alt="" />
                            </div>
                            <div class="product-info">
                            <h3>Brownies Sekat 25 Pcs</h3>
                            <p>Rp. 30.000</p>
                            <div class="item-quantity">
                                <button id="increase-btn"><i class="fa-solid fa-plus"></i></button>
                                <p>1</p>
                                <button id="decrease-btn"><i class="fa-solid fa-minus"></i></button>
                            </div>
                            </div>
                            <button class="btn-icon button-delete">
                            <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
              <div class="cart-total-container">
                <div class="cart-total-content">
                  <h3>Total</h3>
                  <h5>3 Produk</h5>
                  <hr />
                  <h2>Rp. 60.000</h2>
                </div>
                <button class="btn">Pesan</button>
              </div>    
            </div>
        </div>
    </section>
</x-app-layout>