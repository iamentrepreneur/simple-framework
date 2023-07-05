<?php

use App\Application\Config\Config;
use App\Application\Views\View;

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
        <div class="row">
            <form class="row g-3">
                <div class="col-auto">
                    <label for="staticEmail2" class="visually-hidden">Email</label>
                    <input type="text" readonly class="form-control" id="email" name="email" value="email@example.com">
                </div>
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Login</button>
                </div>
            </form>
        </div>
    </div>
</main>

</body>
</html>