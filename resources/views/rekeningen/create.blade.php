@extends('layouts.app')

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
        <form method="post" action="/nieuwerekening" class="">
            {{ csrf_field() }}
        <br><a>Naam rekening:</a>
        <input type="text" name="name" placeholder="Naam rekening" data-validate = "Een naam van de rekening is verplicht!">
        <br><a>Je rekeningnummer:</a>
        <input type="text" name="rekeningnummer" placeholder="Rekeningnummer" data-validate = "Een rekeningnummer is verplicht!">
        <br><input type="submit" class="btn btn-primary" title="rekening toevoegen">
        </form>
    </div>

    @endsection