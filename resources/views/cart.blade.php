<x-app-layout>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            section {
              min-height: 10vh;
            }
        </style>
    </head>
    <section class="cart">
        <div class="section-container cart">
            <h2>Keranjang Belanjamu</h2>
            <div class="cart-divider">
                <div class="cart-container">
                    <div class="cart-title">
                    <label class="label-checkbox">
                        <input type="checkbox" id="checkAll" onclick="checkAll(this)" />
                        Centang Semua
                    </label>
                    <p>
                        <span id="checked-item-count">{{ $checkedCount ?? 0 }}</span> dari
                        <span id="itemCount">{{ $totalCount ?? 0 }}</span> produk dipilih
                    </p>                    
                    </div>
                    <div class="cart-product-container">
                        @foreach ($carts->where('user_id', Auth::user()->id_user) as $cart)
                        <div class="cart-product-content">
                            <form action="{{ route('cart.edit', ['checklist' => $cart->id_cart]) }}" id="checklist-item-check{{ $cart->id_cart }}">
                                <input type="checkbox" class="itemCheckbox" id="checklist{{ $cart->id_cart }}" onchange="checklist('{{ $cart->id_cart }}')" name="is_checked" value="{{ $cart->is_checked }}" {{ $cart->is_checked == 1 ? 'checked' : '' }}/>
                            </form>
                            
                            <div class="product-img">
                                <img src="{{ asset($cart->product->product_img)}}" alt="" />
                            </div>
                            <div class="product-info">
                                
                                <h3>{{ $cart->product->product_name }}</h3>
                                
                                <p>Rp. {{ $cart->product->product_price }}</p>
                                
                                <div class="item-quantity">
                                    <button type="button" class="increase-btn" data-id="{{ $cart->id_cart }}"><i class="fa-solid fa-plus"></i></button>
                                    
                                    <div class="input-container">
                                        <input type="number" name="quantity" class="quantity-input" data-id="{{ $cart->id_cart }}" value="{{ $cart->quantity }}" min="1" readonly>
                                    </div>
                                    
                                    <button type="button" class="decrease-btn" data-id="{{ $cart->id_cart }}"><i class="fa-solid fa-minus"></i></button>
                                </div>                                
              
                            </div>

                            <form action="{{ route('cart.delete', ['cart' => $cart->id_cart]) }}" method="POST" class="delete-cart-item">
                                @csrf
                                @method('DELETE')
                                
                                <button class="btn-icon button-delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
              <div class="cart-total-container">
                <div class="cart-total-content">
                  <h3>Total</h3>
                  <h5><span id="total-item-checked">{{ $checkedCount ?? 0 }}</span> Produk</h5>
                  <hr />
                  <h2>Rp. <span id="totalPrice">0</span></h2>
                </div>
                <a href="{{ route('checkout') }}" class="btn">Pesan</a>
            </div>    
            </div>
        </div>
    </section>

    @include('components.jquery')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function () {
            $.get("{{ route('cart.count.checked') }}", function(data) {
                $('#checked-item-count').text(data.checked);
                $('#total-item-checked').text(data.checked);
                $('#itemCount').text(data.total);
                $('#totalPrice').text(data.total_price.toLocaleString('id-ID'));

                $('#checkAll').prop('checked', data.checked == data.total);
            });
        });

        function checklist(id) {
            let is_checked = $('#checklist'+id).is(":checked") == true ? 1 : 0;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "PUT",
                cache: 'false',
                url: "{{ route('cart.checklist') }}",
                data:{
                    'check_id' : id,
                    is_checked,
                },
                success: function (res) {
                    if (res.message == 'Berhasil simpan') {
                        $('#checklist' + id).prop('checked', res.is_checked == 1);

                        // Update checked count tanpa reload
                        $.get("{{ route('cart.count.checked') }}", function(data) {
                            $('#checked-item-count').text(data.checked);
                            $('#total-item-checked').text(data.checked);
                            $('#itemCount').text(data.total);
                            $('#totalPrice').text(data.total_price);

                            $('#checkAll').prop('checked', data.checked == data.total);
                        });
                    }
                }
            })
        }

        function checkAll(source) {
            const isChecked = source.checked ? 1 : 0;

            $.ajax({
                type: 'PUT',
                url: "{{ route('cart.check.all') }}",
                data: {
                    is_checked: isChecked
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    if (res.message === 'Berhasil update semua') {
                        $('.itemCheckbox').each(function () {
                            $(this).prop('checked', isChecked);
                        });

                        // Update count dan harga
                        $.get("{{ route('cart.count.checked') }}", function(data) {
                            $('#checked-item-count').text(data.checked);
                            $('#total-item-checked').text(data.checked);
                            $('#itemCount').text(data.total);
                            $('#totalPrice').text(data.total_price.toLocaleString('id-ID'));

                            $('#checkAll').prop('checked', data.checked == data.total);
                        });
                    }
                }
            });
        }

        $(document).on('click', '.increase-btn', function () {
            let id = $(this).data('id');
            let input = $('.quantity-input[data-id="' + id + '"]');
            let current = parseInt(input.val());
            let newQty = current + 1;

            updateQuantity(id, newQty, input);
        });

        $(document).on('click', '.decrease-btn', function () {
            let id = $(this).data('id');
            let input = $('.quantity-input[data-id="' + id + '"]');
            let current = parseInt(input.val());
            let newQty = current > 1 ? current - 1 : 1;

            updateQuantity(id, newQty, input);
        });

        function updateQuantity(id, qty, inputElement) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('cart.update.quantity') }}",
                type: "PUT",
                data: {
                    id_cart: id,
                    quantity: qty
                },
                success: function (res) {
                    inputElement.val(res.quantity);
                },
                error: function () {
                    toastr.error('Gagal mengubah jumlah');
                }
            });
        }
    </script>

{{-- // success: function (res) {
    //     if (res.message == 'Berhasil simpan') {
    //         if (res.is_checked == 1) {
    //             $('#checklist'+id).prop('checked', true);
    //         } else {
    //             $('#checklist'+id).prop('checked', false);
    //         }
    //     } else {
    //     }
    // }
 --}}
</x-app-layout>