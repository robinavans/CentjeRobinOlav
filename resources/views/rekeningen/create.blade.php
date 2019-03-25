@extends('layouts.app')

@section('content')

    <div class="content">

        <form method="post" action="/nieuwerekening" class="">
            {{ csrf_field() }}
        <br><a>Naam rekening:</a>
        <input type="text" name="name" placeholder="Naam rekening">
        <br><a>Je rekeningnummer:</a>
        <input type="text" name="rekeningnummer" placeholder="Rekeningnummer">
        <br><input type="submit" class="btn btn-primary" title="rekening toevoegen">
        </form>
    </div>

    @endsection