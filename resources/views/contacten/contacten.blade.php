@extends('layouts.app')
@extends('layouts.nav-bar')

@section('content')

    <div class="content">
        <a>{{ __('contacten.Contactcode') }} {{ $user->contactcode }}</a>
        <br><button class="button" onclick="window.location.href = '/nieuwcontact';">{{ __('contacten.Nieuw') }}</button>

        <table>
            <tr>
                <th>{{ __('contacten.Naam') }}</th>
            </tr>

            @foreach($contacten as $contact)
                <tr class="col-md-4">
                    <td>
                        <a>{{ $contact->Naamcontact }}</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

    @endsection