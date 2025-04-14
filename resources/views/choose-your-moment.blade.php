  <x-guest-layout>
      <head>
          <style>
            section{
              min-height: 10vh
            }
              .product-container {
                gap: 0 !important;
                row-gap: 45px !important;
                column-gap: 15px !important;
              }
              .product-content {
                text-align: center !important;
              }
          </style>
      </head>
      <section class="first-section">
          <div class="section-container brownies">
            <div class="heading-text">
              <h2 data-aos="fade-down" data-aos-duration="500">Pilih Acaramu</h2>
              <p data-aos="fade-down" data-aos-duration="700">
                Achie Bakery menyediakan berbagai hidangan untuk berbagai acara.
              </p>
            </div>
            <div
              class="product-container"
              data-aos="fade-zoom-in"
              data-aos-easing="ease-in-back"
              data-aos-duration="700"
            >
            @foreach ($moments as $moment)            
            <a href="{{ route('cym.item', ['moment' => $moment->id_moment]) }}">
              <div class="product-content">
                <div class="cym-image">
                  <img src="{{ asset( $moment->moment_img ) }}" alt="" />
                </div>
                <h4>{{ $moment->moment_name }}</h4>
              </div>
            </a>
            @endforeach
            </div>
          </div>
      </section>  
  </x-guest-layout>