<x-guest-layout>
    <head>
        <style>
            section {
              min-height: 10vh !important;
            }
            section:nth-of-type(1) .section-container {
              padding: 128px 0 60px 0 !important;
            }
            .section-container {
              padding: 0 0 60px 0 !important;
            }
            .heading-carousel {
              display: flex;
              justify-content: space-between;
              align-items: center;
            }
            .carousel-nav {
              justify-content: center;
              gap: 10px;
            }
            .carousel-nav .carousel-btn {
              background-color: var(--dark-brown);
              color: var(--cream);
            }
            .owl-carousel .item {
              text-align: start;
              align-items: start;
            }
        </style>
    </head>

    <section class="first-section cym-item">
        <div class="section-container cym-item">
            <div class="heading-text">
                <h2 data-aos="fade-down" data-aos-duration="500">{{ $moment->moment_name }}</h2>
                <p>
                    {{ $moment->moment_description }}
                </p>
            </div>
            @foreach ($moment->momentcategories as $moment_category)
                <div
                class="carousel-container"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-duration="700"
                >
                    <div class="heading-carousel">
                        <h4>{{ $moment_category->category->category_name }}</h4>
                        <div class="carousel-nav">
                            <button class="carousel-btn prev">❮</button>
                            <button class="carousel-btn next">❯</button>
                        </div>
                    </div>
                    <div class="carousel">
                        @foreach ($moment_category->category->products as $product)
                        <div class="carousel-item">
                            <div class="category-image">
                                <img src="{{ asset( $product->product_img ) }}" alt="{{ $product->product_name }}" />
                            </div>
                            <h4>{{ $product->product_name }}</h4>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <script src="{{ asset('assets/js/carousel.js') }}"></script>
</x-guest-layout>