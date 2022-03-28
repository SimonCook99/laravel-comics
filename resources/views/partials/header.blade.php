@php
    $listaHeader = ["Characters", "Comics", "Movies", "Tv", "Games", "Collectibles", "Videos", "Fans", "News", "Shop"];
@endphp

<div class="top">
    <p>DC power visa</p>
    <p>Additional DC sites</p>
</div>

<header>
    
    <img src="{{asset("images/dc-logo.png")}}"  alt="dc-logo">

    <nav>
        <ul>
            @foreach ($listaHeader as $item)
                <li>{{$item}}</li>  
            @endforeach
            
        </ul>
    </nav>
</header>