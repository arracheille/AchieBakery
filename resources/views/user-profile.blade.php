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

            .cart-product-container {
                gap: 20px;
            }
            .product-status-quantity{
                display: flex;
                flex-direction: column;
                gap: 10px;
                text-align: end;
                margin-left: auto;
            }
        </style>
    </head>

    <section class="first-section myorder">
        <div class="section-container">
            <h2>Pesanan Anda</h2>
        
            <div class="checkout-items">
                <div class="cart-product-container">
                    @forelse ($orders as $order)
                    <div class="cart-product-container">
                        @foreach ($order->orderproducts as $orderproducts)
                        <div class="cart-product-content">
                            <div class="product-img">
                                <img src="{{ asset($orderproducts->product->product_img) }}" alt="{{ $orderproducts->product->product_name }}" />
                            </div>
                            <div class="product-info">
                                <h3>{{ $orderproducts->product->product_name }}</h3>
                                <p>Rp. {{ number_format($orderproducts->product->product_price, 0, ',', '.') }}</p>
                            </div>
                            <div class="product-status-quantity">
                                <p class="quantity-per-product">{{ $orderproducts->quantity }}x</p>
                                <p class="product-status">status {{ $order->status }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @empty
                        <p>Anda belum memesan produk !</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-container">
            <h2>Profil Anda</h2>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>
    
            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')
    
                <x-input-label for="name" :value="__('Name')" />
                <div class="input-container">
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                </div>
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
    
                        <x-input-label for="email" :value="__('Email')" />
                <div class="input-container">
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
    
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}
    
                                <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>
    
                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
    
                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400"
                        >{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
