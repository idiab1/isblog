<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                "name" => 'javascript'
            ],
            [
                "name" => "webdev"
            ],
            [
                "name" => "beginners"
            ],
            [
                "name" => "react.js"
            ],
            [
                "name" => "programming"
            ],
            [
                "name" => "tutorial"
            ],
            [
                "name" => "python"
            ],
            [
                "name" => "css"
            ],
            [
                "name" => "codenewbie"
            ],
            [
                "name" => "node.js"
            ],
            [
                "name" => "html"
            ],
            [
                "name" => "devops"
            ],
            [
                "name" => "productivity"
            ],
            [
                "name" => "career"
            ],
            [
                "name" => "aws"
            ],
            [
                "name" => "android"
            ],
            [
                "name" => "discuss"
            ],
            [
                "name" => "typescript"
            ],
            [
                "name" => "java"
            ],
            [
                "name" => "github"
            ],
            [
                "name" => "php"
            ],
            [
                "name" => "showdev"
            ],
            [
                "name" => "security"
            ],
            [
                "name" => "linux"
            ],
            [
                "name" => "testing"
            ],
            [
                "name" => "docker"
            ],
            [
                "name" => "angular.js"
            ],
            [
                "name" => "opensource"
            ],
            [
                "name" => "vue.js"
            ],
            [
                "name" => "cloud"
            ],
            [
                "name" => "machinelearning"
            ],
            [
                "name" => "git"
            ],
            [
                "name" => "database"
            ],
            [
                "name" => "computerscience"
            ],
            [
                "name" => "archlinux"
            ],
            [
                "name" => "laravel"
            ],
            [
                "name" => "100daysofcode",
            ],
            [
                "name" => "datascience"
            ],
            [
                "name" => "dotnet"
            ],
            [
                "name" => "csharp"
            ],
            [
                "name" => "kubernetes"
            ],
            [
                "name" => "codepen"
            ],
            [
                "name" => "ruby"
            ],
            [
                "name" => "flutter"
            ],
            [
                "name" => "go"
            ],
            [
                "name" => "serverless"
            ],
            [
                "name" => "algorithms"
            ],
            [
                "name" => "startup"
            ],
            [
                "name" => "mobile"
            ],
            [
                "name" => "reactnative"
            ],
            [
                "name" => "rails"
            ],
            [
                "name" => "help"
            ],
            [
                "name" => "blockchain"
            ],
            [
                "name" => "sql"
            ],
            [
                "name" => "azure"
            ],
            [
                "name" => "vscode"
            ],
            [
                "name" => "architecture"
            ],
            [
                "name" => "news"
            ],
            [
                "name" => "ios"
            ],
            [
                "name" => "django"
            ],
            [
                "name" => "learning"
            ],
            [
                "name" => "wordpress"
            ],
            [
                "name" => "coding"
            ],
            [
                "name" => "next.js"
            ],
            [
                "name" => "challenge"
            ],
            [
                "name" => "development"
            ],
            [
                "name" => "gamedev"
            ],
            [
                "name" => "kotlin"
            ],
            [
                "name" => "ui/ux"
            ],
            [
                "name" => "codequality"
            ],
            [
                "name" => "performance"
            ],
            [
                "name" => "redux"
            ],
            [
                "name" => "frontend"
            ],
            [
                "name" => "backend"
            ],
            [
                "name" => "graphql"
            ],
            [
                "name" => "watercooler"
            ],
            [
                "name" => "api"
            ],
            [
                "name" => "npm"
            ],
            [
                "name" => "devjournal"
            ],
            [
                "name" => "mongodb"
            ],
            [
                "name" => "firebase"
            ],
            [
                "name" => "functional"
            ],
            [
                "name" => "writing"
            ],
            [
                "name" => "motivation"
            ],
            [
                "name" => "tailwindcss"
            ],
            [
                "name" => "rust"
            ],
            [
                "name" => "dart"
            ],
            [
                "name" => "bash"
            ],
            [
                "name" => "postgres"
            ],
            [
                "name" => "todayilearned"
            ],
            [
                "name" => "ai"
            ],
            [
                "name" => "ubuntu"
            ],
            [
                "name" => "code"
            ],
            [
                "name" => "technology"
            ],
            [
                "name" => "agile"
            ],
            [
                "name" => "webpack"
            ],
            [
                "name" => "deeplearning"
            ],
            [
                "name" => "deno"
            ],
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag['name']
            ]);
        }
    }
}
