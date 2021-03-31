<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>
    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Show Comment</h1>
    </section>
<section class="row my-3"> 
    <section class="col-12">
        <h1 class="h4 border-bottom"><?php $id ?></h1>
        <p class="text-secondary border-bottom"><?php echo $comment['user_id'] ?></p>
        <p class="text-secondary border-bottom"><?php echo $comment['article_id'] ?></p>
        <p class="text-secondary border-bottom"><?php echo $comment['comment'] ?></p>
        <p class="text-secondary border-bottom"><?php echo $comment['status'] ?></p>
        <p class="text-secondary border-bottom"><?php echo date("M d, Y",strtotime($comment['created_at'])) ?></p>
            <a class="btn btn-sm btn-success" href="http://localhost/www/CMS/comment/approve/<?php echo $comment['id']?>">click to approved</a>
            <a class="btn btn-sm btn-warning" href="http://localhost/www/CMS/comment/approve/<?php echo $comment['id']?>">click to not approved</a>
    </section>
</section>

<?php
require_once (realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>