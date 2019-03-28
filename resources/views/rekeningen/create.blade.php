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
        <br><a>{{ __('rekeningen.Naam') }}</a>
        <input type="text" name="name" placeholder="{{ __('rekeningen.Naam') }}" data-validate = "{{ __('rekeningen.NaamVerplicht') }}">
        <br><a>{{ __('rekeningen.Rekeningnummer') }}</a>
        <input type="text" name="rekeningnummer" placeholder="{{ __('rekeningen.Rekeningnummer') }}" data-validate = "{{ __('rekeningen.RekeningnummerVerplicht') }}">
        <br><input type="submit" class="btn btn-primary" title="rekening toevoegen" value="{{ __('rekeningen.Verzenden') }}">
        </form>
    </div>

    @endsection