<div id="editOrderModal-{{ $order->id_order }}" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Edit Pesanan <span>{{ $order->id_order }}</span></h2>
            <span class="close" onclick="closeEditOrder('{{ $order->id_order }}')">&times;</span>
        </div>

        <form action="{{ route('order.edit', ['order' => $order->id_order]) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" id="editOrderId-{{ $order->id_order }}" name="id_order">

            <label for="status">status :</label>

            <select name="status" id="status">
                <option value="" disabled selected>
                  Urutkan berdasarkan..
                </option>
                <option value="pending">Pending</option>
                <option value="on_delivery">Dalam Perjalanan</option>
                <option value="delivered">Selesai</option>
              </select>

            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeEditCategory('{{ $order->id_order }}')">
                    Cancel
                </button>
                
                <button type="submit" class="btn" id="modal-submit-btn">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>