<?php

namespace Spice;

class Str {
    /**
     * Capitalize a string or string of words.
     * 
     * @param  string
     * @return string
     */
    public function capitalize($value)
    {
        return mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
    }

    /**
     * Capitalize a string of words except certain ones.
     * 
     * @param  string $value
     * @param  mixed|string|array $except A string or array of strings to not capitalize.
     * @param  string $delimiter Word delimiter in the string value.
     * @return string
     */
    public function capitalizeExcept($value, $except, $delimiter=' ')
    {
        if (is_string($except)) {
            $except = [$except];
        }

        $words = explode($delimiter, $value);

        foreach($words as $key=>$word) {
            if (! in_array($word, $except)) {
                $words[$key] = $this->capitalize($word);
            }
        }

        return implode(' ', $words);
    }
}