@extends('layouts.app')
@extends('layouts.nav-bar')

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
                    <th>Vermogen</th>
                </tr>

                @foreach($rekeningen as $rekening)
                    <tr class="col-md-4">
                        <td>
                            <a>{{ $rekening->Name }}</a>
                        </td>
                        <td>
                            <a>{{ $rekening->vermogen }}</a> <br>
                        </td>
                        <td>
                            <form method="post" action="/deleterekening">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $rekening->id }}">
                            <button type="submit" class="btn btn-danger">
                                Verwijder rekening
                            </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                @endif
            </table>
    </div>
@endsection