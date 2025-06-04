<?php

session_start();
require_once __DIR__.'/constants.php';
require_once __DIR__.'/init.php';
require_once __DIR__.'/app/Core/Helpers/helpers.php';

if ( ! file_exists(__DIR__.'/config.php')) {
    require_once __DIR__.'/routes/install.php';

    return;
}
require_once __DIR__.'/config.php';
require_once __DIR__.'/routes/web.php';