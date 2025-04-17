<x-guest-layout>
    <x-app-layout>
        <head>
            <style>
                section {
                    min-height: 10vh;
                }
                section.first-section {
                    padding: 128px 0 60px 0;
                }
                .section-container {
                    padding: 60px 0 60px 0;
                }
            </style>
        </head>
        <section class="first-section">
            <div class="section-container">
                <div class="heading-text">
                    <h2 data-aos="fade-down" data-aos-duration="500">Search</h2>
                </div>
                <div
                    class="product-container"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-duration="700"
                >
                @forelse ($products as $product)
                    @include('partials.product-list')
                @empty
                    <p>Tidak ada produk yang sesuai ditemukan!</p>
                @endforelse
                </div>
            </div>
        </section>
    </x-app-layout>
</x-guest-layout>