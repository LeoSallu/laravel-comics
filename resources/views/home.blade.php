@extends('layouts.app')

@section('page.main')
    <div id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="logo" srcset="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-start">
                <div class="button p-3 w-25">
                    <h4 class="text-center my-1">CURRENT SERIES</h4>
                </div>        
            </div>
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($comics as $comic)
                    <div id="thumbs" class="card m-3" style="width: 18rem;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col d-flex justify-content-center">
                <div class="button my-2 p-3 w-25">
                    <p class="text-center my-1">LOAD MORE</p>
                </div>                            
            </div>
        </div>
    </div>
@endsection
