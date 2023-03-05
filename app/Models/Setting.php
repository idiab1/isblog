<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ["name", "linkedin_url", "github_url"];

    public static function checkSettings()
    {
        $settings = self::all();

        if(count($settings) < 1)
        {
            self::create([
                "name" => "IsBlog",
                "linkedin_url" => "https://www.linkedin.com/in/islam-diab-47b98b176/",
                "github_url" => "https://github.com/islamdiab-stack",
            ]);
        }

        return self::first();
    }
}
