<?php

namespace Database\Seeders;

use App\Models\Ioc;
use App\Models\SitePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            
            'name' => 'Ioc Pre-sale',
            'created_at' => null,
            'updated_at' => null,
        ];

        SitePage::firstOrCreate(
            ['name' => $data['name']],
            [ 
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at'],
            ]
        );

        $this->command->info('Record seeded successfully!');
    }
}
