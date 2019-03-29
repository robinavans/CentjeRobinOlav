@extends('layouts.app')
@section('content')
    <div class="content">
    <form method="post" action="/betalen">
        {{ csrf_field() }}
        <br><a>Verzoek van: {{$user->name}}</a>
        <br><a>Naam verzoek:</a>
        <a>{{$verzoek->name}}</a>
        <br><a>De omschrijving van het verzoek:</a>
        <a>{{$verzoek->description}}</a>
        <br><a>Tijdstip:</a>
        <a>{{$verzoek->created_at}}</a>
        <br><a>Bedrag van het verzoek:</a>
        <a>{{$verzoek->amount}}</a>
        <br><a>De valuta van het verzoek:</a>
        <a>{{$verzoek->valuta}}</a>
        <br><a>Je gaat betalen in de valuta:</a>
        <select name="valuta">
            <option value=EUR>Euro</option>
            <option value=USD>Dollar</option>
        </select>
        <br><a>Notitie(optioneel)</a>
        <input type="text" name="note" placeholder="notitie">
        <br><a>Op rekening:</a>
        <input type="hidden" name="id" value={{ $verzoek->id }}>
        <button type="submit">Naar Ideal gaan</button>
    </form>
    </div>
@endsection