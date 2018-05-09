<?php
/**
 *
 */

namespace Bravi;

/**
 * Class BracketsParser checks if a string
 * @package Brackets
 */
class BracketsParser
{

    public static function isBalanced($string)
    {
        // Remove not brackets .
        $string = preg_replace("/([^\{\}\[\]\(\)])/", '', $string);

        $tokenSPair = ['{}', '[]', '()'];

        $length = strlen($string);
        $counter = 0;

        $balanced = false;

        while ($counter++ < $length) {
            $string = str_replace($tokenSPair, '', $string);
            if ($string == '') $balanced = true;
            if ($balanced) break;
        }

        return $balanced;
    }
}