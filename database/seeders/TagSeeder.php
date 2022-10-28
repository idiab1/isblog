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
        // $tags = [
        //     [
        //         "name" => 'Javascript',
        //         "slug" => "javascript"
        //     ],
        //     [
        //         "name" => "webdev",
        //         "slug" => "webdev"
        //     ],
        //     [
        //         "name" => "beginners",
        //         "slug" => "beginners"
        //     ],
        //     [
        //         "name" => "React.js",
        //         "slug" => "reactjs"
        //     ],
        //     [
        //         "name" => "programming",
        //         "slug" => "programming"
        //     ],
        //     [
        //         "name" => "tutorial",
        //         "slug" => "tutorial"
        //     ],
        //     [
        //         "name" => "Python",
        //         "slug" => "python"
        //     ],
        //     [
        //         "name" => "CSS",
        //         "slug" => "css"
        //     ],
        //     [
        //         "name" => "Codenewbie",
        //         "slug" => "codenewbie"
        //     ],
        //     [
        //         "name" => "Node.js",
        //         "slug" => "nodejs"
        //     ],
        //     [
        //         "name" => "html",
        //         "slug" => "html"
        //     ],
        //     [
        //         "name" => "Devops",
        //         "slug" => "devops"
        //     ],
        //     [
        //         "name" => "productivity",
        //         "slug" => "productivity"
        //     ],
        //     [
        //         "name" => "career",
        //         "slug" => "career"
        //     ],
        //     [
        //         "name" => "AWS",
        //         "slug" => "aws"
        //     ],
        //     [
        //         "name" => "Android",
        //         "slug" => "android"
        //     ],
        //     [
        //         "name" => "Type Script",
        //         "slug" => "typescript"
        //     ],
        //     [
        //         "name" => "Java",
        //         "slug" => "java"
        //     ],
        //     [
        //         "name" => "Github",
        //         "slug" => "github"
        //     ],
        //     [
        //         "name" => "PHP",
        //         "slug" => "php"
        //     ],
        //     [
        //         "name" => "Security",
        //         "slug" => "security"
        //     ],
        //     [
        //         "name" => "Linux",
        //         "slug" => "linux"
        //     ],
        //     [
        //         "name" => "Testing",
        //         "slug" => "testing"
        //     ],
        //     [
        //         "name" => "Docker",
        //         "slug" => "docker"
        //     ],
        //     [
        //         "name" => "Angular.js",
        //         "slug" => "angularjs"
        //     ],
        //     [
        //         "name" => "open source",
        //         "slug" => "opensource"
        //     ],
        //     [
        //         "name" => "vue.js",
        //         "slug" => "vuejs"
        //     ],
        //     [
        //         "name" => "cloud",
        //         "slug" => "cloud"
        //     ],
        //     [
        //         "name" => "machine learning",
        //         "slug" => "machinelearning"
        //     ],
        //     [
        //         "name" => "Git",
        //         "slug" => "git"
        //     ],
        //     [
        //         "name" => "Database",
        //         "slug" => "database"
        //     ],
        //     [
        //         "name" => "Computer Science",
        //         "slug" => "computerscience"
        //     ],
        //     [
        //         "name" => "archlinux",
        //         "slug" => "archlinux"
        //     ],
        //     [
        //         "name" => "Laravel",
        //         "slug" => "laravel"
        //     ],
        //     [
        //         "name" => "100daysofcode",
        //         "slug" => "100daysofcode"
        //     ],
        //     [
        //         "name" => "Data science",
        //         "slug" => "datascience"
        //     ],
        //     [
        //         "name" => ".Net",
        //         "slug" => "dotnet"
        //     ],
        //     [
        //         "name" => "C#",
        //         "slug" => "csharp"
        //     ],
        //     [
        //         "name" => "kubernetes",
        //         "slug" => "kubernetes"
        //     ],
        //     [
        //         "name" => "codepen",
        //         "slug" => "codepen"
        //     ],
        //     [
        //         "name" => "Ruby",
        //         "slug" => "ruby"
        //     ],
        //     [
        //         "name" => "Flutter",
        //         "slug" => "flutter"
        //     ],
        //     [
        //         "name" => "Go Lang",
        //         "slug" => "go-lang"
        //     ],
        //     [
        //         "name" => "Algorithms",
        //         "slug" => "algorithms"
        //     ],
        //     [
        //         "name" => "React Native",
        //         "slug" => "reactnative"
        //     ],
        //     [
        //         "name" => "SQL",
        //         "slug" => "sql"
        //     ],
        //     [
        //         "name" => "Azure",
        //         "slug" => "azure"
        //     ],
        //     [
        //         "name" => "VScode",
        //         "slug" => "vscode"
        //     ],
        //     [
        //         "name" => "architecture",
        //         "slug" => "architecture"
        //     ],
        //     [
        //         "name" => "IOS",
        //         "slug" => "ios"
        //     ],
        //     [
        //         "name" => "Django",
        //         "slug" => "django"
        //     ],
        //     [
        //         "name" => "Wordpress",
        //         "slug" => "wordpress"
        //     ],
        //     [
        //         "name" => "Coding",
        //         "slug" => "coding"
        //     ],
        //     [
        //         "name" => "Next.js",
        //         "slug" => "nextjs"
        //     ],
        //     [
        //         "name" => "challenges",
        //         "slug" => "challenges"
        //     ],
        //     [
        //         "name" => "Development",
        //         "slug" => "development"
        //     ],
        //     [
        //         "name" => "Game Develeopment",
        //         "slug" => "gamedev"
        //     ],
        //     [
        //         "name" => "Kotlin",
        //         "slug" => "kotlin"
        //     ],
        //     [
        //         "name" => "UI/UX",
        //         "slug" => "ui-ux"
        //     ],
        //     [
        //         "name" => "Code Quality",
        //         "slug" => "codequality"
        //     ],
        //     [
        //         "name" => "Performance",
        //         "slug" => "performance"
        //     ],
        //     [
        //         "name" => "Redux",
        //         "slug" => "redux"
        //     ],
        //     [
        //         "name" => "Frontend",
        //         "slug" => "frontend"
        //     ],
        //     [
        //         "name" => "Backend",
        //         "slug" => "backend"
        //     ],
        //     [
        //         "name" => "graphql",
        //         "slug" => "GraphQL"
        //     ],
        //     [
        //         "name" => "API",
        //         "slug" => "api"
        //     ],
        //     [
        //         "name" => "MongoDB",
        //         "slug" => "mongodb"
        //     ],
        //     [
        //         "name" => "Firebase",
        //         "slug" => "firebase"
        //     ],
        //     [
        //         "name" => "Functional",
        //         "slug" => "functional"
        //     ],
        //     [
        //         "name" => "TailwindCSS",
        //         "slug" => "tailwindcss"
        //     ],
        //     [
        //         "name" => "Rust",
        //         "slug" => "rust"
        //     ],
        //     [
        //         "name" => "Dart",
        //         "slug" => "dart"
        //     ],
        //     [
        //         "name" => "Agile",
        //         "slug" => "agile"
        //     ],
        //     [
        //         "name" => "Webpack",
        //         "slug" => "webpack"
        //     ],
        //     [
        //         "name" => "Deep Learning",
        //         "slug" => "deep-learning"
        //     ],
        //     [
        //         "name" => "Deno",
        //         "slug" => "denojs"
        //     ],
        // ];

        $tags = [
            [
                "name" => 'Javascript'
            ],
            [
                "name" => "webdev"
            ],
            [
                "name" => "beginners"
            ],
            [
                "name" => "React.js"
            ],
            [
                "name" => "programming"
            ],
            [
                "name" => "tutorial"
            ],
            [
                "name" => "Python"
            ],
            [
                "name" => "CSS"
            ],
            [
                "name" => "Codenewbie"
            ],
            [
                "name" => "Node.js"
            ],
            [
                "name" => "html"
            ],
            [
                "name" => "Devops"
            ],
            [
                "name" => "productivity"
            ],
            [
                "name" => "career"
            ],
            [
                "name" => "AWS"
            ],
            [
                "name" => "Android"
            ],
            [
                "name" => "Type Script"
            ],
            [
                "name" => "Java"
            ],
            [
                "name" => "Github"
            ],
            [
                "name" => "PHP"
            ],
            [
                "name" => "Security"
            ],
            [
                "name" => "Linux"
            ],
            [
                "name" => "Testing"
            ],
            [
                "name" => "Docker"
            ],
            [
                "name" => "Angular.js"
            ],
            [
                "name" => "open source"
            ],
            [
                "name" => "vue.js"
            ],
            [
                "name" => "cloud"
            ],
            [
                "name" => "machine learning"
            ],
            [
                "name" => "Git"
            ],
            [
                "name" => "Database"
            ],
            [
                "name" => "Computer Science"
            ],
            [
                "name" => "archlinux"
            ],
            [
                "name" => "Laravel"
            ],
            [
                "name" => "100daysofcode"
            ],
            [
                "name" => "Data science"
            ],
            [
                "name" => ".Net"
            ],
            [
                "name" => "C#"
            ],
            [
                "name" => "kubernetes"
            ],
            [
                "name" => "codepen"
            ],
            [
                "name" => "Ruby"
            ],
            [
                "name" => "Flutter"
            ],
            [
                "name" => "Go Lang"
            ],
            [
                "name" => "Algorithms"
            ],
            [
                "name" => "React Native"
            ],
            [
                "name" => "SQL"
            ],
            [
                "name" => "Azure"
            ],
            [
                "name" => "VScode"
            ],
            [
                "name" => "architecture"
            ],
            [
                "name" => "IOS"
            ],
            [
                "name" => "Django"
            ],
            [
                "name" => "Wordpress"
            ],
            [
                "name" => "Coding"
            ],
            [
                "name" => "Next.js"
            ],
            [
                "name" => "challenges"
            ],
            [
                "name" => "Development"
            ],
            [
                "name" => "Game Develeopment"
            ],
            [
                "name" => "Kotlin"
            ],
            [
                "name" => "UI/UX"
            ],
            [
                "name" => "Code Quality"
            ],
            [
                "name" => "Performance"
            ],
            [
                "name" => "Redux"
            ],
            [
                "name" => "Frontend"
            ],
            [
                "name" => "Backend"
            ],
            [
                "name" => "graphql"
            ],
            [
                "name" => "API"
            ],
            [
                "name" => "MongoDB"
            ],
            [
                "name" => "Firebase"
            ],
            [
                "name" => "Functional"
            ],
            [
                "name" => "TailwindCSS"
            ],
            [
                "name" => "Rust"
            ],
            [
                "name" => "Dart"
            ],
            [
                "name" => "Agile"
            ],
            [
                "name" => "Webpack"
            ],
            [
                "name" => "Deep Learning"
            ],
            [
                "name" => "Deno"
            ],
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag['name'],
                // 'slug' => $tag['slug']
            ]);
        }
    }
}
