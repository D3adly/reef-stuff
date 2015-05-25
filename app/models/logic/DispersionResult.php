<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 25/05/2015
 * Time: 16:55
 */

namespace App\Models\Logic;

class DispersionResult {

    const CENTER = 0;

    const ALLOWED = 1;

    const OUTSIDE = 2;

    protected $target;

    protected $base;

    protected $dispersion;

    protected $offset;

    protected $placement;

    public function populate($base, $dispersion, $target, $offset, $placement){
        $this->target = $base;
        $this->base = $dispersion;
        $this->dispersion = $target;
        $this->offset = $offset;
        $this->placement = $placement;

        return $this;
    }
} 