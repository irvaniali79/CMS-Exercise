<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>
    <div class="row mt-3">

        <div class="col-sm-6 col-lg-3">
            <a href="http://localhost/www/CMS/category" class="text-decoration-none">
                <div class="card text-white bg-gradiant-green-blue mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-clipboard-list"></i> Categories</span> <span class="badge badge-pill right"><?php echo $categoryCount['COUNT(*)']; ?></span></div>
                    <div class="card-body">
                        <section class="font-12 my-0"><i class="fas fa-clipboard-list"></i> GO TO Categories!</section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="http://localhost/www/CMS/user" class="text-decoration-none">
                <div class="card text-white bg-juicy-orange mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-users"></i> Users</span>  <span class="badge badge-pill right"><?php echo $userCount['COUNT(*)']; ?></span></div>
                    <div class="card-body">
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="fas fa-users-cog"></i> Admin <span class="badge badge-pill mx-1"><?php echo $adminCount['COUNT(*)']; ?></span></span>
                            <span class=""><i class="fas fa-user"></i> All Users <span class="badge badge-pill mx-1"><?php echo $userCount['COUNT(*)']+ $adminCount['COUNT(*)']; ?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="http://localhost/www/CMS/article" class="text-decoration-none">
                <div class="card text-white bg-dracula mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-newspaper"></i> Article</span>  <span class="badge badge-pill right"><?php echo $articleCount['COUNT(*)']; ?></span></div>
                    <div class="card-body">
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="fas fa-bolt"></i> Views <span class="badge badge-pill mx-1"><?php echo $articlesViews['SUM(view)']; ?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="http://localhost/www/CMS/comment" class="text-decoration-none">
                <div class="card text-white bg-neon-life mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-comments"></i> Comment</span>  <span class="badge badge-pill right"><?php echo $commentsCount['COUNT(*)']; ?></span></div>
                    <div class="card-body">
<!--                        <h5 class="card-title">Info card title</h5>-->
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="far fa-eye-slash"></i> Unseen <span class="badge badge-pill mx-1"><?php echo $commentsUnseenCount['COUNT(*)']; ?></span></span>
                            <span class=""><i class="far fa-check-circle"></i> Approved <span class="badge badge-pill mx-1"><?php echo $commentsApproveCount['COUNT(*)']; ?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>

    </div>


    <div class="row mt-2">
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
                Most viewed articles
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>view</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($articlesWithView as $article) {?>
                    <tr>
                        <td><a class="text-primary" href="http://localhost/www/CMS/article/show/<?php echo  $article['id'] ?>"><?php echo  $article['id'] ?></a></td>
                        <td><?php echo  $article['title'] ?></td>
                        <td><span class="badge badge-secondary"><?php echo  $article['view'] ?></span></td>
                    </tr>
                    <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
                Most commented articles
               
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($articlesComments as $article) {?>
                        <tr>
                            <td><a class="text-primary" href="http://localhost/www/CMS/article/show/<?php echo  $article['id'] ?>"><?php echo  $article['id'] ?></a></td>
                            <td><?php echo  $article['title'] ?></td>
                            <td><span class="badge badge-success"><?php echo  $article['comment_count'] ?></span></td>
                        </tr>
                        <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
                Comments
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>username</th>
                        <th>comment</th>
                        <th>status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($lastComments as $comment) {?>

                        <tr>
                            <td><a class="text-primary" href="http://localhost/www/CMS/comment/show/<?php echo  $comment['id'] ?>"><?php echo  $comment['id'] ?></a></td>
                            <td><?php echo  $comment['username'] ?></td>
                            <td><?php echo  $comment['comment'] ?></td>
                            <td><span class="badge badge-warning"><?php echo  $comment['status'] ?></span></td>
                        </tr>
                    <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>