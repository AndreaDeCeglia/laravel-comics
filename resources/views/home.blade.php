@extends('layouts.app')

@section('main')
    <div class="comics-section">
        <div class="container py-5">
            <div class="d-flex flex-wrap">
                @foreach ($comics as $elem)
                    <div class="card-container d-flex flex-column">
                        <div>
                            <img class="image-comic" src="{{ $elem['thumb'] }}" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            {{ $elem['title'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
    
    <div class="container-icons-blue bg-primary">
        <div class="icons-blue w-75 m-auto d-flex p-4">
            <div>
                <a href="" class="d-flex p-3">
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    <h4>DIGITAL COMICS</h4>
                </a>
            </div>
            <div>
                <a href="" class="d-flex p-3"> 
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    <h4>DC MERCHANDISE</h4>
                </a>
            </div>
            <div>
                <a href="" class="d-flex p-3">
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    <h4>SUBSCRIPTION</h4>
                </a>
            </div>
            <div>
                <a href="" class="d-flex p-3">
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    <h4>COMIC SHOP LOCATION</h4>
                </a>
            </div>
            <div>
                <a href="" class="d-flex p-3">
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    <h4>DC POWER VISA</h4>
                </a>
            </div>
        </div>

    </div>
@endsection