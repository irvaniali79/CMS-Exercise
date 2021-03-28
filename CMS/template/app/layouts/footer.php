<footer class="footer">
    <section class="app bg-map">
        <section class="footer-row">
            <section class="footer-col">
                <img class="footer-logo" src="http://localhost/www/CMS/public/setting/logo.png" alt="">
                <section class="clear-fix"></section>
                <p class="footer-p">Bit coin is an open-source, peer-to-peer, digital decentralized cryptocurrency.
                    Powered by blockchain technology, its defining characteristic is</p>
                <p class="footer-p footer-p-margin-20">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright 2019 All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </section>
            
            <section class="footer-col">
                <h3 class="footer-section-title">MOST POPULAR</h3>
                <?php for ($i = 0; $i < 2; $i += 1) { ?>
                    <?php if (isset($popularAriticles[$i])) { ?>
                        <section class="footer-section-link-item">
                            <a href="http://localhost/www/CMS/show-article/<?php echo $popularAriticles[$i]['id'] ?>"><?php echo $popularAriticles[$i]['title'] ?></a>
                            <p><?php echo date("M d, Y",strtotime($popularAriticles[$i]['created_at']));?></p>
                        </section>
                        <section class="footer-line"></section>
                <?php }
                } ?>

            </section>

            <section class="footer-col">
                <h3 class="footer-section-title">MOST POPULAR</h3>
                <?php for ($i = 2; $i < 4; $i += 1) { ?>
                    <?php if (isset($popularAriticles[$i])) { ?>
                        <section class="footer-section-link-item">
                            <a href="http://localhost/www/CMS/show-article/<?php echo $popularAriticles[$i]['id'] ?>"><?php echo $popularAriticles[$i]['title'] ?></a>
                            <p><?php echo date("M d, Y",strtotime($popularAriticles[$i]['created_at']));?></p>
                        </section>
                        <section class="footer-line"></section>
                <?php }
                } ?>
            </section>

            <section class="clear-fix"></section>
        </section>
        <section class="footer-line"></section>
        <section class="footer-row">
            <ul class="footer-menu">
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy policy</a></li>
                <li><a href="">Jobs advertising</a></li>
                <li><a href="">Contact us</a></li>
            </ul>
            <ul class="footer-social-network">
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-bitcoin"></i></a></li>
            </ul>
            <section class="clear-fix"></section>
        </section>
    </section>
    <!--end of second app section-->
    <section class="clear-fix"></section>
</footer>
<!--end of footer-->

<script type="text/javascript">
    function showMenu() {
        var x = document.getElementById("menu");
        if (x.className === "header-menu") {
            x.className += " show";
            console.log(1);
        } else {
            x.className = "header-menu";
            console.log(0);
        }
    }
</script>

</body>

</html>