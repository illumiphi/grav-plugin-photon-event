$(document).ready(function() {

  $('main > article > figure').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listMonth'
    },
    businessHours: {
      // days of week. an array of zero-based day of week integers (0=Sunday)
      dow: [ 0, 1, 2, 5, 6 ], // Monday - Thursday

      start: '16:00', // a start time (10am in this example)
      end: '20:30', // an end time (6pm in this example)
    },
    // defaultDate: '2018-11-12',
    navLinks: true, // can click day/week names to navigate views
    editable: false,
    minTime: "09:00:00",
    scrollTime: "23:00:00",
    slotDuration: "01:00:00",
    defaultView: "month",
    eventLimit: true, // allow "more" link when too many events
    events: events
  });

});
