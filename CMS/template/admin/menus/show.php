<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>




                <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Show Menu</h1>
    </section>

    <section class="row my-3">
        <section class="col-12">
            <h1 class="h4 border-bottom">name : <?php echo $menu['name'];?></h1>
            <p class="h4 border-bottom">url : <?php echo $menu['url'];?></p>
            <p class="h4 border-bottom">parent ID :<?php echo $menu['parent_id'];?> </p>
        </section>
    </section>

        </main>
    </div>
</div>


<?php
require_once (realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>



