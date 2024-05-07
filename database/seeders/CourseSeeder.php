<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['title' => 'M3 - Programming', 'description' => 'DAW Programming 2', 'teacher_id' => 5],
            ['title' => 'M6 - Web Development in Client Environment', 'description' => 'DAW Web dev client env', 'teacher_id' => 3],
            ['title' => 'M7 - Web Development in Server Environment', 'description' => 'DAW Web dev server env', 'teacher_id' => 2],
            ['title' => 'M8 - Web Application Deployment', 'description' => 'DAW Web app deploy', 'teacher_id' => 4],
            ['title' => 'M9 - Web Interface Design', 'description' => '', 'teacher_id' => 2],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
