<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>









                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5 "><i class="fas fa-newspaper"></i> Menus</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a role="button" href="http://localhost/www/CMS/menu/create" class="btn btn-sm btn-success">create</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of menus</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>url</th>
                    <th>parent ID</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>home</td>
                    <td>#</td>
                    <td></td>
                    <td>
                        <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/www/CMS/menu/edit/1">edit</a>
                        <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/www/CMS/menu/delete/1">delete</a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>news</td>
                    <td>#</td>
                    <td>1</td>
                    <td>
                        <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/www/CMS/menu/edit/1">edit</a>
                        <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/www/CMS/menu/delete/1">delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

        </main>
    </div>
</div>

<?php
require_once (realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>


