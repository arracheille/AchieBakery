<x-app-layout>
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
                            <p class="quantity-per-product">{{ $orderproducts->quantity }}x</p>
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
</x-app-layout>