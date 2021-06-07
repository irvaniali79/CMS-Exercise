<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php"));
?>

<section class="content">
    <section class="intro intro-h-600px">
        <section class="intro-row intro-h-2-3 mb-10x">
            <?php if (isset($articles[0])) { ?>
                <section class="intro-2-3-col intro-h-100 position-relative h-md-300px">
                    <a href="http://localhost/www/CMS/show-article/<?php echo $articles[0]['id'] ?>">
                        <section class="intro-2-3-item img-bg intro-h-100" style="background: url(http://localhost/www/CMS/<?php echo $articles[0]['image'] ?>) no-repeat center; background-size: cover;"></section>
                        <section class="intro-item-caption">
                            <h3 class="caption-title">
                                <span><?php echo $articles[0]['title'] ?></span>
                            </h3>
                            <ul class="caption-info-bar">
                                <li class="">by <b class="text-yellow"><?php echo $articles[0]['username'] ?>,</b><?php echo date("M d, Y", strtotime($articles[0]['created_at'])); ?></li>
                                <li><i class="fas fa-bolt text-yellow"></i><?php echo $articles[0]['view'] ?></li>
                                <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[0]['comments_count'] ?></li>
                            </ul>
                        </section>
                    </a>
                </section>
            <?php } ?>


            <section class="intro-1-3-col intro-h-100">
                <?php if (isset($articles[1])) { ?>
                    <section class="intro-1-3-item intro-h-50 position-relative h-md-300px">
                        <a href="http://localhost/www/CMS/show-article/2">
                            <section class="img-bg intro-h-100" style="background: url(http://localhost/www/CMS/<?php echo $articles[1]['image'] ?>) no-repeat center; background-size: cover;"></section>
                            <section class="intro-item-caption">
                                <h3 class="caption-title">
                                    <b><?php echo $articles[1]['title'] ?></b>
                                </h3>
                                <ul class="caption-info-bar">
                                    <li><?php echo date("M d, Y", strtotime($articles[0]['created_at'])); ?></li>
                                    <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[1]['view'] ?></li>
                                    <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[1]['comments_count'] ?></li>
                                </ul>
                            </section>
                        </a>

                    </section>
                <?php } ?>

                <?php if (isset($articles[2])) { ?>
                    <section class="intro-1-3-item intro-h-50 position-relative h-md-300px">
                        <a href="http://localhost/www/CMS/show-article/3">
                            <section class="img-bg intro-h-100" style="background: url(http://localhost/www/CMS/<?php echo $articles[2]['image'] ?>) no-repeat center; background-size: cover;"></section>
                            <section class="intro-item-caption">
                                <h3 class="caption-title">
                                    <b><?php echo $articles[2]['title'] ?></b>
                                </h3>
                                <ul class="caption-info-bar">
                                    <li><?php echo date("M d, Y", strtotime($articles[2]['created_at'])); ?></li>
                                    <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[2]['view'] ?></li>
                                    <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[2]['comments_count'] ?></li>
                                </ul>
                            </section>
                        </a>
                    </section>
                <?php } ?>

            </section>
            <section class="clear-fix"></section>
        </section>
        <section class="intro-row intro-h-1-3">

            <?php if (isset($articles[3])) { ?>
                <section class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">
                    <a href="http://localhost/www/CMS/show-article/4">
                        <section class="img-bg intro-h-100" style="background: url(http://localhost/www/CMS/<?php echo $articles[3]['image'] ?>) no-repeat center; background-size: cover;"></section>
                        <section class="intro-item-caption">
                            <h3 class="caption-title">
                                <b><?php echo $articles[3]['title'] ?></b>
                            </h3>
                            <ul class="caption-info-bar">
                                <li><?php echo date("M d, Y", strtotime($articles[2]['created_at'])); ?></li>
                                <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[3]['view'] ?></li>
                                <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[3]['comments_count'] ?></li>
                            </ul>
                        </section>
                    </a>
                </section>
            <?php } ?>

            <?php if (isset($articles[4])) { ?>
                <section class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">
                    <a href="http://localhost/www/CMS/show-article/1">
                        <section class="img-bg intro-h-100" style="background: url(http://localhost/www/CMS/<?php echo $articles[4]['image'] ?>) no-repeat center; background-size: cover;"></section>
                        <section class="intro-item-caption">
                            <h3 class="caption-title">
                                <b><?php echo $articles[4]['title'] ?></b>
                            </h3>
                            <ul class="caption-info-bar">
                                <li><?php echo date("M d, Y", strtotime($articles[4]['created_at'])); ?></li>
                                <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[3]['view'] ?></li>
                                <li><i class="fas fa-comments text-yellow"></i> <?php echo $articles[3]['comments_count'] ?></li>
                            </ul>
                        </section>
                    </a>
                </section>
            <?php } ?>

            <?php if (isset($articles[5])) { ?>
                <section class="intro-1-3-col-item intro-h-100 position-relative h-md-300px">
                    <a href="http://localhost/www/CMS/show-article/5">
                        <section class="img-bg intro-h-100" style="background: url(http://localhost/www/CMS/<?php echo $articles[5]['image'] ?>) no-repeat center; background-size: cover;"></section>
                        <section class="intro-item-caption">
                            <h3 class="caption-title">
                                <b><?php echo $articles[5]['title'] ?></b>
                            </h3>
                            <ul class="caption-info-bar">
                                <li><?php echo date("M d, Y", strtotime($articles[5]['created_at'])); ?></li>
                                <li><i class="fas fa-bolt text-yellow"></i> <?php echo $articles[5]['view'] ?></li>
                                <li><i class="fas fa-comments text-yellow"></i><?php echo $articles[5]['comments_count'] ?></li>
                            </ul>
                        </section>
                    </a>
                </section>
            <?php } ?>
            <section class="clear-fix"></section>
        </section>
    </section>
    <!--end of intro-->
    <section class="container">
        <main class="main">

            <section class="main-crypto-mining-news">
                <h2 class="title">POPULAR POSTS</h2>
                <?php foreach ($popularAriticles as $article){?>
                <section class="main-news-w-50">
                    <article>
                        <img class="main-news-img" src="http://localhost/www/CMS/<?php echo $article['image'] ?>" alt="">
                        <h3 class="article-title">
                            <a href="http://localhost/www/CMS/show-article/<?php echo $article['id'] ?>"><?php echo $article['title'] ?></a>
                        </h3>
                        <ul class="info-bar">
                            <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b><?php echo $article['username'] ?> ,</b></a>
                                <span class="text-muted"><?php echo date("M d, Y", strtotime($article['created_at'])); ?></span>
                            </li>
                            <li><i class="fas fa-bolt text-yellow"></i> <?php echo $article['view'] ?></li>
                            <li><i class="fas fa-comments text-yellow"></i><?php echo $article['comments_count'] ?></li>
                        </ul>
                    </article>
                </section>
                <?php } ?>

                <section class="clear-fix"></section>
            </section>
            <!--end of main crypto mining news-->
        </main>
        <!--end of main-->


        <?php
        require_once(realpath(dirname(__FILE__) . "/../app/layouts/sidebar.php"));
        ?>

        <section class="clear-fix"></section>
    </section>
    <!--end of container-->
</section>
<!--end of content-->
</section>
<!--end of first app section-->





<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/footer.php"));
?>