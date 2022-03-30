@extends('layouts.base')

@section('title', "dettaglio fumetto")

@section('main-content')

    <section class="jumbotron">
        <div></div>
    </section>
    

    <div class="content">

        <div class="left-content">
            <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">

            <h1>{{$fumetto['title']}}</h1>

            <div class="buyDetails">
                <span>U.S.Price: {{$fumetto['price']}}</span>

                <div class="availabilty">
                    <span>Available</span>
                    <select>
                        <option value="">Check availability</option>
                    </select>
                </div>
                
            </div>

            <p>{{$fumetto['description']}}</p>
        </div>

        <div class="right-content">
            <img src="{{asset('images/adv.jpg')}}" alt="pubblicità">
        </div>
    </div>

    <div class="background">
        <div class="credits">
            <div class="talent">
                <h4>Talent</h4>
    
                <hr>
    
                <div class="artist">
                    <h5>Art by</h5>
                    @foreach ($fumetto['artists'] as $artist)
                        <a href="#">{{$artist}}</a>
                    @endforeach
    
                    <hr>
                </div>
    
                <div class="writers">
                    <h5>Written by</h5>
                    @foreach ($fumetto['writers'] as $writer)
                        <a href="#">{{$writer}}</a>
                    @endforeach
    
                    <hr>
                </div>
            </div>
    
            <div class="specs">
                <h4>Specs</h4>
                <hr>
    
                <div class="series">
                    <h5>Series</h5>
                    <a href="#" style="text-transform: uppercase">{{$fumetto['series']}}</a>
                </div>
                <hr>
    
                <div class="price">
                    <h5>U.S Price</h5>
                    <h5>{{$fumetto['price']}}</h5>
                </div>
                <hr>
    
                <div class="date">
                    <h5>On sale Date</h5>
                    <h5>{{$fumetto['sale_date']}}</h5>
                </div>
                <hr>
            </div>
        </div>
        
        <nav>
            <ul>
                <li>
                    <img src="{{asset("images/buy-comics-digital-comics.png") }}" alt="digital comics">
                    <p>digital comics</p>
                </li>
                <li>
                    <img src="{{asset("images/buy-comics-merchandise.png") }}" alt="merchandise">
                    <p>DC merchandise</p>
                </li>
                <li>
                    <img src="{{asset("images/buy-comics-subscriptions.png") }}" alt="subscriptions">
                    <p>Subscription</p>
                </li>
                <li>
                    <img src="{{asset("images/buy-comics-shop-locator.png") }}" alt="shop locator">
                    <p>comic shop locator</p>
                </li>
                <li>
                    <img src="{{asset("images/buy-dc-power-visa.svg") }}" alt="dc power visa">
                    <p>DC power visa</p>
                </li>
            </ul>
        </nav>
    </div>
    

@endsection