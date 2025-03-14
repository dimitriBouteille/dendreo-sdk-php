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

    /**
     * Shorter timestamp microseconds to 6 digits length.
     *
     * @param string|null $timestamp Original timestamp
     * @return string|null the shorten timestamp
     */
    public static function sanitizeTimestamp(?string $timestamp): ?string
    {
        if ($timestamp === null) {
            return null;
        }

        return preg_replace('/(:\d{2}.\d{6})\d*/', '$1', $timestamp);
    }
}
