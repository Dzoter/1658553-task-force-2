<?php
/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */

$faker = Faker\Factory::create('ru_RU');
return [
	'create_time' => $faker->dateTimeBetween('2022-04-01', 'now')->format('Y-m-d H:i:s'),
    'deadline_time' =>$faker->dateTimeBetween('2022-04-15', '2022-07-31')->format('Y-m-d H:i:s'),
    'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
    'info' => $faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
    'category_id' => $faker->numberBetween(1,8),
    'city_id' => $faker->numberBetween(1, 1087),
    'price' => $faker->numberBetween(300,10000),
    'customer_id' => $faker->numberBetween(1,3),
    'executor_id' => $faker->randomElement($array = [null, $faker->numberBetween(1,3)]),
    'status'=> $faker->numberBetween(1,5),

];