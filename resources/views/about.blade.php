<x-guest-layout>
    <head>
        <style>
            .about .section-container {
              width: 100%;
              gap: 0;
            }
            .about-content {
              display: flex;
              align-items: stretch;
            }
            .about-content .about-content-side {
              max-width: 50%;
              display: flex;
            }
            .about-content-side.text {
              display: flex;
              flex-direction: column;
              gap: 15px;
              padding: 60px 120px;
              box-sizing: border-box;
              background-color: var(--dark-brown);
              justify-content: center;
            }
            .about-content-side.text h2,
            .about-content-side.text p {
              color: var(--cream);
            }
            .about-content-side.text a {
              margin-left: auto;
            }
            .about-content-side.img {
              display: flex;
            }
            .about-content-side.img img {
              width: 100%;
              height: 100%;
              object-fit: cover;
              object-position: center;
            }
            .about-content-center {
              flex: 1;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              gap: 30px;
              padding-block: 60px;
            }
            .about-content-center.contact {
              background-color: var(--dark-pink);
            }
            .about-content-center .contact-content a {
              background-color: var(--dark-brown);
              color: var(--cream);
              font-size: 20px;
            }
            .about-content-center .founder-img,
            .about-content-center .history {
              width: 60vw;
              text-align: center;
            }
        </style>
    </head>
    <section class="about">
        <div class="section-container">
          <div class="about-content">
            <div class="about-content-side text">
              <h2>Tentang Pemesanan</h2>
              <p>
                Kami menerima pesanan setiap hari, kecuali h-3 pada hari-hari
                libur seperti lebaran dan kurban. Semua pesanan dipesan dengan
                metode pre order, dimana nanti customer akan memesan terlebih
                dahulu, lalu menentukan hari pengiriman produk. Produk biasanya
                dikirim dalam 1 hari, minimal pemesanan adalah h-3 pengiriman.
              </p>
            </div>
            <div class="about-content-side img">
              <img src="{{ asset('assets/img/About/IMG20211113103345.jpg') }}" alt="" />
            </div>
          </div>
          <div class="about-content">
            <div class="about-content-side img">
              <img src="{{ asset('assets/img/About/IMG20250118122356.jpg') }}" alt="" />
            </div>
            <div class="about-content-side text">
              <h2>Lokasi Kami</h2>
              <p>
                Rumah produksi Achie Bakery berlokasi di Desa Pekalongan, RT 01 RW
                05, Kecamatan Bojongsari, Kabupaten Purbalingga, Provinsi Jawa
                Tengah. Kami melayani pemesanan untuk area sekitar dan siap
                mengantarkan ke berbagai lokasi sesuai permintaan pelanggan.
              </p>
              <a href="#" class="btn">Lihat Lokasi</a>
            </div>
          </div>
          <div class="about-content-center contact">
            <h2>Hubungi Kami di</h2>
            <ul class="contact-container">
              <li class="contact-content">
                <a href="#" class="btn-icon"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </li>
              <li class="contact-content">
                <a href="#" class="btn-icon"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
              </li>
              <li class="contact-content">
                <a href="#" class="btn-icon"
                  ><i class="fa-brands fa-whatsapp"></i
                ></a>
              </li>
              <li class="contact-content">
                <a href="#" class="btn-icon"><i class="fa-solid fa-at"></i></a>
              </li>
            </ul>
          </div>
          <div class="about-content-center">
            <h2>Founder Achie Bakery</h2>
            <div class="founder-img">
              <img src="{{ asset('assets/img/About/IMG_20220410_160547.jpg') }}" alt="" />
            </div>
            <h3>Asriati, Sp.</h3>
            <p class="history">
              Ibu Asriati, founder Achie Bakery, memulai perjalanannya di dunia
              baking sejak 2016. Berkat ketekunannya, bisnisnya berkembang dari
              menjual kue secara online hingga menerima pesanan dalam jumlah
              besar. Hingga kini, Achie Bakery terus menghadirkan produk
              berkualitas dengan rasa terbaik untuk pelanggannya.
            </p>
          </div>
        </div>
    </section>
</x-guest-layout>