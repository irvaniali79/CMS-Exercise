<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>

    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Set Web Setting</h1>
    </section>

<section class="row my-3">
    <section class="col-12">

        <form method="post" action="http://localhost/www/CMS/web-setting/store" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title ..." value="<?php if($setting !=null) echo $setting['title']; ?>" autofocus>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter title ..." value="<?php if($setting !=null) echo $setting['description']; ?>" autofocus>
            </div>

            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Enter title ..." value="<?php if($setting !=null) echo $setting['keywords']; ?>" autofocus>
            </div>


           <div class="form-group">
           <?php if($setting !=null){ ?>
                    <img style="width: 100px;" src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/www/CMS/'.$setting['logo']; ?>" alt="" >
                <hr/>
                <?php } ?>
                <label for="logo">Logo</label>
                <input type="file" id="logo" name="logo" class="form-control-file" autofocus>
            </div>

            <div class="form-group">
            <?php if($setting !=null){ ?>
                    <img style="width: 100px;" src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/www/CMS/'.$setting['icon']; ?>" alt="" >
                <hr/>
                <?php } ?>
                <label for="icon">Icon</label>
                <input type="file" id="icon" name="icon" class="form-control-file" autofocus>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">set</button>
        </form>
    </section>
</section>



<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>