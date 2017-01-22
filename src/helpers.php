<?php

if (! function_exists('capitalizeWordsExcept')) {
    /**
     * Lowercase a string then capitalize it.
     * 
     * @param  string $value
     * @return string
     */
    public function capitalize($value)
    {
        return ucfirst(mb_strtolower($value));
    }

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
        // == Lowercase all string characters first
        $value = mb_strtolower($value);
        
        // == Put exceptions in an array
        if (is_string($except)) {
            $except = [$except];
        }

        $words = explode($delimiter, $value);

        foreach($words as $key=>$word) {
            if (! in_array($word, $except) && ctype_alpha(substr($word, 0))) {
                $words[$key] = mb_convert_case($word, MB_CASE_TITLE, 'UTF-8');
            }
        }

        return implode(' ', $words);
    }
}

if (! function_exists('upperOnlyTheseWords')) {
    function upperOnlyTheseWords($value, $only, $delimiter = ' ')
    {
        // == Put only in an array
        if (is_string($only)) {
            $only = [$only];
        }

        $words = explode($delimiter, $value);

        foreach($words as $key=>$word) {
            if (in_array($word, $only) && ctype_alpha(substr($word, 0))) {
                $words[$key] = mb_strtoupper($word, 'UTF-8');
            }
        }

        return implode(' ', $words);
    }
}