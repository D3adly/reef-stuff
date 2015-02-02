<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 30/01/2015
 * Time: 08:24
 */

namespace App\Controllers\Admin;

use View;

class ProfileController extends \BaseController{

    public function index()
    {
        return View::make('admin.profile.index');
    }

} 