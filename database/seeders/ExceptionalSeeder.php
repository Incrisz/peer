<?php

namespace Database\Seeders;

use App\Models\Exceptional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExceptionalSeeder extends Seeder
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
                "title" => "With exceptionally low fees and impressively user-friendly interfaces Peernetics makes it easy for any business to get started with crypto.",
                "description" => "With exceptionally low fees and impressively user-friendly interfaces Peernetics makes it easy for any business to get started with crypto."
            ]
        ];

        Exceptional::insert($data);
    }
}
