<script src="{{ asset('fullcalendar-6.1.15/dist/index.global.js') }}"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");

    var today = new Date();
    var formattedToday = today.toISOString().slice(0, 10);

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "dayGridMonth,timeGridWeek,timeGridDay",
      },
      validRange: {
        start: new Date()
      },
      initialDate: formattedToday,
      navLinks: true,
      selectable: true,
      editable: false,
      dayMaxEvents: true,
      events: @json($orders),
      eventClick: function (arg) {
        var calendarId = arg.event.id;
        openEditcalendar(calendarId);
      },
    });
    calendar.render();
  });
</script>