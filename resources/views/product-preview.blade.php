<x-guest-layout>
    <section class="product-preview">
        <div class="section-container product-preview">
          <span
            ><a href="#">Menu</a> > <a href="#">{{ $product->category->category_name }}</a> >
            <a href="#">{{ $product->product_name }}</a></span
          >
          <div class="product-preview-container">
            <div class="product-preview-img-desc">
              <div class="product-preview-imgs">
                <div class="product-img">
                  <img src="{{ asset($product->product_img) }}" alt="" />
                </div>
                {{-- <div class="product-img-slider">
                  <div class="product-slider-imgs">
                    <div class="product-img">
                      <img src="assets/img/Katalog/brownies hero.jpg" alt="" />
                    </div>
                    <div class="product-img">
                      <img src="assets/img/Katalog/brownies hero.jpg" alt="" />
                    </div>
                  </div>
                  <div class="carousel-nav">
                    <button class="carousel-btn prev">❮</button>
                    <button class="carousel-btn next">❯</button>
                  </div>
                </div> --}}
              </div>
              <p class="product-description">{{ $product->product_description }}</p>
              <p>{{ $product->product_size }}</p>
            </div>
            <div class="product-preview-info">
              <h2>{{ $product->product_name }}</h2>
              <div class="price-orders">
                <h3>Rp. {{ $product->product_price }}</h3>
                <p>100 Orang memesan ini</p>
              </div>
              {{-- <div class="variants-container">
                <input
                  type="radio"
                  id="option1"
                  name="options"
                  value="1"
                  checked
                />
                <label for="option1" class="option-variants">
                  <div class="product-img">
                    <img src="assets/img/Katalog/brownies hero.jpg" alt="" />
                  </div>
                  Semua Varian
                </label>
  
                <input type="radio" id="option2" name="options" value="2" />
                <label for="option2" class="option-variants">
                  <div class="product-img">
                    <img src="assets/img/Katalog/brownies hero.jpg" alt="" />
                  </div>
                  Semua Varian
                </label>
              </div> --}}
              <div class="actions">
                <form action="{{ route('cart.store') }}" method="POST">
                  @csrf

                  <input type="hidden" name="product_id" value="{{ $product->id_product }}">

                  <div class="quantity-chat">
                    <div class="item-quantity">
                      <button type="button" class="increase-btn" id="increase-btn" ><i class="fa-solid fa-plus"></i></button>
                      <div class="input-container">
                          <input type="number" name="quantity" id="quantity" value="1" min="1">
                      </div>
                      <button type="button" class="decrease-btn" id="decrease-btn" ><i class="fa-solid fa-minus"></i></button>
                    </div>
                    <a href="#" class="btn-icon"
                      ><i class="fa-solid fa-comment-dots"></i>
                    </a>
                  </div>

                  <button class="btn cart">Masukkan ke Keranjang</button>
                </form>
                <button class="btn">Pesan Sekarang</button>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="recommends">
        <div class="section-container recommends">
          <div class="heading-text">
            <h2 data-aos="fade-down" data-aos-duration="500">
              Anda Mungkin Juga Suka..
            </h2>
            <a href="#" class="underline">Tampilkan Lebih Banyak</a>
          </div>
          <div
            class="product-container"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="700"
          >
            @foreach ($products->shuffle()->take(4) as $product)
                <a href="{{ route('product-preview.index', ['product' => $product->id_product ])}}">
                <div class="product-content">
                    <div class="product-img">
                        <img src="{{ asset ($product->product_img) }}" alt="welcome-best-seller{{ $product->product_img }}" />
                    </div>
                    <div class="product-info">
                        <h4>{{ $product->product_name }}</h4>
                        <p>Rp. {{ $product->product_price }}</p>
                    </div>
                </div>
                </a>
            @endforeach
          </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/quantity.js') }}"></script>
</x-guest-layout>