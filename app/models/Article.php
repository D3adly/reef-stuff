<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 30/01/2015
 * Time: 08:50
 */

namespace App\Models;


class Article extends \Eloquent
{
    protected $table = 'articles';

    public function author()
    {
        return $this->belongsTo('User');
    }
} 