<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 27/01/2015
 * Time: 17:36
 */

namespace App\Models;

class Reading extends \Eloquent
{
    protected $table = 'readings';

    public function owner()
    {
        return $this->belongsTo('User');
    }
} 