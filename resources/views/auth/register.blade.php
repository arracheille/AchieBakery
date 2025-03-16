<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    </head>

    <section class="auth">
        <div class="section-container">
            <div class="auth-container">
                <div class="auth-content">
                    <div class="auth-text">
                        <h2>Daftar</h2>
                        <p>Untuk mulai berbelanja di Achie Bakery</p>
                    </div>
                    <div class="form-container">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-container">
                            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama Lengkap" />
                        </div>

                        <x-input-error :messages="$errors->get('name')" />

                        <div class="input-container">
                            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                        </div>

                        <x-input-error :messages="$errors->get('email')" />

                        <div class="input-container">
                            <x-text-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                
                            <i class="fa fa-eye" id="togglePassword"></i>
                        </div>

                        <x-input-error :messages="$errors->get('password')" />
                        
                        <div class="input-container">
                            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password" />
                
                            <i class="fa fa-eye" id="togglePassword_confirmation"></i>
                        </div>

                        <x-input-error :messages="$errors->get('password_confirmation')" />

                        <x-primary-button class="btn">
                            {{ __('Daftar') }}
                        </x-primary-button>

                        </form>
                    </div>
                    <p>
                        Sudah memiliki akun?
                        <span><a href="{{ route('login') }}" class="a-poppins">Masuk Sekarang</a></span>
                    </p>
                </div>
            </div>
        </div>
      </section>

      <script>
        document.getElementById("togglePassword")
        .addEventListener("click", function () {
          let passwordInput = document.getElementById("password");
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
            this.classList.remove("fa-eye");
            this.classList.add("fa-eye-slash");
          } else {
            passwordInput.type = "password";
            this.classList.remove("fa-eye-slash");
            this.classList.add("fa-eye");
          }
        });

        document.getElementById("togglePassword_confirmation")
        .addEventListener("click", function () {
          let passwordInput = document.getElementById("password");
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
            this.classList.remove("fa-eye");
            this.classList.add("fa-eye-slash");
          } else {
            passwordInput.type = "password";
            this.classList.remove("fa-eye-slash");
            this.classList.add("fa-eye");
          }
        });
      </script>    
</x-app-layout>
