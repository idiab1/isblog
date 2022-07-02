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
                "name" => "react"
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
                "name" => "node"
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
                "name" => "angular"
            ],
            [
                "name" => "opensource"
            ],
            [
                "name" => "vue"
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
                "name" => "nextjs"
            ],
            [
                "name" => "cpp"
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
                "name" => "ux"
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
                "name" => "a11y"
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
                "name" => "remote"
            ],
            [
                "name" => "terraform"
            ],

        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag['name']
            ]);
        }
    }
}
