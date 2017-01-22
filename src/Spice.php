<?php

namespace Spice;

use Spice\Str;

class Spice {
    public function string($value = null)
    {
        return new Str($value);
    }
}