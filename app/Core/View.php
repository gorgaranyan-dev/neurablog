<?php

namespace App\Core;

class View
{
    protected static ?string $layout = null;
    protected static array $sections = [];
    private static $styles = [];
    private static $scripts = [];

    public static function render(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);

        // Buffer the main view content
        ob_start();
        include self::getPath($view);
        $content = ob_get_clean();

        if (self::$layout !== null) {
            self::$sections['content'] = $content;

            // Buffer layout, which will call yield() to insert content
            include self::getPath(self::$layout);
        } else {
            // If no layout, just output view content
            echo $content;
        }

        // Reset after render
        self::$layout   = null;
        self::$sections = [];
    }

    protected static function getPath(string $dotPath): string
    {
        $path = str_replace('.', '/', $dotPath);

        return APP_PATH."/resources/views/$path.php";
    }

    public static function layout(string $layoutName): void
    {
        self::$layout = $layoutName;
    }

    public static function section(string $name, string $content): void
    {
        self::$sections[$name] = $content;
    }

    // Push styles or scripts to the stack
    public static function push($type, $content)
    {
        if ($type === 'styles') {
            self::$styles[] = $content;
        } elseif ($type === 'scripts') {
            self::$scripts[] = $content;
        }
    }

    // Yield styles or scripts from the stack
    public static function yield($type)
    {
        if ($type === 'styles' && ! empty(self::$styles)) {
            foreach (self::$styles as $style) {
                echo "<link rel='stylesheet' href='/public/assets/css/".$style."'>\n";
            }
        } elseif ($type === 'scripts' && ! empty(self::$scripts)) {
            foreach (self::$scripts as $script) {
                echo "<script src='/public/assets/js/".$script."'></script>\n";
            }
        } else {
            echo self::$sections[$type];
        }
    }

    public static function validationError($key)
    {
        if ( ! empty($_SESSION['_validation_errors']) && ! empty($_SESSION['_validation_errors'][$key])) {
            return $_SESSION['_validation_errors'][$key][0];
        }

        return null;
    }

    public static function oldValue($key)
    {
        if ( ! empty($_SESSION['_old_input']) && ! empty($_SESSION['_old_input'][$key])) {
            return $_SESSION['_old_input'][$key];
        }

        return null;
    }
}
