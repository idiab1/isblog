<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            "name" => "Islam diab",
            "email" => "islamdiab@test.com",
            "password" => Hash::make(123456789),
            "image" => "default.png",
            "facebook_url" => "https://www.facebook.com/islamdiab967",
            "twitter_url" => "https://twitter.com/IslamDiab99",
            "linkedin_url" => "https://www.linkedin.com/in/islam-diab-47b98b176/",
            "github_url" => "https://github.com/islamdiab-stack",
        ]);
    }
}
