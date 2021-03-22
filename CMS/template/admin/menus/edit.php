<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>





                <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Edit Menu</h1>
    </section>

<section class="row my-3">
    <section class="col-12">
        <form method="post" action="http://localhost/www/CMS/menu/update/1">

            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ..." value="news" required>
            </div>

            <div class="form-group">
                <label for="url">url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ..." value="#" required>
            </div>

            <div class="form-group">
                <label for="parent_id">parent ID</label>
                <select name="parent_id" id="parent_id" class="form-control" autofocus>
                    <option value="">root</option>
                    <option value="1" selected>home</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">update</button>
        </form>
    </section>
</section>



        </main>
    </div>
</div>


<?php
require_once (realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>


