<footer>

<div class="container-fluid footer">

    <div class="row footer-row">

        <div class="col-md-4 col-sm-12 footer-img">
            <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/tiramisu.png" ?>" alt="tiramisu">
        </div>

        <div class="col-md-8 col-sm-12 footer-info">
            <div class="opening-hours">
                <h3>Otváracie hodiny</h3>
                <p>pondelok - štvrtok 11.00 - 22.00<br>
                    piatok - sobota 11.00 - 23.00<br>
                    nedeľa 11.30 - 22.00</p>
            </div>

            <div class="address">
                <h3>Nostalgie, Restaurant - Café</h3>
                <p>Letná 49<br>
                    052 01 Spišská Nová Ves<br>
                    Slovensko</p>
            </div>

            <div class="footer-contact">
                <h3>
                    <a href="https://www.facebook.com/nostalgie.sk" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>

                    <a href="https://www.tripadvisor.com/Restaurant_Review-g274942-d1055694-Reviews-Nostalgia-Spisska_Nova_Ves_Kosice_Region.html" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2304" height="1408" viewBox="0 0 2304 1408"><path fill="currentColor" d="M651 805q0 39-27.5 66.5T558 899q-39 0-66.5-27.5T464 805q0-38 27.5-65.5T558 712q38 0 65.5 27.5T651 805zm1154-1q0 39-27.5 66.5T1711 898t-66.5-27.5T1617 804t27.5-66t66.5-27t66.5 27t27.5 66zm-1040 1q0-79-56.5-136T572 612t-136.5 56.5T379 805t56.5 136.5T572 998t136.5-56.5T765 805zm1153-1q0-80-56.5-136.5T1725 611q-79 0-136 56.5T1532 804t56.5 136.5T1725 997t136.5-56.5T1918 804zm-1068 1q0 116-81.5 197.5T572 1084q-116 0-197.5-82T293 805t82-196.5T572 527t196.5 81.5T850 805zm1154-1q0 115-81.5 196.5T1725 1082q-115 0-196.5-81.5T1447 804t81.5-196.5T1725 526q116 0 197.5 81.5T2004 804zm-964 3q0-191-135.5-326.5T578 345q-125 0-231 62T179 575.5T117 807t62 231.5T347 1207t231 62q191 0 326.5-135.5T1040 807zm668-573q-254-111-556-111q-319 0-573 110q117 0 223 45.5T984.5 401t122 183t45.5 223q0-115 43.5-219.5t118-180.5T1491 284t217-50zm479 573q0-191-135-326.5T1726 345t-326.5 135.5T1264 807t135.5 326.5T1726 1269t326-135.5T2187 807zm-266-566h383q-44 51-75 114.5T2189 470q110 151 110 337q0 156-77 288t-209 208.5t-287 76.5q-133 0-249-56t-196-155q-47 56-129 179q-11-22-53.5-82.5T1024 1168q-80 99-196.5 155.5T578 1380q-155 0-287-76.5T82 1095T5 807q0-186 110-337q-9-51-40-114.5T0 241h365Q514 141 720 84.5T1152 28q224 0 421 56t348 157z"/></svg>
                    </a>

                    <a href="https://www.instagram.com/nostalgierestaurant/" target="_blank">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                </h3>
                <p>
                    <a href = "mailto: nostalgie@nostalgie.sk">nostalgie@nostalgie.sk</a><br>
                    <a href = "mailto: rezervacie@nostalgie.sk">rezervacie@nostalgie.sk</a><br>
                    <a href="tel: +421 53 44 14 144">+421 53 44 14 144</a><br>
                    <a href="tel: +421 904 580 650">+421 904 580 650</a>
                </p>
            </div>
        </div>

        <div class="footer-img-phone">
            <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/tiramisu.png" ?>" alt="tiramisu">
        </div>
        <div class="allr">
            <p class="allrights">@2023 All Rights Reserved, Nostalgie. Created by 
                <a href="https://zuzana-gabonayova.web.app/">
                Zuzana Gabonayová
                </a>
            </p>
        </div>
    </div>



</div>

</footer>


<script>
    window.onscroll = function() { scrollFunction() };

    function scrollFunction() {
        x = document.getElementsByClassName("navbar")[0];
        if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
                x.classList.remove('not-scrolled');
                x.classList.add('scrolled');
        } else {
                x.classList.remove('scrolled');
                x.classList.add('not-scrolled');
        }
    }



</script>

<script>
    AOS.init();
</script>

<?php wp_footer(); ?>


</body>
</html>