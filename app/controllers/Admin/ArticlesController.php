<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 30/01/2015
 * Time: 08:25
 */

namespace App\Controllers\Admin;

use View;

class ArticlesController extends \BaseController
{
    public function index()
    {
        return View::make('admin.articles.index');
    }
} 