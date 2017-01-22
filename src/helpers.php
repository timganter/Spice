<?php

if (! function_exists('spice')) {
    /**
     * Create a spice object.
     * 
     * @param  mixed $value
     * @return \Spice\Str
     */
    function spice()
    {
        return new Spice\Spice;
    }
}