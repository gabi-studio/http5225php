<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Student; // this is the student model you created
use App\Models\Course; // this is the course model you created
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// by default, it created a student seeder file, but when projects get bigger,
// it's easier to put all the seeders in one file (like this one)

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // this is hardcoded data
        // you would only usually hardcode an admin user
        // this is hardcoded data to add a user to the database
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // this is using the student factory
        // this will create 10 students
        // this is a more programmatic way to create data
        // you can also use the factory to create a specific number of students

        Student::factory(10)->create();

        Course::factory(10)->create();
    }
}
