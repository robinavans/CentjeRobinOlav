@extends('layouts.app')
@extends('layouts.nav-bar')
@section('content')

    <div class="content">

        <button class="button" onclick="window.location.href = '/nieuwverzoek';">{{ __('betaalverzoeken.Nieuw') }}</button>

    @if(count($verzoeken) <= 0)
        <div>
            <a>{{ __('betaalverzoeken.Leeg') }}</a>
        </div>

    @else
    <table>
        <tr>
            <th>{{ __('betaalverzoeken.Naam') }}</th>
            <th>{{ __('betaalverzoeken.Omschrijving') }}</th>
            <th>{{ __('betaalverzoeken.Bedrag') }}</th>
            <th>{{ __('betaalverzoeken.Link') }}</th>
            <th>Verloopdatum</th>
        </tr>

        @foreach($verzoeken as $verzoek)
        <tr class="col-md-4">
            <td>
                <a>{{ $verzoek->name }}</a>
            </td>
            <td>
                    <a>{{ $verzoek->description }}</a>
            </td>
            <td>
                    <a>{{ $verzoek->amount ." ". $verzoek->valuta }} </a> <br>
            </td>
            <td>
                <a>{{'http://centje.localhost/betalen/'. $verzoek->id}}</a>
            </td>
            <td>
                <a>{{ $verzoek->verloopdatum }}</a>
            </td>
            @if($verzoek->amountpaid <= 0)
                <td>
                    <form method="post" action="/deleteverzoek">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $verzoek->id }}">
                        <button type="submit" class="btn btn-danger">
                            {{ __('betaalverzoeken.Verwijderen') }}
                        </button>
                    </form>
                </td>

                @endif
        </tr>
        @endforeach
            @endif
    </table>
</div>
    @endsection
