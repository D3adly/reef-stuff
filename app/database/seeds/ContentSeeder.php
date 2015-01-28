<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 27/01/2015
 * Time: 17:51
 */

class ContentSeeder {
    public function run()
    {
        DB::table('readings')->delete();

        Readings::create(array(
            'user_id'   => '2',
            'ph'        => 8.3,
        ));
    }
} 