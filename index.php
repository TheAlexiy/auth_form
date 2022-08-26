<?php

require_once __DIR__ . '/boot.php';

$user = null;

if (check_auth()) {
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<?php
if ($user) { ?>
    <h1>Welcome back, <?= htmlspecialchars($user['username']) ?>! </h1>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <form class="mt-5" method="post" action="do_logout.php">
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
    <?php
} else { ?>
    <html lang="en" class="h-100">
    <body class="h-100">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <h1 class="mx-auto mt-3" style="width: 300px">Registration</h1>
    <form method="post" action="do_register.php">
        <div class="container h-50">
            <div class="row h-50 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-5">
                    <div class="form-group" style="max-width: 350px">
                        <label for="username">Username</label>
                        <input type="text"
                               class="form-control"
                               id="username"
                               name="username"
                               required placeholder="Введите имя пользователя">
                    </div>
                    <div class="form-group" style="width: 350px">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password" required
                               placeholder="Введите пароль">
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary mr-5 mx-3">Register</button>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-outline-primary" href="login.php">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
} ?>