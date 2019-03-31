function getData()
{
    $.ajax({
        method: 'get',
        url: '/getData',
        success: function (response)
        {
            $('#calendar').fullCalendar('renderEvent', {
                title: response[i].Notities,
                start: response[i].Datum,
                allDay: true
            });
        }
    });
        // Response is nu een array van sentjes in javascript
        // Hieronder kun je de kalender aanpassen via javascript
}
