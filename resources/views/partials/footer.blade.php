<footer>
    <!-- Footer principale che include le liste e la sezione social (in un altro componente)-->
    <div class="footer-list">
        <div class="first-section">
            <h2>DC comics</h2>

            <ul>
              <!--ciclo che scorre lungo la lista passata come parametro in App.vue-->
                <li v-for="(lista, index) in lista1" :key="index">{{lista}}</li>
            </ul>

            <h2>Shop</h2>

            <ul>
                <li v-for="(lista, index) in lista2" :key="index">{{lista}}</li>
            </ul>
        </div>

        <div class="second-section">
            <h2>DC</h2>

            <ul>
                <li v-for="(lista, index) in lista3" :key="index">{{lista}}</li>
            </ul>

        </div>

        <div class="third-section">
            <h2>Sites</h2>

            <ul>
                <li v-for="(lista,index) in lista4" :key="index">{{lista}}</li>
            </ul>
        </div>

        <img src="../assets/img/dc-logo-bg.png" alt="logo bg">    
    </div>

    <div class="bottom">
        <div class="signup">
            <button>Sign-up Now</button>
        </div>
    
        <div class="social">
            <h2>Follow us</h2>
            <img src="../assets/img/footer-facebook.png" alt="facebook">
            <img src="../assets/img/footer-twitter.png" alt="facebook">
            <img src="../assets/img/footer-youtube.png" alt="facebook">
            <img src="../assets/img/footer-pinterest.png" alt="facebook">
            <img src="../assets/img/footer-periscope.png" alt="facebook">
        </div>
    </div>
    

</footer>