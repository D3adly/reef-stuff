<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 29/01/2015
 * Time: 09:03
 */

namespace App\Controllers\Admin;

use View;

class AdminController extends \BaseController{

    public function index()
    {
        return View::make('admin.dash.index');
    }

} 