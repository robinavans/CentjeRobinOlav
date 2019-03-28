@extends('layouts.app')

@section('content')

    <div class="content">

        <button class="button" onclick="window.location.href = '/createrekening';">{{ __('rekeningen.Nieuw') }}</button>

        @if(count($rekeningen) <= 0)
            <div>
                <a>{{ __('rekeningen.Leeg') }}</a>
            </div>

        @else
            <table>
                <tr>
                    <th>{{ __('rekeningen.Naam') }}</th>
                    <th>{{ __('rekeningen.Rekeningnummer') }}</th>
                    <th>{{ __('rekeningen.Vermogen') }}</th>
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
                            <a>{{ $rekening->vermogen }}</a> <br>
                        </td>
                        <td>
                            <form method="post" action="/deleterekening">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $rekening->id }}">
                            <button type="submit" class="btn btn-danger">
                                {{ __('rekeningen.Verwijderen') }}
                            </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                @endif
            </table>
    </div>
@endsection