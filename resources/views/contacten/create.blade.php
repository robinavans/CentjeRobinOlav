@extends('layouts.app')
@extends('layouts.nav-bar')

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
        <form method="post" action="/nieuwcontact">
            {{ csrf_field() }}
            <a>{{ __('contacten.Contactcode') }} </a><input type="text" name="contactcode" placeholder="contactcode">
            <br><a>{{ __('contacten.Naam') }} </a><input type="text" name="contactname">
        <br><button class="btn btn-primary"  onclick="window.location.href = '/nieuwcontact';">{{ __('contacten.Add') }}</button>

        </form>
    </div>

@endsection