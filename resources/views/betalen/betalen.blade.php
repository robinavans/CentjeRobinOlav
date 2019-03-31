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
    <form method="post" action="/betalen">
        {{ csrf_field() }}
        <br><a>{{  __('betalingen.Van') }}: {{$user->name}}</a>
        <br><a>{{  __('betalingen.Naam') }}:</a>
        <a>{{$verzoek->name}}</a>
        <br><a>{{  __('betalingen.Omschrijving') }}:</a>
        <a>{{$verzoek->description}}</a>
        <br><a>{{  __('betalingen.Tijdstip') }}:</a>
        <a>{{$verzoek->created_at}}</a>
        <br><a>{{  __('betalingen.Bedrag') }}:</a>
        <a>{{$verzoek->amount}}</a>
        <br><a>{{  __('betalingen.Valuta') }}:</a>
        <a>{{$verzoek->valuta}}</a>
        <br><a>{{  __('betalingen.datum') }}</a>
        <input type="date" name="date" placeholder="datum">
        <br><a>{{  __('betalingen.Notitie') }}:</a>
        <input type="text" name="note" placeholder="{{ __('betalingen.Notitie') }}">
        <br><a>{{  __('betalingen.Rekening') }}:</a>
        <input type="hidden" name="id" value={{ $verzoek->id }}>
        <button type="submit">{{ __('betalingen.Ideal') }}</button>
    </form>
    </div>
@endsection
