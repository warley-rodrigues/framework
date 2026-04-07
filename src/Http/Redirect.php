<?php

namespace Baseons\Http;

use Baseons\Kernel;

class Redirect
{
    public static function destination(string $destination, int $status = 302)
    {
        header('Location: ' . $destination, true, $status);

        return Kernel::terminate();
    }

    public static function route(string $name, int $status = 302)
    {
        header('Location: ' . route($name), true, $status);

        return Kernel::terminate();
    }

    public function back(int $status = 302)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER'], true, $status);

            return Kernel::terminate();
        } else {
            return response()->abort($status);
        }
    }
}
