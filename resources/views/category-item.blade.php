<x-app-layout>
    <head>
        <style>
            .heading-text {
              text-align: start !important;
              margin: 0 !important;
            }
            .heading-filter {
              display: flex;
              align-items: end;
              justify-content: space-between;
            }
          </style>      
    </head>

    <section class="{{ $category->name }}">
        <div class="section-container brownies">
          <div class="heading-filter">
            <div class="heading-text">
              <h2 data-aos="fade-down" data-aos-duration="500">{{ $category->name }}</h2>
              <p data-aos="fade-down" data-aos-duration="600">
                {{ $category->category_description }}
              </p>
            </div>
            <div
              class="filter-container"
              data-aos="fade-down"
              data-aos-duration="500"
            >
              <form action="">
                <select>
                  <option value="" disabled selected>
                    Urutkan berdasarkan..
                  </option>
                  <option value="terbaru">Terbaru</option>
                  <option value="terlama">Terlama</option>
                  <option value="terpopuler">Terpopuler</option>
                </select>
              </form>
            </div>
          </div>
          <div
            class="product-container"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="700">

            @foreach ($category->products as $product)
                <div class="product-content">
                    <div class="product-img">
                        <img src="{{ asset($product->product_img) }}" alt="{{ $product->product_img }}" />
                    </div>
                    <div class="product-info">
                    <h4>{{ $product->product_name }}</h4>
                    <p>Rp. {{ $product->product_price }}</p>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
    </section>
</x-app-layout>