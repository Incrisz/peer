<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Banner',
                'page_id' => 1,
                'position' => 1,
            ],
            [
                'name' => 'Section 2',
                'page_id' => 1,
                'position' => 2,
            ],
            [
                'name' => 'Section 3',
                'page_id' => 1,
                'position' => 3,
            ],
            [
                'name' => 'Section 4',
                'page_id' => 1,
                'position' => 4,
            ],
            [
                'name' => 'Section 5',
                'page_id' => 1,
                'position' => 5,
            ],
            [
                'name' => 'Blogs',
                'page_id' => 1,
                'position' => 6,
            ],
            [
                'name' => 'Featured On',
                'page_id' => 1,
                'position' => 7,
            ],
            [
                'name' => 'Section 8',
                'page_id' => 1,
                'position' => 8,
            ],
        ];
        Section::insert($data);
    }
}
