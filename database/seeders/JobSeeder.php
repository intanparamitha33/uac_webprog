<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobNames = [
            "Software Development",
            "Data Science",
            "Digital Marketing",
            "Graphic Design",
            "Project Management",
            "Web Programming",
            "Cyber Security"
        ];

        foreach ($jobNames as $jobName) {
            Job::create([
                "jobName" => $jobName,
            ]);
        }
    }
}
