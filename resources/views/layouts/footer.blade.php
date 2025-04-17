<footer>
    <div class="footer-container">
      <div class="main-footer">
        <div class="footer-content location">
          <h5>Lokasi Kami</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.094255318241!2d109.32878373804971!3d-7.323474695289252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65597262857197%3A0xe8d2aaf155e13c2e!2sAchie%20Bakery!5e1!3m2!1sen!2sid!4v1744861067253!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <p>Desa Pekalongan 01/05, Bojongsari, Purbalingga, Jawa Tengah</p>
        </div>
        <div class="footer-content logo-links">
          <span class="footer-logo">
            <img src="{{ asset('assets/img/Logo/Logo Achie Bakery.png') }}" alt="" />
          </span>
          <a href="{{ route('welcome') }}" class="underline">Beranda</a>
          <a href="{{ route('user.category.index') }}" class="underline">Menu</a>
          <a href="{{ route('cym.index') }}" class="underline">Pilih Momenmu</a>
          <a href="{{ route('about.index') }}" class="underline">Tentang Achie Bakery</a>
        </div>
        <div class="footer-content about">
          <div class="about-container">
            <h5>Tentang Kami</h5>
            <p>
              Minimal pre order adalah h-3. Kami menerima pesanan setiap hari
              kecuali h-2 lebaran.
            </p>
          </div>
          <div class="about-container">
            <h5>Hubungi Kami di</h5>
            <ul class="contact-container">
              <li class="contact-content">
                <a href="https://www.instagram.com/achiehandhito?igsh=MTk4ZWg5MzFic2kzaw==" class="btn-icon"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </li>
              <li class="contact-content">
                <a href="https://www.facebook.com/share/1A8hsQwfa6/?mibextid=qi2Omg" class="btn-icon"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
              </li>
              <li class="contact-content">
                <a href="https://wa.me/6287737187324" class="btn-icon"
                  ><i class="fa-brands fa-whatsapp"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="about-container">
            <h5>Sertifikat Kami</h5>
            <ul class="certificates-container">
              <li class="certificates-content">
                <a href="{{ asset('assets/img/Sertifikat/Halal.jpg') }}" class="underline">Halal</a>
              </li>
              <li class="certificates-content">
                <a href="{{ asset('assets/img/Sertifikat/PIRT.jpg') }}" class="underline">PIRT</a>
              </li>
              <li class="certificates-content">
                <a href="{{ asset('assets/img/Sertifikat/Usaha.jpg') }}" class="underline">Nomor Induk Usaha</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-credit">
        <h5>Achie Bakery | All Reserved</h5>
      </div>
    </div>
</footer>