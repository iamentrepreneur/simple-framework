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
            <h2>Welcome to <span class="badge bg-secondary">register page</span></h2>

            <div class="row">
                <div class="col-6">
                    <form class="mt-5" action="/register" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="email" name="name" >
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="email@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Password confirm</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary mb-3">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>