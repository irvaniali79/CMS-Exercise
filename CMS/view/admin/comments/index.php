<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5 "><i class="fas fa-newspaper"></i> Comments</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a role="button" href="#" class="btn btn-sm btn-success disabled">create</a>
    </div>
</div>
<section class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>List of comments</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>user ID</th>
                <th>article ID</th>
                <th>comment</th>
                <th>status</th>
                <th>setting</th>
            </tr>
        </thead>
        <tbody>
        <?php  $i=0?>
            <?php foreach ($comments as $comment) { $i++; ?>
                <tr>
                    <td><a href="http://localhost/www/CMS/comment/show/<?php echo $comment['id'] ?>"><?php echo $i?></a></td>
                    <td><?php echo $comment['user_id'] ?></td>
                    <td><?php echo $comment['article_id'] ?></td>
                    <td><?php echo $comment['comment'] ?></td>
                    <td><?php echo $comment['status'] ?></td>
                    <td>
                        <a role="button" class="btn btn-sm btn-success  text-white" href="http://localhost/www/CMS/comment/approve/<?php echo $comment['id']?>">click to not approved</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>
<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>