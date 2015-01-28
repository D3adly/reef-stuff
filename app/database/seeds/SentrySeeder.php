<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 27/01/2015
 * Time: 17:48
 */

use App\Models\User;

class SentrySeeder extends Seeder{

    public function run()
    {
        DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();

        Sentry::getUserProvider()->create(array(
            'email'       => 'admin@admin.com',
            'password'    => "admin",
            'first_name'  => 'John',
            'last_name'   => 'McClane',
            'activated'   => 1,
        ));

        Sentry::getUserProvider()->create(array(
            'email'       => 'user@user.com',
            'password'    => "user",
            'first_name'  => 'Jack',
            'last_name'   => 'Black',
            'activated'   => 1,
        ));

        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));

        Sentry::getGroupProvider()->create(array(
            'name'        => 'User',
            'permissions' => array('user' => 1),
        ));

        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('admin@admin.com');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');

        $user = Sentry::getUserProvider()->findByLogins('user@user.com');
        $userGroup = Sentry::getGroupProvider()->findByName('User');

        $adminUser->addGroup($adminGroup);
        $user->addGroup($userGroup);
    }

} 