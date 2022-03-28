@php
    $lista1 = ["Characters", "Comics", "Movies", "Tv", "Games", "Videos", "News"];
    $lista2 = ["Shop DC", "Shop DC Collectibles"];
    $lista3 = ["Terms of use", "Privacy policy (New)","Ad Choices","Advertising","Jobs","Subscriptions","Talent workshops","CPSC certificates","Ratings","Shop helps","contact us"];
    $lista4 = ["DC", "Mad Magazine", "DC Kids", "DC Universe", "DC Power visa"];
@endphp

<footer>
    <!-- Footer principale che include le liste e la sezione social (in un altro componente)-->
    <div class="footer-list">
        <div class="first-section">
            <h2>DC comics</h2>

            <ul>
                
                @foreach ($lista1 as $item)
                    <li>{{$item}}</li>
                @endforeach
                
            </ul>

            <h2>Shop</h2>

            <ul>
                @foreach ($lista2 as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>

        <div class="second-section">
            <h2>DC</h2>

            <ul>
                @foreach ($lista3 as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>

        </div>

        <div class="third-section">
            <h2>Sites</h2>

            <ul>
                @foreach ($lista4 as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>

        <img src="{{asset("images/dc-logo-bg.png")}}" alt="logo bg">    
    </div>

    <div class="bottom">
        <div class="signup">
            <button>Sign-up Now</button>
        </div>
    
        <div class="social">
            <h2>Follow us</h2>
            <img src="{{asset('images/footer-facebook.png')}}" alt="facebook">
            <img src="{{asset('images/footer-twitter.png')}}" alt="twitter">
            <img src="{{asset('images/footer-youtube.png')}}" alt="youtube">
            <img src="{{asset('images/footer-pinterest.png')}}" alt="pinterest">
            <img src="{{asset('images/footer-periscope.png')}}" alt="periscope">
        </div>
    </div>
    

</footer>