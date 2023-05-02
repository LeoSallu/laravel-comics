@extends('layouts.app')

@section('page.main')
    <div id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="logo" srcset="">
    </div>
        <div class="container">
            <div class="button p-3 w-25">
                <h4>CURRENT SERIES</h4>
            </div>
        </div>
@endsection
