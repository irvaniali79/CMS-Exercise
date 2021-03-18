<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>

<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Show Category</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <h1 class="h4 border-bottom"><?php echo $category['name']?></h1>
    </section>
</section>

<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>