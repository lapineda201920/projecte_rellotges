@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" id="app">
                <passport-authorized-clients></passport-authorized-clients>
                <passport-clients></passport-clients>
                <passport-personal-access-tokens></passport-personal-access-tokens>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
@endsection
