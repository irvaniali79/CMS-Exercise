<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5 "><i class="fas fa-newspaper"></i> Website Setting</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a role="button" href="http://localhost/www/CMS/web-setting/set" class="btn btn-sm btn-success">set web setting</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>Website setting</caption>
            <thead>
                <tr>
                    <th>name</th>
                    <th>value</th>
                </tr>
            </thead>
            <tbody>

            <tr>
                <td>title</td>
                <td><?php echo $setting['title']; ?></td>
            </tr>
            <tr>
                <td>description</td>
                <td><?php echo $setting['description']; ?></td>
            </tr>
            <tr>
                <td>key words</td>
                <td><?php echo $setting['keywords']; ?></td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><img src="<?php echo $setting['logo']; ?>" alt="" width="100px" height="100px"></td>
            </tr>
            <tr>
                <td>Icon</td>
                <td><img src="<?php echo $setting['icon']; ?>" alt="" width="100px" height="100px"</td>
            </tr>
            </tbody>
        </table>
    </section>


    <?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>