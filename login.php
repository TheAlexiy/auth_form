<?php

require_once __DIR__ . '/boot.php';

if (check_auth()) {
    header('Location: /auth_form');
    die;
}
?>
<body class="h-100">
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous">
<div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
    <h1 class="mx-auto" style="width: 150px">Login</h1>
    <form method="post" action="do_login.php">
        <div class="container h-50">
            <div class="row h-50 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-5">
                    <div class="form-group" style="max-width: 400px">
                        <label for="username" class="form-label">Username</label>
                        <input type="text"
                               class="form-control"
                               id="username"
                               name="username" required
                               placeholder="Введите имя пользователя">
                    </div>
                    <div class="form-group" style="max-width: 400px">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password" required
                               placeholder="Введите пароль">
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary mr-5 mx-3">Login</button>
                        <a class="btn btn-outline-primary" href="index.php">Don't have an account? Register now</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>