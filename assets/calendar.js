document.addEventListener('DOMContentLoaded', function() {
  // var calendarEl = document.getElementById('calendar');
  var figure = document.querySelector('main > article > figure')

  var calendar = new FullCalendar.Calendar(figure, {
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'listMonth,dayGridMonth'
    },
    businessHours: {
      // days of week. an array of zero-based day of week integers (0=Sunday)
      dow: [ 0, 1, 2, 3, 4, 5, 6 ], // Monday - Thursday

      start: '10:00', // a start time (10am in this example)
      end: '16:30', // an end time (6pm in this example)
    },
    // initialDate: '2020-06-12',
    editable: false,
    navLinks: true, // can click day/week names to navigate views
    dayMaxEvents: true, // allow "more" link when too many events
    initialView: "listMonth",
    events: events
  });

  calendar.render();
});

