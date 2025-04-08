<div id="locationModal" class="modal">
    <div class="modal-content">
        <div class="modal-title-close">
            <h2>Buat Pesanan</h2>
            <span class="close" onclick="closeAddcalendar()">&times;</span>
        </div>
        <form id="locationForm">
            @csrf

            <label for="location_name">Nama Lokasi</label>
            <div class="input-container">

                <input type="text" name="location_name" id="location_name" placeholder="Rumah, kantor, dan lain-lain.." required>

            </div>

            <label for="location_address">Alamat Lokasi</label>
            <div class="input-container">

                <input type="text" name="location_address" id="location_address" required>

            </div>

            <label for="latitude">Latitute</label>
            <div class="input-container">

                <input type="text" name="latitude" id="latitude" required>

            </div>

            <label for="longitude">Longtitude</label>
            <div class="input-container">

                <input type="text" name="longitude" id="longitude" required>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeAddcalendar()">
                    Cancel
                </button>
                
                <button type="submit" class="btn" id="modal-submit-btn">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>