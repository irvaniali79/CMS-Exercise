<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="http://localhost/www/CMS/public/css/admin/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>


<nav class="navbar  navbar-light bg-gradiant-green-blue nav-shadow">
    <a class="navbar-brand" href="#">My Blog</a>
    <span class="">
                <a class="text-decoration-none px-3 text-dark" href="#"><i class="fas fa-comments"></i> <span class="badge badge-danger">2 new!</span></a>
            <span class="dropdown">
                <a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Arman
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">reset password</a>
                    <a class="dropdown-item" href="#">logout</a>
                </div>
            </span>
       </span>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block pt-3 bg-sidebar sidebar px-0">
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="#"><i class="fas fa-home"></i> Home</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="#"><i class="fas fa-clipboard-list"></i> Category</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="#"><i class="fas fa-newspaper"></i> Article</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="#"><i class="fas fa-comments"></i> Comment</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="#"><i class="fas fa-users"></i> User</a>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">



                <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Create Menu</h1>
    </section>

<section class="row my-3">
    <section class="col-12">
        <form method="post" action="http://localhost/www/CMS/menu/store">
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ..." required>
            </div>

            <div class="form-group">
                <label for="url">url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ..." required>
            </div>

            <div class="form-group">
                <label for="parent_id">parent ID</label>
                <select name="parent_id" id="parent_id" class="form-control" autofocus>
                    <option value="">root</option>
                    <option value="1">home</option>
                    <option value="2">news</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">store</button>
        </form>
    </section>
</section>

        </main>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>


<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
</body>
</html>



