<?php
//kreirano pomocu :php artisan make:seeder StudTableSeeder
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('studs')->insert([
	            'imeStud' => $faker->name,
	            'email' => $faker->email,
	            'pbrStan' => substring($faker->postcode,0,5),
	        ]);
        }
    }
}
