<?php

use Spice;

if (! function_exists('spice')) {
    /**
     * Create a spice object.
     * 
     * @param  mixed $value
     * @return \Spice\Str
     */
    function spice($value = null)
    {
        return new Spice($value);
    }
}