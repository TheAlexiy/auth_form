<?php

require_once __DIR__.'/boot.php';

if (check_auth()) {
    header('Location: /auth_form');
    die;
}
?>
<h1 class="mb-5">Login</h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<form method="post" action="do_login.php">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-outline-primary" href="index.php">Don't have an account? Register now</a>
    </div>
</form>