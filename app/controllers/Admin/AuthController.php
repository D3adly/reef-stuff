<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 28/01/2015
 * Time: 18:21
 */

namespace App\Controllers\Admin;

use Auth, BaseController, Form, Input, Redirect, Sentry, View;

class AuthController extends BaseController
{
    public function getLogin()
    {
        return View::make('admin.auth.login');
    }

    public function postLogin()
    {

        $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password'),
        );

        try{
            $user = Sentry::authenticate($credentials, false);
            if($user)

                return Redirect::route('admin.home');
        }catch (\Exception $e){

            return Redirect::route('admin.login');
        }
    }

    public function getLogout()
    {
        Sentry::logout();
        return Redirect::route('admin.login');
    }
} 