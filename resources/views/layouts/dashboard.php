<?php

use App\Core\View;

?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>
		<?php
		View::yield( 'title' );
		?>
    </title>
	<?php
	View::push( 'styles', 'dashboard.css' );
	View::push( 'scripts', 'dashboard.js' );
	?>
	<?php
	View::yield( 'styles' );
	View::yield( 'scripts' );
	?>
</head>
<body>
<header>
</header>

<main class="main">
    <div class="container">
        <div class="dashboard">
            <div class="container">
	            <?php
	            View::include( 'admin.partials.sidebar' ) ?>
	            <?php
	            View::yield( 'content' ); ?>
            </div>
        </div>
    </div>
</main>

<footer>
</footer>
</body>
</html>
