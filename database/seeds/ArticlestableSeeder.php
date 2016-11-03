<?php

use Illuminate\Database\Seeder;

class ArticlestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory('App\Articles', 50)->create()->each(function($u) {

            $u->posts()->save(factory('App\Post')->make());

        });

    }

}
