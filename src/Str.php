<?php

namespace Spice;

class Str {
    protected $string = '';

    public function __construct($string = null) {
        $this->string = $this->checkString($value) ? $string : '';
    }

    /**
     * Capitalize a string or string of words.
     * 
     * @param  string
     * @return string
     */
    public function capitalize($value = null)
    {
        $string = $this->checkString($value) ? $value : $this->string;

        return mb_convert_case($string, MB_CASE_TITLE, 'UTF-8');
    }

    /**
     * Capitalize a string of words except certain ones.
     * 
     * @param  string $value
     * @param  mixed|string|array $except A string or array of strings to not capitalize.
     * @param  string $delimiter Word delimiter in the string value.
     * @return string
     */
    public function capitalizeWordsExcept($except, $delimiter=' ')
    {
        if (is_string($except)) {
            $except = [$except];
        }

        $words = explode($delimiter, $this->string);

        foreach($words as $key=>$word) {
            if (! in_array($word, $except)) {
                $words[$key] = $this->capitalize($word);
            }
        }

        return implode(' ', $words);
    }

    /**
     * Check if a value is a string.
     * 
     * @param  mixed $value
     * @return mixed
     */
    public function checkString($value = null)
    {
        if (is_string($value)) {
            return true;
        }

        if (is_null($value)) {
            throw new InvalidArgumentException(
                'No string was passed as an argument.'
            );
        }

        throw new InvalidArgumentException(
            'Passed argument must be a string.'
        );
    }
}