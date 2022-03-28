<header>
    <img src="{{asset("images/dc-logo.png")}}"  alt="dc-logo">

    <nav>
        <ul>

            <li></li>
            <!--ciclo che scorre lungo la lista passata come parametro in App.vue-->
            <li v-for="(item,index) in lista" :key="index">{{item}}</li>
        </ul>
    </nav>
</header>