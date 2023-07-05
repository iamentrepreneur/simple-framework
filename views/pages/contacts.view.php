<?php

use App\Application\Config\Config;
use App\Application\Views\View;

?>

<!doctype html>
<html lang="<?= Config::get('app.lang')?>">
<head>
    <?php View::component('head'); ?>
    <title><?=$title?></title>
</head>
<body>
<?php View::component('nav'); ?>
    <main>
        <div class="container">
            <div class="row mt-3">
                <h2>Welcome to <span class="badge bg-secondary">contacts page</span></h2>
            </div>
            <div class="row mt-5">
                <form class="form" action="/contacts" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" value="test@mail.ru" name="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" value="framework" name="subject" class="form-control" id="subject" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3">Some message</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">send</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>