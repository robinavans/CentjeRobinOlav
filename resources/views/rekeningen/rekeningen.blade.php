@extends('layouts.app')

@section('content')

    <div class="content">

        <button class="button" onclick="window.location.href = '/createrekening';">Nieuwe Rekening toevoegen</button>

        @if(count($rekeningen) <= 0)
            <div>
                <a>Je hebt nog geen rekening gemaakt!</a>
            </div>

        @else
            <table>
                <tr>
                    <th>Naam</th>
                    <th>Rekeningnummer</th>
                    <th>Vermogen</th>
                </tr>

                @foreach($rekeningen as $rekening)
                    <tr class="col-md-4">
                        <td>
                            <a>{{ $rekening->Name }}</a>
                        </td>
                        <td>
                            <a>{{ $rekening->rekeningnummer }}</a>
                        </td>
                        <td>
                            {{ $rekening->vermogen }} <br>
                        </td>
                        </a>
                    </tr>
                @endforeach
                @endif
            </table>
    </div>
@endsection