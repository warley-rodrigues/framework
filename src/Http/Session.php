<?php

namespace Baseons\Http;

class Session
{
    public static function set(string|array $key, mixed $data = [])
    {
        return arr()->set($_SESSION, $key, $data);
    }

    /**
     * @return bool
     */
    public static function unset(string|array $key)
    {
        return arr()->unset($_SESSION, $key);
    }

    /**
     * Return session
     */
    public static function get(int|string $key, mixed $default = null)
    {
        return arr()->get($_SESSION, $key, $default);
    }

    /**
     * Check isset session
     * @return bool
     */
    public static function has(int|string $key)
    {
        if (array_key_exists($key, $_SESSION)) return true;

        return false;
    }

    public static function regenerate()
    {
        return session_regenerate_id(true);
    }

    public static function status()
    {
        return session_status();
    }

    public static function id(null|string $id = null)
    {
        return session_id($id);
    }

    public static function expire()
    {
        return session_cache_expire();
    }

    public static function destroy()
    {
        $_SESSION = [];

        return true;
    }
}
