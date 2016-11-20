<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'avatar' =>$faker->imageUrl(256,256),
        'confirm_code'=>str_random(48),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Articles::class, function (Faker\Generator $faker) {


    return [
        'title' => $faker->title,
        'content' => $faker->text(),
        'article_img_url' => $faker->imageUrl(256,256),
        'published_at' => $faker->dateTime,
        'intro' => $faker->country,
        'created_at'=>$faker->dateTime,
        'updated_at'=>$faker->dateTime,
    ];


});



$factory->define(App\post::class, function (Faker\Generator $faker) {

    $userid = DB::table('users')->pluck('id')->toArray();

    return [
        'title' => $faker->sentence,
        'user_id'=> $faker->randomElements($userid),
        'body' => $faker->paragraphs,
    ];

});



$factory->define(App\Discussion::class, function (Faker\Generator $faker) {

    $userid = DB::table('users')->pluck('id')->toArray();

    return [
        'title' => $faker->titleFemale,
        'body' =>  $faker->text,
        'user_id' => $faker->randomElement($userid),
        'last_user_id' => $faker->randomElement($userid),
    ];



});

