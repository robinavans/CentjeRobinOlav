@extends('layouts.app')
@section('content')

    <div class="content">
        <a>Jouw contactcode is: {{ $user->contactcode }}</a>
        <br><button class="button" onclick="window.location.href = '/nieuwcontact';">Nieuw contact</button>

        <table>
            <tr>
                <th>Naam</th>
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