<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Default data
        return Setting::create([
            "name" => "IsBlog",
            "linkedin_url" => "https://www.linkedin.com/in/islam-diab-47b98b176/",
            "github_url" => "https://github.com/islamdiab-stack",

        ]);
    }
}
