<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $user=User::inRandomOrder()->first()->id;
    return [
        'titre'=>$faker->name,
        'image'=>'YyD7XpN6y4tTwdrSnYZQfJJHpa0FJWryMbwvEESa.png',
        'texte'=>$faker->text,
        'user_id'=>$user,
    ];
});
