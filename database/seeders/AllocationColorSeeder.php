<?php

namespace Database\Seeders;

use App\Models\Allocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllocationColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $colors = ['#2C3C8D', '#D91FE9', '#03A9EB', '#33FF57', '#FF33A6', '#338AFF', '#FF5733'];

        // Fetch all allocations
        $allocations = Allocation::all();

        foreach ($allocations as $key => $allocation) {
            $color = $colors[$key % count($colors)];  // Rotate colors
            DB::table('allocations')
                ->where('id', $allocation->id)
                ->update(['color' => $color]);
        }
    }
}
