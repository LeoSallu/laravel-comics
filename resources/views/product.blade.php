@extends('layouts.app')

@section('page.main')
    <section>
        <div class="container">
            <ul>
                @foreach ($comics as $comic)
                    <li>{{ $comic['title'] }}</li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
