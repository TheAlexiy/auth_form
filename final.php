<?php

require_once __DIR__ . '/boot.php';
?>
<div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
    <h1 class="d-flex justify-content-center mb-5">Thank you!</h1>
    <form class="" method="post" action="do_logout.php">
        <div class="d-flex justify-content-center">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Logout</button>
            </div>
        </div>
    </form>
</div>