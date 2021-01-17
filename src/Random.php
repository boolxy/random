<?php

namespace Boolxy\Random;

/**
 * Generates random str, num, alpha, etc.
 */
class Random
{
    /**
     * @param int $length
     *
     * @return string
     */
    public static function num(int $length = 4): string
    {
        $string = '';

        while (strlen($string) < $length) {
            $string .= (string) rand(0, 9);
        }

        return $string;
    }

    /**
     * @param int $length
     *
     * @return string
     */
    public static function str(int $length = 8): string
    {
        $string = '';

        while (strlen($string) < $length) {
            $string .= chr(rand(97, 122));
        }

        return $string;
    }

    /**
     * @param int $length
     *
     * @return string
     */
    public static function alpha(int $length = 16): string
    {
        $string = '';

        while (($len = strlen($string)) < $length) {
            $size = $length - $len;

            $bytes = random_bytes($size);

            $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $string;
    }
}
