@extends('layouts.app')

@section('page.main')
<!--Single Comic Info -->
    <section id="light-bg" class="d-flex justify-content-center flex-column">
        <!-- Jumbotron -->
        <div id="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="logo" srcset="">
        </div>    
        <!-- /Jumbotron -->
        <div class="container d-flex">
            <!--Card-element-->
            <div id="comic-container" class="container">
                <div>
                    <img id="comic-info" src="{{ $comics['thumb'] }}" alt="...">
                </div>
                <h2>{{ $comics['title'] }}</h2>
                <div class="d-flex bg-success justify-content-between align-items-center text-light p-2">
                    <div class="d-flex p-2">
                        <p class="mx-2">U.S. Price: <span>{{ $comics['price'] }}</span></p>
                        <p class="mx-2">AVAILABLE</p>
                    </div>
                    <div class="border-start border-dark">
                        <p class="mx-2">Check Availability</p>
                    </div>
                </div>
                <p>{{ $comics['description'] }}</p>
            </div>
            <!--/ Card-element-->
            <!--Adv-->
            <div id="adv">
                <h6>ADVERTISMENT</h6>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv" srcset="">
            </div>
            <!--/Adv-->
        </div>
        <!--Credits-->
        <div id="bg-gray" class="d-flex p-4 justify-content-center">
            <div class="d-flex justify-content-center align-items-center flex-column ">
                <h4>Talent</h4>
                <hr>
                <p>Art by <span class="text-primary">{{ implode(', ', $comics['artists']) }}</span></p>
                <hr>
                <p>Written by <span class="text-primary">{{ implode(', ', $comics['writers']) }}</span></p>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column ">
                <h4>Specs</h4>
                <p>Series:<span class="text-primary">{{ $comics['series'] }}</span></p>
                <p>U.S. Price: <span> {{ $comics['price'] }}</p>
                <p>On Sale Date: <span> {{ $comics['sale_date'] }}</p>
            </div>
        </div>
        <!--/Credits-->
    </section>
<!--/Single Comic Info -->
@endsection
