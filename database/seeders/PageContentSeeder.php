<?php

namespace Database\Seeders;

use App\Models\AboutSecond;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutPageSeeder::class);
    }
}
