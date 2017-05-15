<?php

    use App\Role;
    use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        Role::create([
            'name'   => 'teacher'
        ]);

        Role::create([
            'name'   => 'school'
        ]);
        Role::create([
            'name'   => 'student'
        ]);
        Role::create([
            'name'   => 'business'
        ]);
        Role::create([
            'name'   => 'administrator'
        ]);
    }
}
