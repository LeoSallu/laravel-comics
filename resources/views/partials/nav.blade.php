<nav id="menu" class="p-5">
    <div class="container">
        <ul class="d-flex justify-content-around align-items-center">
            <li class="d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span class="ms-2">DIGITAL COMICS</span>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span class="ms-2">DC MERCHANDISE</span>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span class="ms-2">SUBSCRIPTIONS</span>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span class="ms-2">COMIC SHOP LOCATOR</span>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span class="ms-2">DC POWER VISA</span>
            </li>
        </ul>    
    </div>
</nav>
<div id="list-menu">
    <div class="container p-3">
        <ul id="list-menu" class="d-flex p-3">
            @foreach ($list as $array => $text)
                <li class="mx-2 d-flex flex-column align-items-start">
                    <h5 class="ms-4">{{ $array }}</h5>
                    <ul>
                        @foreach ($text as $item)
                            <li>{{ $item['linkName'] }}</li>
                        @endforeach
                    </ul>    
                </li>
            @endforeach
        </ul>    
    </div>
</div>
