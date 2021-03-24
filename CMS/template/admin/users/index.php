<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5 "><i class="fas fa-newspaper"></i> Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a role="button" href="#" class="btn btn-sm btn-success disabled">create</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>permission</th>
                    <th>created at</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user)  {?>
                <tr>
                    <td><?php echo $user["id"] ?></td>
                    <td><?php echo $user["username"] ?></td>
                    <td><?php echo $user["email"] ?></td>
                    <td><?php echo $user["password"] ?></td>
                    <td><?php echo $user["permission"] ?></td>
                    <td><?php echo $user["created_at"] ?></td>
                    <td>
                        
                    <?php if($user["permission"]== 'user'){ ?>
                            <a role="button" class="btn btn-sm btn-success text-white" href="http://localhost/www/CMS/user/permission/<?php echo $user["id"] ?>">click to be admin</a>
                    <?php } else { ?>
                        <a role="button" class="btn btn-sm btn-warning text-white" href="http://localhost/www/CMS/user/permission/<?php echo $user["id"] ?>">click not to be admin</a>
                    <?php } ?>

                        <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/www/CMS/user/edit/<?php echo $user["id"] ?>">edit</a>
                        <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/www/CMS/user/delete/<?php echo $user["id"] ?>">delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

    <?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>
