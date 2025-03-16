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
        </style>
    </head>
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
                data-aos-duration="700">

                <div class="product-content">

                    <div class="product-img">
                        <img src="assets/img/Katalog/brownies sekat.jpg" alt="" />
                    </div>

                    <div class="product-info">
                        <h4>Brownies Sekat 25 Pcs</h4>
                        <p>Rp. 30.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</x-app-layout>