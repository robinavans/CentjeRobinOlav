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
                    {{ $verzoek->amount }} <br>
            </td>
            </a>
        </tr>
        @endforeach
            @endif
    </table>
</div>
    @endsection