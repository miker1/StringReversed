<?php

declare(strict_types=1);

namespace App;

class StringReversed
{
    public function strReversed(string $str): string
    {
        $pattern = "#[[:punct:]]#";

        $result = [];

        preg_match_all($pattern, $str, $matches);

        $newWord = preg_replace($pattern, "%d%", $str);

        array_walk_recursive($matches[0], function ($item, $key) use (&$result) {
            $result[] = $item;
        });

        $reversed = array_reverse($result);

        return vsprintf(str_replace('%d%', '%s', $newWord), $reversed);
    }
}