@extends('layouts.app')
@section('content')
    <form method="post" action="/betalen">
        {{ csrf_field() }}
        <br><a>Naam verzoek:</a>
        <a>{{$verzoek->name}}</a>
        <br><a>De omschrijving van het verzoek:</a>
        <a>{{$verzoek->description}}</a>
        <br><a>Bedrag van het verzoek:</a>
        <a>{{$verzoek->amount}}</a>
        <br><a>Op rekening:</a>
        <button type="submit">Betalen</button>
    </form>
@endsection