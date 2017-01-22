<?php

namespace Spice;

use Spice\Str;

class Spice {
    public function string($string = null)
    {
        return new Str($string);
    }
}