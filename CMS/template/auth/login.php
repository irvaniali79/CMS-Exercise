<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="shortcut icon" href="http://localhost/www/CMS/icon" type="image/x-icon" />

    <link rel="stylesheet" href="http://localhost/www/CMS/public/css/admin/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

    <link href="http://localhost/www/CMS/public/css/admin/style.css" rel="stylesheet" type="text/css">

</head>
<body>


<section class="container-fluid bg-auth-form d-flex justify-content-center align-items-center ">
    <section class="row bg-gradiant-green-blue">

        <section class="col-12 bg-white p-5 rounded">
            <h2 class="h5 pb-3">Login Form</h2>
            <form method="post" class="" action="http://localhost/www/CMS/check-login">
                <?php
                $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
                ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email ...">
                    <!--            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password ...">
                    <!--            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <button type="submit" class="btn btn-sm btn-primary">login</button>
            </form>


        </section>
    </section>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="http://localhost/www/CMS/public/js/admin/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script src="http://localhost/www/CMS/public/js/admin/mdb.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
<?php if($httpReferer == 'http://localhost/www/CMS/login'){?>
    swal({
        title: "Login Error!",
        text: "user information is worng",
        icon: "error",
        button: "OK",
        dangerMode: true,
    });
<?php } ?>
</script>
</body>
</html>




