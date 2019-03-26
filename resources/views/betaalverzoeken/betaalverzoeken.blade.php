@extends('layouts.app')

@section('content')

    <div class="content">

        <button class="button" onclick="window.location.href = '/nieuwverzoek';">Nieuw betaalverzoek</button>

    @if(count($verzoeken) <= 0)
        <div>
            <a>Je hebt nog geen betaalverzoeken</a>
        </div>

    @else
    <table>
        <tr>
            <th>Naam</th>
            <th>Omschrijving</th>
            <th>Bedrag</th>
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
                    <a>{{ $verzoek->amount }} </a> <br>
            </td>
            <td>
                <button>Betaalverzoek delen</button>
            </td>
            @if($verzoek->amountpaid <= 0)
                <td>
                    <form method="post" action="/deleteverzoek">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $verzoek->id }}">
                        <button type="submit" class="btn btn-danger">
                            Verwijder verzoek
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