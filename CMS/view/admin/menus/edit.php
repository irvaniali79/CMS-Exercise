<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>





                <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Edit Menu</h1>
    </section>

<section class="row my-3">
    <section class="col-12">
        <form method="post" action="http://localhost/www/CMS/menu/update/<?php echo $menu['id'];?>">

            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ..." value="<?php echo $menu['name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="url">url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ..." value="<?php echo $menu['url'];?>" required>
            </div>

            <div class="form-group">
                <label for="parent_id">parent ID</label>
                <select name="parent_id" id="parent_id" class="form-control" autofocus>
                    <option value="" <?php if($menu['parent_id']=='') echo "selected";?>>root</option>
                    <?php foreach($menus as $selectedmenu){?>
                        <?php if($selectedmenu['id']!=$menu['id']){?>
                        <option value="<?php echo $selectedmenu['id']?>"<?php if ($menu['parent_id']==$selectedmenu['id']) echo "selected" ?>)><?php echo $selectedmenu['name']?></option>
                        <?php }
                    }?>

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


