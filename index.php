<?php

session_start();
require_once __DIR__.'/constants.php';
require_once __DIR__.'/init.php';

if ( ! file_exists(__DIR__.'/config/config.php')) {
    require_once __DIR__.'/routes/install.php';

    return;
}

use App\Core\Database;

$db = Database::getInstance()->getConnection();
require_once __DIR__.'/routes/web.php';