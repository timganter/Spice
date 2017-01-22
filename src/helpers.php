<?php

if (! function_exists('capitalizeWordsExcept')) {
    /**
     * Capitalize a string of words except certain ones.
     * 
     * @param  string $value
     * @param  mixed|string|array $except
     * @param  string $delimiter
     * @return string
     */
    function capitalizeWordsExcept($value, $except, $delimiter = ' ')
    {
        if (is_string($except)) {
            $except = [$except];
        }

        $words = explode($delimiter, $value);

        foreach($words as $key=>$word) {
            if (! in_array($word, $except)) {
                $words[$key] = mb_convert_case($word, MB_CASE_TITLE, 'UTF-8');
            }
        }

        return implode(' ', $words);
    }
}