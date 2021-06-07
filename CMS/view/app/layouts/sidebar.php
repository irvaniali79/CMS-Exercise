<aside class="sidebar">
    <section class="sidebar-item">
        <ul class="sidebar-list">
            <?php foreach ($categories as $category) { ?>
                <li><a href="http://localhost/www/CMS/show-category/<?php echo $category['id'] ?>"><b><?php echo $category['name'] ?></b></a></li>
            <?php } ?>
        </ul>
    </section>
    <section class="sidebar-item">
        <h2 class="title">POPULAR POSTS</h2>

        <?php foreach ($sidebarPopularArticles as $sidebarPopularArticle) { ?>
            <section class="popular-post">
                <img class="popular-post-img" src="<?php echo $sidebarPopularArticle['image'] ?>" alt="">
                <section class="popular-post-title">

                    <h3>
                        <a href="http://localhost/www/CMS/show-article/<?php echo $sidebarPopularArticle['id'] ?>"><b><?php echo $sidebarPopularArticle['title'] ?></b></a>
                    </h3>
                    <ul class="info-bar">
                        <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b><?php echo $sidebarPopularArticle['username'] ?></b></a>
                            <span class="text-muted"><?php echo date("M d, Y",strtotime($sidebarPopularArticle['created_at']));?></span>
                        </li>
                    </ul>

                </section>
                <section class="clear-fix"></section>
            </section>
        <?php } ?>
    </section>


</aside>
<!--end of sidebar-->