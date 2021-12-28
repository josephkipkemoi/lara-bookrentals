<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Balance\Models\Balance;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Balance::factory()->create();
    }
}
