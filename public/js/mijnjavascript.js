function getData()
{
    $.ajax({
        method: 'get',
        url: '/getData',
        success: function (response) {
            console.log(response);
            for (var i = 0; i < response.length; i++) {
                $('#calendar').fullCalendar('renderEvent', {
                    title: response[i].Notities,
                    start: response[i].Datum,
                    allDay: true
                });
            }
        }
    });
}