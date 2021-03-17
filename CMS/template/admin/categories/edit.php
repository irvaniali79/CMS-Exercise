<?php

use AdminDashboard\Category;

require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>
    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Edit Category</h1>
    </section>

<section class="row my-3">
    <section class="col-12">
        <form method="post" action="http://localhost/www/CMS/category/update/<?php echo $id;?>">
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ..." value="<?php echo $category['name'];?>">
                <!--            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <button type="submit" class="btn btn-primary btn-sm">update</button>
        </form>
    </section>
</section>

<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>
