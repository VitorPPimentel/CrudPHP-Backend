<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Project;
use \App\Models\User;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Project::create([
            'name'          => 'project1',
            'start_date'    => now(),
            'end_date'      => now()->addDays(7),
            'status'        => 'Active',
            'value'         => 1000.0,
            'creator'       => User::factory()->create()->id,
        ]);
        Project::create([
            'name'          => 'project2',
            'start_date'    => now(),
            'end_date'      => now()->addDays(10),
            'status'        => 'Active',
            'value'         => 2000.0,
            'creator'       => User::factory()->create()->id,
        ]);
        Project::create([
            'name'          => 'project3',
            'start_date'    => now(),
            'end_date'      => now()->addDays(70),
            'status'        => 'Inactive',
            'value'         => 1000.0,
            'creator'       => User::factory()->create()->id,
        ]);
    }
}
