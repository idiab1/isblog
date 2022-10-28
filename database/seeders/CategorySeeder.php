<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Software Development",
                "slug" => "software-development"
            ],
            [
                "name" => "Back-end Development",
                "slug" => "back-end-development"
            ],
            [
                "name" => "Front-end Development",
                "slug" => "front-end-development"
            ],
            [
                "name" => "Web Development",
                "slug" => "web-development"
            ],
            [
                "name" => "Mobile Development",
                "slug" => "mobile-development"
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }

    }
}
