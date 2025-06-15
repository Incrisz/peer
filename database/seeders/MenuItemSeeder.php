<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Models\MenuItem;

class MenuItemSeeder extends Seeder
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
                "menu_id" => 1,
                "title" => "Contact",
                "url" => env("APP_URL") . "/admin/contacts",
                "target" => "_self",
                "icon_class" => "voyager-people",
                "order" => 16,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "menu_id" => 1,
                "title" => "Site Builder",
                "url" => env("APP_URL") . "/admin/pages",
                "target" => "_self",
                "icon_class" => "voyager-news",
                "order" => 17,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ];
        MenuItem::insert($data);
    }
}
