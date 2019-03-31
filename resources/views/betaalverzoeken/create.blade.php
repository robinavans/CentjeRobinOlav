@extends('layouts.app')
@extends('layouts.nav-bar')

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
        <br><a>{{ __('betaalverzoeken.Naam') }}</a>
        <input type="text" name="name" placeholder="{{ __('betaalverzoeken.Naam') }}">
        <br><a>{{ __('betaalverzoeken.Omschrijving') }}</a>
        <input type="text" name="description" placeholder="{{ __('betaalverzoeken.Omschrijving') }}">
        <br><a>{{ __('betaalverzoeken.Bedrag') }}</a>
        <input name="amount" type="number">
            <br><a>{{ __('betaalverzoeken.Rekening') }}</a>

            <select name="rekening">
                @foreach($rekeningen as $rekening)
                    <option value={{ $rekening->id }}>{{ $rekening->Name }}</option>
                @endforeach
            </select>
            <br><a>{{ __('betaalverzoeken.Valuta') }}</a>
            <select name="valuta">
                <option value=EUR>Euro</option>
                <option value=USD>Dollar</option>
            </select>
            <br><a>De datum waarop dit verzoek verloopt</a>
            <input name="verloopdatum" type="date">
            <br><input type="submit" class="btn btn-primary" value="{{ __('betaalverzoeken.Verzenden') }}" title="add betaalverzoek">
        </form>
    </div>

    @endsection
