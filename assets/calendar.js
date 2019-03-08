$(document).ready(function() {

  $('main > article > figure').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listMonth'
    },
    // defaultDate: '2018-11-12',
    navLinks: true, // can click day/week names to navigate views
    editable: false,
    minTime: "06:00:00",
    scrollTime: "09:00:00",
    slotDuration: "01:00:00",
    defaultView: "month",
    eventLimit: true, // allow "more" link when too many events
    events: events
  });

});
