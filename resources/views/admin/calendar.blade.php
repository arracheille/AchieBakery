@include('layouts.admin.index')
<div class="content">
    <div class="heading-buttons">
        <h3>Kalendar Pesanan</h3>
    </div>
    <div id="calendar"></div>
</div>

@include('components.modals.admin.calendar.edit-calendar')
{{-- @include('components.modals.admin.calendar.add-calendar') --}}

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    var orders = @json($orders);
    
    function openEditcalendar(id) {
        document.getElementById('editOrderModal-' + id).style.display = 'block';
        updateNotification(id)
    }

    function closeEditcalendar(id) {
        document.getElementById('editOrderModal-' + id).style.display = 'none';
    }
</script>
@include('components.calendar')