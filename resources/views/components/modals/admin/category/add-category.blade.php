<div id="addCategoryModal" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Tambahkan Kategori Produk</h2>
            <span class="close" id="close-card-modal">&times;</span>
        </div>

        <form action="">
            <label for="card-name">Nama Kategori :</label>

            <div class="input-container">
                <input
                    type="text"
                    id="product_img"
                    name="product_img"
                    autocomplete="off"
                />
            </div>

            <label for="card-name">Deskripsi Kategori :</label>

            <div class="input-container">
                <textarea name="description" id="description" rows="4"></textarea>
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
    var cardmodal = document.getElementById("addCategoryModal");
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