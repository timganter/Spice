<?php

use Spice\Str;

if (! function_exists('spiceString')) {
    /**
     * Create a spice object.
     * 
     * @param  mixed $value
     * @return \Spice\Str
     */
    function spiceString($value = null)
    {
        return new Str($value);
    }
}