<?php

namespace App\Helpers;

class Helper
{
    public static function cleanText($text) {
        return strip_tags($text);
    }
}
