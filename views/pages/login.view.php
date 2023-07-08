<?php

use App\Application\Config\Config;
use App\Application\Views\View;

//dd(\App\Application\Auth\Auth::user());

?>
<!doctype html>
<html lang="<?= Config::get('app.lang') ?>">
<head>
    <?php View::component('head'); ?>
    <title><?= $title ?></title>
</head>
<body>
<?php View::component('nav'); ?>
<main>
    <div class="container">
        <div class="row mt-3">
            <h2>Welcome to <span class="badge bg-secondary">login page</span></h2>
        </div>

        <div class="row mt-5">
            <div class="col-6">
                <form class="" action="/login" method="post">
                    <div class="mb-3">
                        <label for="staticEmail2" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword2" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

</body>
</html>