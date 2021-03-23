<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Status::create([
        	'status' => 'successful'
        ]);

        Status::create([
        	'status' => 'unsuccessful'
        ]);
    }
}
