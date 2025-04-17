<a href="{{ route('product-preview.index', ['product' => $product->id_product ])}}">
    <div class="product-content">
        <div class="product-img">
            <img src="{{ asset ($product->product_img) }}" alt="welcome-best-seller{{ $product->product_img }}" />
        </div>
        <div class="product-info">
            <h4>{{ $product->product_name }}</h4>
            <p class="text-price">Rp. {{ $product->product_price }}</p>
        </div>
    </div>
</a>