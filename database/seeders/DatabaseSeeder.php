<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            StudentSeeder::class,
            TeacherSeeder::class,
            EnrollmentSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}
