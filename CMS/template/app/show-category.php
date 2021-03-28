<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php"));
?>

    <section class="content">
        <section class="container">
            <main class="main">
                <section class="main-crypto-mining-news">
                    <h2 class="title">Sport</h2>
                    <section class="main-news-w-50">
                        <article>
                            <img class="main-news-img" src="http://localhost/www/CMS/" alt="">
                            <h3 class="article-title">
                                <a href="http://localhost/www/CMS/show-article/1">Hello world</a>
                            </h3>
                            <ul class="info-bar">
                                <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b>Kamran,</b></a>
                                    <span class="text-muted">feb 21 2019</span></li>
                                <li><i class="fas fa-bolt text-yellow"></i> 131</li>
                                <li><i class="fas fa-comments text-yellow"></i> 12</li>
                            </ul>
                        </article>
                    </section>

                    <section class="clear-fix"></section>
                </section><!--end of main crypto mining news-->
            </main><!--end of main-->

            
            <?php
            require_once(realpath(dirname(__FILE__) . "/../app/layouts/sidebar.php"));
            ?>

            <section class="clear-fix"></section>
        </section><!--end of container-->
    </section><!--end of content-->
    </section><!--end of first app section-->





<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/footer.php"));
?>