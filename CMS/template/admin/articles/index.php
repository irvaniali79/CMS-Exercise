<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5 "><i class="fas fa-newspaper"></i> Articles</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a role="button" href="http://localhost/www/CMS/article/create" class="btn btn-sm btn-success">create</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>List of articles</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>title</th>
                <th>summary</th>
                <th>view</th>
                <th>user ID</th>
                <th>cat ID</th>
                <th>image</th>
                <th>setting</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article) {?>
            <tr>
                <td><a class="text-primary" href="http://localhost/www/CMS/article/show/<?php echo $article['id'];
                ?>"><?php echo $article['id'] ?></a></td>
                <td><?php echo $article['title'] ?></td>
                <td><?php echo $article['summary'] ?></td>
                <td><?php echo $article['view'] ?></td>
                <td><?php echo $article['user_id'] ?></td>
                <td><?php echo $article['cat_id'] ?></td>
                <td><img style="width: 80px;" src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/www/CMS/'
                        .$article['image'];?>"
                         alt=""></td>
                <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="http://localhost/www/CMS/article/edit/<?php echo $article['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="http://localhost/www/CMS/article/delete/<?php echo $article['id']; ?>">delete</a>
                </td>
            </tr>
        <?php }?>   

        </tbody>

    </table>
</div>



<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>