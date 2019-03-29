@extends('layouts.app')

@section('content')

    <div class="content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="/nieuwverzoek">
            {{ csrf_field() }}
        <br><a>Naam verzoek:</a>
        <input type="text" name="name" placeholder="Naam verzoek">
        <br><a>Een omschrijving van het verzoek:</a>
        <input type="text" name="description" placeholder="Omschrijving verzoek">
        <br><a>Bedrag van het verzoek:</a>
        <input name="amount" type="number">
            <br><a>Op rekening:</a>

            <select name="rekening">
                @foreach($rekeningen as $rekening)
                    <option value={{ $rekening->id }}>{{ $rekening->Name }}</option>
                @endforeach
            </select>
            <br><a>In de valuta:</a>
            <select name="valuta">
                <option value=EUR>Euro</option>
                <option value=USD>Dollar</option>
            </select>
            <br><a>De datum waarop dit verzoek verloopt</a>
            <input name="verloopdatum" type="date">
        <br><input type="submit" class="btn btn-primary" title="add betaalverzoek">
        </form>
    </div>

    @endsection