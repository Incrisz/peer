<?php

namespace Database\Seeders;

use App\Models\QuestionItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionItemSeeder extends Seeder
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
                "title" => "For existing clients",
                "description" => "<p>If you already have an account please sign in and use our ticket system</p>",
                "link_text" => "Get 24/7 Support",
                "link" => "login",
                "icon" => "images/existing-client-icon.svg",
            ],
            [
                "title" => "For new clients",
                "description" => "<p>Please leave your enquiry and our Business Development
                team will contact you shortly</p>",
                "link_text" => "Contact BD team",
                "link" => env('APP_URL') . "/contact-us",
                "icon" => "images/new-client-icon.svg",
            ],
        ];

        QuestionItem::insert($data);
    }
}
