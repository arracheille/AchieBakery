<section class="brownies">
    <div class="section-container brownies">
        <div class="heading-text">
          <h2 data-aos="fade-down" data-aos-duration="500">Brownies</h2>
          <a href="#" class="underline">Tampilkan Lebih Banyak</a>
        </div>
        <div
          class="product-container"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-duration="700"
        >
            @foreach ($products as $product)
                <div class="product-content">
                    <div class="product-img">
                        <img src="{{ $product['image']}}" alt="" />
                    </div>
                    <div class="product-info">
                        <h4>{{ $product['title']}}</h4>
                        <p>{{ $product['price']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- @include('partials.products-title-list', ['title' => 'Promo Spesial', 'products' => $products]) --}}