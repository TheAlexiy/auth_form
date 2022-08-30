<?php

require_once __DIR__ . '/boot.php';

if (check_auth()) {
    header('Location: /auth_form');
    die;
}
?>
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous">
<div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
    <h1 class="d-flex justify-content-center">Login</h1>
    <form method="post" action="do_login.php">
        <div class="container h-50 mt-5" style="width: 450px">
            <div class="form-group">
                <label for="username" class="font-weight-bold">Username</label>
                <input type="text"
                       class="form-control"
                       id="username"
                       name="username" required
                       placeholder="Введите имя пользователя">
            </div>
            <div class="form-group">
                <label for="password" class="font-weight-bold">Password</label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password" required
                       placeholder="Введите пароль">
            </div>
            <div class="row justify-content-between">
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="btn">
                    <a class="btn btn-outline-primary" href="index.php">Don't have an account? Register now</a>
                </div>
            </div>
        </div>
    </form>
</div>