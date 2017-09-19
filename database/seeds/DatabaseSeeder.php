<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleSeeder::class);
         $this->call(UsersTableDataSeeder::class);
         $this->call(StateSeeder::class);
         $this->call(LocalGovernmentTableDataSeeder::class);
    }
}
