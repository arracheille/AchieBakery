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
      selectMirror: true,
      select: function (arg) {
        console.log(arg.startStr);
        var DeliveryDate = new Date(arg.startStr);
        
        DeliveryDate.setDate(DeliveryDate.getDate() + 3);

        var hours = DeliveryDate.getHours();
        var minutes = DeliveryDate.getMinutes();

        DeliveryDate.setHours(hours, minutes);

        var DeliveryDateString = DeliveryDate.toISOString().slice(0, 16);

        document.getElementById('delivery_date').value = DeliveryDate.toISOString().slice(0, 16);

        openAddcalendar();
        calendar.unselect();
      },
      eventClick: function (arg) {
        var calendarId = arg.event.id;
        openEditcalendar(calendarId);
      },
      editable: false,
      dayMaxEvents: true,
      events: @json($orders),
      eventDidMount: function(info) {
        var backgroundColorId = info.event.extendedProps.background_color;
        if (backgroundColorId) {
            info.el.id = backgroundColorId;
        }
      }
    });
    calendar.render();
  });
</script>