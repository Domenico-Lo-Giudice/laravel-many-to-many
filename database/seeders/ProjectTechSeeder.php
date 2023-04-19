<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tech;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $projects = Project::all()->pluck('id');
        $teches = Tech::all()->pluck('id');

        for($i = 0; $i < 40; $i++) {
            $project = Project::find($faker->randomElement($projects));
            $project->teches()->attach($faker->randomElement($teches));
        }
    }
}
