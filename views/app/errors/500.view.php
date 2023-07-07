<?php

use App\Application\Config\Config;
use App\Application\Views\View;
?>
<!doctype html>
<html lang="<?= Config::get('app.lang')?>">
<head>
    <?php View::component('head'); ?>
    <title>500 Error</title>
</head>
<body>
<?php View::component('nav'); ?>
<main>
    <div class="container">
        <div class="row mt-3">
            <h2>Error code <span class="badge bg-secondary">500</span></h2>
        </div>
    </div>
</main>

</body>
</html>