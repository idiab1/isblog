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
                "name" => "Software Development"
            ],
            [
                "name" => "Back-end Development"
            ],
            [
                "name" => "Front-end Development"
            ],
            [
                "name" => "Web Development"
            ],
            [
                "name" => "Mobile Development"
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }

    }
}
