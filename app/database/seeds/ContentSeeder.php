<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 27/01/2015
 * Time: 17:51
 */

use App\Models\Reading;

class ContentSeeder extends Seeder{
    public function run()
    {
        DB::table('readings')->delete();

        Reading::create(array(
            'user_id'   => '8',
            'ph'        => 8.3,
        ));
    }
} 