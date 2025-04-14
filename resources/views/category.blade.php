<x-app-layout>
    <head>
        <style>
            section {
                min-height: 10vh;
            }
            section:nth-of-type(1) .section-container {
                padding: 128px 0 60px 0;
            }
            .section-container {
                padding: 60px 0 60px 0;
            }
            section:nth-of-type(3n),
            section:nth-of-type(2) .section-container {
                padding: 0 0 60px 0;
            }
            section:nth-of-type(3n) {
                background-color: var(--dark-brown);
            }
            section:nth-of-type(3n) h2,
            section:nth-of-type(3n) h4,
            section:nth-of-type(3n) a,
            section:nth-of-type(3n) p {
                color: var(--cream);
            }
            .product-img{
                max-width: 16vw;
            }
        </style>
    </head>
    @foreach ($categories as $category)
        <section class="{{ $category->category_name }}">
            <div class="section-container {{ $category->category_name }}">
                <div class="heading-text">
                    <h2 data-aos="fade-down" data-aos-duration="500">{{ $category->category_name }}</h2>
                    <a href="{{ route('category-item.index', ['category' => $category->id_category]) }}" class="underline">Tampilkan Lebih Banyak</a>
                </div>
                <div
                    class="product-container"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-duration="700">

                    @foreach ($category->products->take(4) as $product)
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
    @endforeach
</x-app-layout>