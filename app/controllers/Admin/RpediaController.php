<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 30/01/2015
 * Time: 08:23
 */

namespace App\Controllers\Admin;

use View;

class RpediaController extends \BaseController{

    public function index()
    {
        return View::make('admin.rpedia.index');
    }

} 