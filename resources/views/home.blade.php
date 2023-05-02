@extends('layouts.app')

@section('page.main')
    <div id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="logo" srcset="">
    </div>
    <div class="background">
        <div class="container">
            <div class="button p-3">
                <h4>CURRENT SERIES</h4>
            </div>
            <div class="thumbs">
                
            </div>
            <div class="button p-3">
                <h4>LOAD MORE</h4>
            </div>
        </div>
    </div>
@endsection
