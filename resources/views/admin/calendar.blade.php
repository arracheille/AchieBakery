@include('layouts.admin.index')

<div class="content">
    <div class="heading-buttons">
        <h3>Pesanan Pengguna</h3>
        {{-- <div class="buttons-container">
            <button class="btn" onclick="openAddCategory()">Tambahkan Data</button>
            <div class="input-container">
                <input
                    type="text"
                    id="search"
                    placeholder="Cari Data..."
                    autocomplete="off"
                />
            </div>
        </div> --}}
    </div>
    <div id="calendar"></div>
</div>

@include('components.modals.admin.calendar.edit-calendar')
@include('components.modals.admin.calendar.add-calendar')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/quantity.js') }}"></script>

@include('components.calendar')

<script>
    var orders = @json($orders);
    
    function openAddcalendar(date) {
        document.getElementById('addcalendarModal').style.display = 'block';
    }

    function closeAddcalendar() {
        document.getElementById('addcalendarModal').style.display = 'none';
    }

    function openEditcalendar(id) {
        document.getElementById('editcalendarModal-' + id).style.display = 'block';
        updateNotification(id)
    }

    function closeEditcalendar(id) {
        document.getElementById('editcalendarModal-' + id).style.display = 'none';
    }
</script>
