$(document).ready(function() {

  $('main > article > figure').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    // defaultDate: '2018-11-12',
    navLinks: true, // can click day/week names to navigate views
    editable: false,
    eventLimit: true, // allow "more" link when too many events
    events: events
  });

});
