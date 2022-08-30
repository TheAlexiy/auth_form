<?php

require_once __DIR__ . '/boot.php';

$user = null;

if (check_auth()) {
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['username'] = $user['username'];
}
?>
<?php
if ($user) { ?>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
        <h1 class="mx-auto" style="width: 300px">Welcome, <?= htmlspecialchars($_SESSION['username']) ?>! </h1>
        <div class="row mx-auto mt-3" style="width: 400px">
            <div class="text-truncate mt-5">
                <p class="ml-5 "> Would you like to give some feedback?</p>
                <p> That would be very useful for further development</p>
            </div>
            <form class="" method="post" action="do_logout.php">
                <a class="btn btn-primary mt-3 ml-5 mr-5" href="feedback.php">Proceed</a>
                <button type="submit" class="btn btn-outline-primary mt-3 ml-5">Logout</button>
            </form>
        </div>
    </div>
    <?php
} else { ?>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
        <h1 class="d-flex justify-content-center">Registration</h1>
        <form method="post" action="do_register.php">
            <div class="container h-50 mt-5" style="width: 450px">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text"
                           class="form-control"
                           id="username"
                           name="username" required
                           placeholder="Введите имя пользователя">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"
                           class="form-control"
                           id="password"
                           name="password" required
                           placeholder="Введите пароль">
                </div>
                <div class="row justify-content-between">
                    <div class="btn">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <div class="btn">
                        <a class="btn btn-outline-primary" href="login.php">Already have an account?</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
} ?>