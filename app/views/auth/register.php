<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/register">Register</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div>
    <div class="container">
        <h1>Register</h1>
        <?php $form = \core\form\Form::begin('', 'post') ?>
            <?php echo $form->field($user, 'email') ?>
            <?php echo $form->field($user, 'password')->passwordField() ?>
            <?php echo $form->field($user, 'password_confirmation')->passwordField() ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo \core\form\Form::end() ?>

<!--        <form method="POST">-->
<!--            <div class="mb-3">-->
<!--                <label for="exampleInputEmail1" class="form-label">Email address</label>-->
<!--                <input type="email" name="email"-->
<!--                       class="form-control --><?php //echo $user->hasError('email') ? ' is-invalid' : '' ?><!--"-->
<!--                       id="exampleInputEmail1" aria-describedby="emailHelp" value="--><?php //$user->old('email') ?><!--">-->
<!--                <div class="invalid-feedback">-->
<!--                    --><?php //echo $user->getFirstError('email') ?>
<!--                </div>-->
<!--            </div>-->
<!--            <div class="mb-3">-->
<!--                <label for="exampleInputPassword1" class="form-label">Password</label>-->
<!--                <input type="password" name="password" class="form-control" id="exampleInputPassword1">-->
<!--            </div>-->
<!--            <div class="mb-3">-->
<!--                <label for="exampleInputPassword1" class="form-label">Confirm password</label>-->
<!--                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-primary">Submit</button>-->
<!--        </form>-->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>
