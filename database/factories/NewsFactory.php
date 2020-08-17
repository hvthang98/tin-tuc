<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categorys;
use App\Models\News;
use App\Models\Typenews;
use App\Models\Users;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'categorys_id'=>5,
        'type_news_id'=>7,
        'users_id'=>1,
        'title'=>$faker->text,
        'avatar'=>$faker->imageUrl($width = 640, $height = 480),
        'summary'=>$faker->text,
        'content'=>$faker->text,
        'status'=>1
    ];
});
