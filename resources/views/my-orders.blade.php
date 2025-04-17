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
        </style>
    </head>

    <section class="first-section myorder">
        <div class="section-container">
            <h2>Pesanan Anda</h2>
            <div class="checkout-items">
                <div class="cart-product-container">
                    @forelse ($orders->where('user_id', Auth::user()->id_user) as $order)
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
                                <p class="product-status
                                    @if($order->status == 'pending') 
                                        status-pending 
                                    @elseif($order->status == 'on_delivery') 
                                        status-on-delivery 
                                    @elseif($order->status == 'delivered') 
                                        status-delivered 
                                    @endif">
                                    {{ $order->status }}

                                    @if ($order->status == 'pending' && $order->method == 'transfer_bri')
                                        <p>Mohon kirimkan bukti transfer untuk melanjutkan pemesanan.</p>
                                        <button class="btn">Kirim Bukti Transfer</button>
                                    @endif
                                </p>
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
</x-app-layout>
