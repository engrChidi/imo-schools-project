<?php

use Illuminate\Database\Seeder;
use App\LGA;

class LocalGovernmentTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lga = new LGA([
            'name'  =>  '',
            'stateId'   =>  1
        ]);

    }
}
