<?php

namespace App\\Util;

final class Str
{
    public static function truncate(string $text, int $length, string $suffix = '...'): string
    {
        return strlen($text) <= $length ? $text : substr($text, 0, $length) . $suffix;
    }
}
