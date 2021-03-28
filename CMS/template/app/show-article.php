<?php
require_once(realpath(dirname(__FILE__) . "/../app/layouts/head-tag.php"));
?>

    <section class="content">

        <section class="container">
            <main class="main">
                <section class="main-news">
                    <h2 class="title">Hello world</h2>
                    <article>

                        <img class="main-news-img" src="http://localhost/www/CMS/1" alt="">
                        <h3 class="article-title">
                            <a href="http://localhost/www/CMS/show-article/1">Hello World</a>
                        </h3>
                        <ul class="info-bar">
                            <li class=""><span class="text-muted">by</span> <a href="#" class="color-black"><b>Kamran,</b></a>
                                <span class="text-muted"> feb 19 2019</span></li>
                            <li><i class="fas fa-bolt text-yellow"></i> 128</li>
                            <li><i class="fas fa-comments text-yellow"></i> 34</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur atque consectetur dicta dolores dolorum eligendi esse fuga fugit impedit incidunt inventore maxime, nam necessitatibus nesciunt officiis provident qui quo quos ratione recusandae reprehenderit rerum sapiente sed sequi suscipit, tempora veritatis! Dignissimos distinctio exercitationem id officia officiis pariatur provident sunt voluptas voluptatibus, voluptatum! Ad aut beatae eaque ipsa necessitatibus pariatur quo saepe totam? Alias beatae corporis nesciunt non quam. Alias animi, corporis cupiditate debitis, dolor eligendi eum ex facilis ipsa iusto magni modi, nihil optio quas qui rem similique vitae voluptates?</p>

                        <p class="footer-p-margin-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores consequatur culpa cum cumque dolorem doloribus dolorum, ducimus enim fugiat modi natus nulla quia quod reiciendis rem ullam, velit veritatis vitae voluptas! Blanditiis cumque fugiat hic iure labore magnam quia quis velit. Adipisci architecto asperiores assumenda, beatae consequuntur corporis dolore ducimus est explicabo facilis fugit illum iure labore laboriosam molestiae molestias neque nobis placeat quae quas quod quos repellat saepe sed temporibus tenetur ut voluptas. Doloribus earum id officiis optio quasi. Ad aperiam aut blanditiis, dolore dolorem dolorum et expedita explicabo fugiat ipsa labore laboriosam, laborum laudantium natus nihil porro provident similique temporibus ut velit. Accusantium beatae ducimus facere fugit itaque maiores neque nesciunt nihil perferendis provident ratione repudiandae, tenetur voluptas? Eos, neque, similique? Dolores exercitationem, nesciunt! Aliquam aliquid aspernatur delectus dolore doloribus earum eos error esse, et expedita illum maiores necessitatibus, placeat, quos reprehenderit totam voluptate. Consequatur, debitis ipsa laboriosam maiores minus quibusdam. Ab commodi, dolore eius et excepturi omnis quis temporibus veniam voluptates voluptatum. Distinctio dolorem, ex. Ab atque beatae consectetur dolorum, enim error ex fugit incidunt ipsam magni necessitatibus non nostrum optio porro provident quam quia quis quo similique ut vero voluptate voluptates? Ad blanditiis eius ex exercitationem, laboriosam modi placeat? Ad aliquid amet aperiam asperiores atque culpa distinctio dolores dolorum fugit hic illum inventore iste laborum maiores minus nesciunt perferendis porro quas, quidem sint temporibus veritatis vero voluptatibus? Ad assumenda delectus laborum laudantium mollitia possimus sapiente similique tempore. A aliquid animi consectetur corporis cupiditate delectus deserunt doloremque eaque eos et excepturi fugiat harum hic ipsa maiores, nisi porro quam qui sequi sint sit tenetur ut vitae voluptatibus voluptatum. Molestias, quo, voluptates! Accusamus consequatur deserunt dicta neque, obcaecati possimus praesentium quod? Ab animi, asperiores at distinctio error id perferendis porro, quae quasi qui quia sequi veritatis voluptas.</p>

                    </article>


                        <section class="comment-box">
                            <h3 class="comment-box-header">
                                <span class="comment-box-date">feb 20 2019</span>
                            </h3>
                            <comment>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem, eum itaque nam officiis perspiciatis quas qui quibusdam, temporibus ullam unde veritatis vero voluptatum.
                            </comment>
                        </section>

                    <form action="http://localhost/www/CMS/comment-store" method="post">
                            <input name="article_id" type="hidden" value="1">
                        <textarea class="comment" name="comment" rows="4" required placeholder="your comment ..."></textarea>
                        <input class="submit" type="submit" value="store comment">
                    </form>

                </section><!--end of main news-->


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