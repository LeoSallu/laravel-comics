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
            <div id="adv" class="d-flex flex-column align-items-end">
                <h6>ADVERTISMENT</h6>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv" srcset="">
            </div>
            <!--/Adv-->
        </div>
        <!--Credits-->
        <div id="bg-gray" class="d-flex p-4 justify-content-center">
            <div class="container d-flex">
                <div class="w-75 mx-2">
                    <h4>Talent</h4>
                    <hr>
                    <p>Art by: 
                        <span class="text-primary mx-2">{{ implode(', ', $comics['artists']) }}</span>
                    </p>
                    <hr>
                    <p>Written by: 
                        <span class="text-primary mx-2">{{ implode(', ', $comics['writers']) }}</span>
                    </p>
                    <hr>
                </div>
                <div class="w-25">
                    <h4>Specs</h4>
                    <hr>
                    <p>Series:<span class="text-primary mx-2">{{ $comics['series'] }}</span></p>
                    <hr>
                    <p>U.S. Price:<span class="mx-2">{{ $comics['price'] }}</p>
                    <hr>
                    <p>On Sale Date: <span class="mx-2"> {{ $comics['sale_date'] }}</p>
                    <hr>
                </div>
            </div>
        </div>
        <!--/Credits-->
    </section>
    <!--/Single Comic Info -->
@endsection
