<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 24/05/2015
 * Time: 17:54
 */
namespace App\Controllers;

use View;

class ParametersController extends \BaseController{

    public function index()
    {
        return View::make('parameters.index');
    }
} 