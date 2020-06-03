<?php

use App\Route;
use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        for($records = 0; $records <= 10; $records++)
        {          
            Route::create([
                'hostname' => $faker->domainName(14),
                'loopback' => $faker->ipv4,
                'mac_address' => $faker->macAddress,           
                'user_id' => '1', 
            ]);
        }
    }
}