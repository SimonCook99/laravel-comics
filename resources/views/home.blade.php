@extends("layouts.base");

@section("title", "home");

@section("main-content")
    <section class="jumbotron">

    </section>

    <main>
        <h2>Current series</h2>
  
        @foreach ($fumetti as $fumetto)
            <div class="card">
                <img src="{{$fumetto.thumb}}" alt="{{$fumetto.type}}">
                <p>{{$fumetto.series}}</p>
            </div>   
        @endforeach
        
        <h3>load more</h3>


        <section class="buy-section">

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
      
        </section>
    </main>
@endsection
