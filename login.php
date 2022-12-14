<?php

require_once __DIR__ . '/boot.php';

if (check_auth()) {
    header('Location: /auth_form');
    die;
}
?>
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
                       placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password" class="font-weight-bold">Password</label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password" required
                       placeholder="Enter password">
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