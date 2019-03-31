@extends('layouts.app')
@extends('layouts.nav-bar')
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale-all.js"></script>
    <script src='/js/mijnjavascript.js'></script>
<script>
    $( document ).ready(function() {
        @if(Request::url()!=='/kalender')
        $('#calendar').fullCalendar({
            locale: 'nl',
            height:1000
        });
            @else{
            $('#calendar').fullCalendar({
                locale:'en',
                height:1000,
            })
        }
        @endif



    });
</script>
@endsection
@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" type="text/css" rel="stylesheet"/>
@endsection

@section('content')
    <div id="calendar">
    </div>
<script>getData()
</script>

    @endsection

