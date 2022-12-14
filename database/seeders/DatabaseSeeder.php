<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\ContentBlog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Education::truncate();
        User::truncate();
        Type::truncate();
        Project::truncate();
        Skill::truncate();
        ContentBlog::truncate();
        
        Skill::factory()->count(2)->create();
        ContentBlog::factory()->count(2)->create();
        Education::factory()->count(2)->create();
        User::factory()->count(2)->create();
        Type::factory()->count(2)->create();
        Project::factory()->count(4)->create();
            
    }
}
