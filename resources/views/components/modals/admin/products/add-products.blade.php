<div id="addProductModal" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Tambahkan Produk</h2>
            <span class="close" id="close-card-modal">&times;</span>
        </div>

        <form action="">
            <label for="product_img">Gambar Produk :</label>

            <div class="input-container">
                <input
                    type="file"
                    id="product_img"
                    name="product_img"
                    autocomplete="off"
                />
            </div>

            <label for="product_name">Nama Produk :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    autocomplete="off"
                />
            </div>

            <label for="product_price">Harga Produk :</label>

            <div class="input-container">
                <input
                    type="number"
                    id="product_price"
                    name="product_price"
                    autocomplete="off"
                />
            </div>

            <label for="product_description">Deskripsi Produk :</label>

            <div class="input-container">
                <textarea name="product_description" id="product_description" rows="4"></textarea>
            </div>

            <label for="product_size">Ukuran Produk :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="product_size"
                    name="product_size"
                    autocomplete="off"
                />
            </div>

            <div class="modal-footer">
                <button type="button" class="btn" id="cancel-card-modal">
                    Cancel
                </button>
                
                <button type="submit" class="btn" id="modal-submit-btn">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    var cardmodal = document.getElementById("addProductModal");
    var opencard = document.getElementById("add-card");
    var cardexit = document.getElementById("close-card-modal");
    var cardcancel = document.getElementById("cancel-card-modal");

    opencard.onclick = function () {
      cardmodal.style.display = "block";
    };

    cardexit.onclick = function () {
      cardmodal.style.display = "none";
    };

    cardcancel.onclick = function () {
      cardmodal.style.display = "none";
    };

    window.onclick = function (event) {
      if (event.target == cardmodal) {
        cardmodal.style.display = "none";
      }
    };
</script>