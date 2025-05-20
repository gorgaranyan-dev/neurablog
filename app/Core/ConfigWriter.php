<?php

namespace App\Core;

class ConfigWriter
{
    public function write(string $path, array $config): void
    {
        $exported = var_export($config, true);

        // Ensure directory exists
        $dir = dirname($path);
        if (!is_dir($dir)) {
            mkdir($dir, 0750, true); // Only owner and group can read
        }

        // Write to a temp file first for atomicity
        $tempPath = $path . '.tmp';
        file_put_contents($tempPath, "<?php\nreturn $exported;\n", LOCK_EX);

        // Secure the file: only owner can read
        chmod($tempPath, 0640);

        // Rename to final config file
        rename($tempPath, $path);
    }
}
