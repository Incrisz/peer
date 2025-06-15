<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
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
                'title' => '<p>Have a <span data-animated="fadeInUp">question?</span></p>',
                'description' => "<p class='font18'>Have a question? Head over to our FAQ
                or<br>reach out to us via our ticket system or<br>contact form.
                We're here to help!
            </p>",
            ],

        ];

        Question::insert($data);
    }
}
