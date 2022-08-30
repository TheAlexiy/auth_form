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
    <div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
        <h1 class="d-flex justify-content-center">Welcome, <?= htmlspecialchars($_SESSION['username']) ?>! </h1>
        <div class="container h-50 mt-5" style="width: 450px">
            <div class="mt-5 ">
                <div class="form-group d-flex justify-content-center">
                    <p> Would you like to leave us feedback?</p>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <p> That would be very useful for further development</p>
                </div>
            </div>
            <form class="row justify-content-between" method="post" action="do_logout.php">
                <div class="btn">
                    <a class="btn btn-primary ml-5" href="feedback.php">Proceed</a>
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-outline-primary mr-5">Logout</button>
                </div>
            </form>
        </div>
    </div>
    <?php
} else { ?>
    <div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
        <h1 class="d-flex justify-content-center">Registration</h1>
        <form method="post" action="do_register.php">
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