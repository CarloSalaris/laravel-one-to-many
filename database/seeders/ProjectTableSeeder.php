<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\User;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project :: factory() -> count(10) -> make();

        foreach ($projects as $project) {

            $user = User :: inRandomOrder() -> first();

            $project -> user_id = $user -> id;
            $project -> save();
        }
    }
}
