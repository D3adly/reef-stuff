<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 27/01/2015
 * Time: 17:51
 */

use App\Models\Reading;
use App\Models\Article;

class ContentSeeder extends Seeder{
    public function run()
    {
        DB::table('readings')->delete();

        Reading::create(array(
            'user_id'   => '8',
            'ph'        => 8.3,
        ));

        DB::table('articles')->delete();

        Article::create(array(
            'user_id'   => '8',
            'title'     => 'Test Article',
            'slug'      => 'test-article',
            'body'      => 'Some text for test article is here. Nothing fancy, just some random words. Blah blah blah...',
            'image'     => 'http://theiff.org/current/wp-content/uploads/2014/09/Corals_Real-copy-1024x713.jpg',
        ));
    }
} 