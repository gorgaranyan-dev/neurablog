<?php

use App\Core\View; ?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>
        <?php
        View::yield('title');
        ?>
    </title>
    <?php
    View::push('styles', 'dashboard.css');
    View::push('scripts', 'dashboard.js');
    ?>
    <?php
    View::yield('styles');
    View::yield('scripts');
    ?>
</head>
<body>
<header>
    <h1>My Blog</h1>
</header>

<main>
    <?php
    View::yield('content');
    ?>
</main>

<footer>
</footer>
</body>
</html>
