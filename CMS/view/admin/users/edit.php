<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>



        <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Edit User</h1>
    </section>

<section class="row my-3">
    <section class="col-12">

        <form method="post" action="http://localhost/www/CMS/user/update/<?php echo $id ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter title ..." value="<?php echo $user["username"] ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter title ..." value="<?php echo $user["email"]?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Enter title ..." value="<?php echo $user["password"] ?>">
            </div>

            <div class="form-group">
                <label for="permission">permission</label>
                <select name="permission" id="permission" class="form-control" required autofocus>
                        <option value="user" <?php if($user['permission']=='user') echo 'selected'; ?>>User</option>
                        <option value="admin" <?php if($user['permission']=='admin') echo 'selected'; ?>>Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">update</button>
        </form>

    </section>
</section>


<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>
