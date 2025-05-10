<?php
spl_autoload_register(function ($class) {
	$prefix = 'App\\';
	$baseDir = __DIR__ . '/app/';

	// does the class use the namespace prefix?
	$len = strlen($prefix);
	if (strncmp($prefix, $class, $len) !== 0) {
		// no, move to the next registered autoloader
		return;
	}

	// get the relative class name
	$relativeClass = substr($class, $len);

	// replace namespace separators with directory separators
	$file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

	// if the file exists, require it
	if (file_exists($file)) {
		require $file;
	}
});


use App\Core\Database;
$db = Database::getInstance()->getConnection();