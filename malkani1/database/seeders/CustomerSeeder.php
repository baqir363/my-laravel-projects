<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Faker
        $faker = Faker::create();
        for($i = 1; $i<=100; $i++)
        {
            $customer = new Customer;
            $customer->name= $faker->name;
            $customer->email= $faker->email;
            $customer->gender= "F";
            $customer->address= $faker->address;
            $customer->state= $faker->state;
            $customer->country= $faker->country;
            $customer->dob= $faker->date;
            $customer->password= $faker->password;
            $customer->save();
        }

        // Seeder

        // $customer->name = "Malkani";
        // $customer->email = "malkani@live.com";
        // $customer->gender= "M";
        // $customer->address= "dera ghazi khan";
        // $customer->state= "Punjab";
        // $customer->country= "Pakistan";
        // $customer->dob= now();
        // $customer->password= "1234456789";
        // $customer->save();
    }
}
