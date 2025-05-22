<?php

namespace App\Core;

class ConfigWriter
{
    private $content = '';

    public function __construct()
    {
    }

    public function addDbCredentials(array $config): void
    {
        $this->content .= "\n/** Database Credentials */\n";
        foreach ($config as $name => $value) {
            $name          = strtoupper($name);
            $value         = is_int($value) ? $value : "'$value'";
            $this->content .= "define('".$name."', $value);\n";
        }
    }

    public function export()
    {
        $path = APP_PATH.'/config.php';
        $dir  = dirname($path);
        if ( ! is_dir($dir)) {
            mkdir($dir, 0750, true); // Only owner and group can read
        }
        // Write to a temp file first for atomicity
        $tempPath = $path.'.tmp';
        file_put_contents($tempPath, "<?php\n$this->content\n", LOCK_EX);

        // Secure the file: only owner can read
        chmod($tempPath, 0640);

        // Rename to final config file
        rename($tempPath, $path);
    }
}
