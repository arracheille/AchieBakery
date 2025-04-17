@foreach ($orders as $order)
<div id="editOrderModal-{{ $order->id_order }}" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Order Details</h2>
            <span class="close" onclick="closeEditorder({{ $order->id_order }})">&times;</span>
        </div>
        <form action="/order-edit/{{ $order->id_order }}" method="POST">
            @csrf
            @method('PUT')

            <label for="customer_name">Customer Name :</label>
            <input type="text" name="customer_name" id="customer_name" value="{{ $order->customer_name }}" placeholder="Example : Meeting With Company A">

            <label for="delivery_date">Delivery Date :</label>
            <input type="datetime-local" value="{{ \Carbon\Carbon::parse($order->tanggal)->format('Y-m-d\TH:i') }}">

            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeEditorder({{ $order->id_order }})">
                    Cancel
                </button>
                
                <button type="submit" class="btn" id="modal-submit-btn">
                    Edit
                </button>
            </div>
        </form>
        <form action="/order-delete/{{ $order->id_order }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">Archive</button>
        </form>
    </div>
</div>
@endforeach