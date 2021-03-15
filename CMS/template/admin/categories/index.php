<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5 "><i class="fas fa-newspaper"></i> Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a role="button" href="#" class="btn btn-sm btn-success">create</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of categories</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>

            <tr>
                <td>1</td>
                <td>Sport</td>
                <td>
                    <a role="button" href="#" class="btn btn-sm btn-info my-0 mx-1 text-white">update</a>
                    <a role="button" href="#" class="btn btn-sm btn-danger my-0 mx-1 text-white">delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Economic</td>
                <td>
                    <a role="button" href="#" class="btn btn-sm btn-info my-0 mx-1 text-white">update</a>
                    <a role="button" href="#" class="btn btn-sm btn-danger my-0 mx-1 text-white">delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Culture</td>
                <td>
                    <a role="button" href="#" class="btn btn-sm btn-info my-0 mx-1 text-white">update</a>
                    <a role="button" href="#" class="btn btn-sm btn-danger my-0 mx-1 text-white">delete</a>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>