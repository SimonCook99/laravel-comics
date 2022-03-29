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

    <div class="credits">
        <div class="talent">
            <h4>Talent</h4>

            <hr>

            <div class="artist">
                <h6>Art by</h6>
                @foreach ($fumetto['artists'] as $artist)
                    <a href="#">{{$artist}}</a>
                @endforeach
            </div>

            <div class="writers">
                <h6>Written by</h6>
                @foreach ($fumetto['writers'] as $writer)
                    <a href="#">{{$writer}}</a>
                @endforeach
            </div>
        </div>

        <div class="specs">
            
        </div>
    </div>

@endsection