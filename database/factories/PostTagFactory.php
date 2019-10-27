<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$faker = new Faker();

DB::table('post_tag')
    ->updateOrInsert(
        ['post_id'=> $faker->numberBetween(1, 1500)],
        ['tag_id'=> $faker->numberBetween(1, 50)]
    );
//$factory->define(Model::class, function (Faker $faker) {
//    return [
//        //
//    ];
//});
