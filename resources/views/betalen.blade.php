@extends('layouts.app')
<hmtl>
    <table>
        <tr>
            <th>Naam</th>
            <th>Omschrijving</th>
            <th>Bedrag</th>
        </tr>
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
        <button>Betalen</button>
    </td>
</tr>
</hmtl>