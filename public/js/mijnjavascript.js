function getData()
{
    $.ajax({
        method: 'get',
        url: '/getData',
        success: function (response) {
            console.log(response);
            for (var i=0; i<response.length; i++) {
                $('#calendar').fullCalendar('renderEvent', {
                    title: response[i].Notities,
                    start: response[i].Datum,
                    allDay: true
                });
            }},


        // Response is nu een array van sentjes in javascript
        // Hieronder kun je de kalender aanpassen via javascript
        error: function (response) {
            alert(response);
        }
    });

    $.ajax({
        method: 'post',
        url: '/sentjes/createbankaccount',
        data: data,
        success: function (response) {
            document.location.href = '/sentjes';
        },
        error: function (response) {
            $('#error').text(response.responseText);
        }
    })
}
