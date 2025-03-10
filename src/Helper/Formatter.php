<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Helper;

class Formatter
{
    /**
     * @param string $className
     * @return string
     */
    public static function toArrayClass(string $className): string
    {
        return $className . '[]';
    }

    /**
     * Convert a value to studly caps case.
     *
     * @param string $value
     * @return string
     */
    public static function studly(string $value): string
    {
        $words = explode(' ', str_replace(['-', '_'], ' ', $value));

        $studlyWords = array_map(function ($word) {
            return strtoupper(substr($word, 0, 1)) . substr($word, 1);
        }, $words);

        return implode($studlyWords);
    }
}
