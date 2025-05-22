<?php

session_start();
require_once __DIR__.'/constants.php';
require_once __DIR__.'/init.php';

if ( ! file_exists(__DIR__.'/config.php')) {
    require_once __DIR__.'/routes/install.php';

    return;
}
require_once __DIR__.'/config.php';
require_once __DIR__.'/routes/web.php';