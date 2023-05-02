@extends('layouts.app')

@section('page.main')
    <section>
        <div class="container">
            <div class="row">
                <div class="d-flex flex-wrap justify-content-center">
                    @foreach ($comics as $comic)
                        <div id="thumbs" class="card m-3" style="width: 18rem;">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                                <p class="card-text">{{ Str::limit($comic['description'], $limit = 100, $end = '...')}}</p>
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
    </section>
@endsection
