<?php

use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\User::create([
                'usertype'  =>  'School',
                'first_name'    =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'email' =>  $faker->safeEmail,
                'gender'    =>  'female',
                'password'  =>  bcrypt('oluyemi'),
                'activated' =>  true,
                'isVerified'    =>  true,
                'reg_completed' =>  true
            ]);
        }


        for ($i = 0; $i < 10; $i++) {
            \App\User::create([
                'usertype'  =>  'Student',
                'first_name'    =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'email' =>  $faker->safeEmail,
                'gender'    =>  'male',
                'password'  =>  bcrypt('oluyemi'),
                'activated' =>  true,
                'isVerified'    =>  true,
                'reg_completed' =>  true
            ]);
        }


        for ($i = 0; $i < 10; $i++) {
            \App\User::create([
                'usertype'  =>  'Teacher',
                'first_name'    =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'email' =>  $faker->safeEmail,
                'gender'    =>  'female',
                'password'  =>  bcrypt('oluyemi'),
                'activated' =>  true,
                'isVerified'    =>  true,
                'reg_completed' =>  true
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            \App\User::create([
                'usertype'  =>  'Business',
                'first_name'    =>  $faker->firstName,
                'last_name' =>  $faker->lastName,
                'email' =>  $faker->safeEmail,
                'gender'    =>  'male',
                'password'  =>  bcrypt('oluyemi'),
                'activated' =>  true,
                'isVerified'    =>  true,
                'reg_completed' =>  true
            ]);
        }

        \Illuminate\Support\Facades\DB::table('users')->insert([
            'usertype'  =>  'Student',
            'first_name'    =>  'Oluyemi',
            'last_name' =>  'Damilola',
            'email' =>  'yemiwebby@gmail.com',
            'password'  =>  bcrypt('oluyemi'),
            'activated' =>  true,
            'isVerified'    =>  true,
            'reg_completed' =>  true
        ]);

//        for ($i = 0; $i < 10; $i++){
//            \Illuminate\Support\Facades\DB::table('users')->insert([
//                'usertype'  =>  'school',
//                'first_name'    =>  str_random(8),
//                'last_name' =>  str_random(8),
//                'email' =>  str_random(12).'@mail.com',
//                'password'  =>  bcrypt('oluyemi'),
//                'activated' =>  true,
//                'isVerified'    =>  true,
//                'reg_completed' =>  true
//            ]);
//        }
    }
}
