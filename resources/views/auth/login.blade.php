<x-guest-layout>
    <head>
      <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    </head>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    
    <section class="auth">
      <div class="section-container">
        <div class="auth-container">
          <div class="auth-content">
            <div class="auth-text">
              <h2>Masuk</h2>
              <p>Untuk melanjutkan ke Achie Bakery</p>
            </div>
            <div class="form-container">
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-container">
                  <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                </div>

                <x-input-error :messages="$errors->get('email')" />
                
                <div class="input-container">
                  <x-text-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                  <i class="fa fa-eye" id="togglePassword"></i>
                </div>

                <x-input-error :messages="$errors->get('password')" />

                <x-primary-button type="submit" class="btn">
                    {{ __('Masuk') }}
                </x-primary-button>
              </form>
              <a class="a-poppins" href="{{ route('password.request') }}">
                  {{ __('Lupa Password?') }}
              </a>
            </div>
            <p>
              Belum memiliki akun?
              <span><a href="{{ route('register') }}" class="a-poppins">Daftar Sekarang</a></span>
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
    </script>
</x-guest-layout>
{{-- <!-- Remember Me -->
<div class="block mt-4">
  <label for="remember_me" class="inline-flex items-center">
      <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
      <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
  </label>
</div>

<div class="flex items-center justify-end mt-4">
  @if (Route::has('password.request'))
      <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
          {{ __('Forgot your password?') }}
      </a>
  @endif --}}