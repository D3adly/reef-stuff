<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 24/05/2015
 * Time: 17:54
 */
namespace App\Controllers;

use App\Models\DefaultReading;
use App\Models\Logic\DispersionCheck;
use View, Input;

class ParametersController extends \BaseController{

    public function index()
    {
        return View::make('parameters.index');
    }

    public function submit()
    {
        $data = Input::all();
        unset($data['_token']);
        foreach ($data as $key => $value) {
            if($value !== '') {
                $received[$key]['result'] = DispersionCheck::calculate(DefaultReading::where('reading', '=', $key)->first(), $value);
                $received[$key]['submitted'] = $value;
            }
        }

        return \Response::json($received);
    }
} 