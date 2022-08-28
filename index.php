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
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
        <h1 class="mx-auto" style="width: 300px">Welcome, <?= htmlspecialchars($user['username']) ?>! </h1>
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
    <body class="h-100 mt-lg-0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <div class="bg-image mb-5" style="background-image: url(bg.jpg); height: 100vh">
        <h1 class="mx-auto" style="width: 250px">Registration</h1>
        <form method="post" action="do_register.php">
            <div class="container h-50">
                <div class="row h-50 justify-content-center align-items-center">
                    <div class="col-10 col-lg-5">
                        <div class="form-group" style="max-width: 400px">
                            <label for="username">Username</label>
                            <input type="text"
                                   class="form-control"
                                   id="username"
                                   name="username" required
                                   placeholder="Введите имя пользователя">
                        </div>
                        <div class="form-group" style="width: 400px">
                            <label for="password" class="form-label">Password</label>
                            <input type="password"
                                   class="form-control"
                                   id="password"
                                   name="password" required
                                   placeholder="Введите пароль">
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary mr-5 mx-3">Register</button>
                            <a class="btn btn-outline-primary ml-5" href="login.php">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
} ?>