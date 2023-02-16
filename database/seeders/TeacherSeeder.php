<?php

namespace Database\Seeders;
use App\Models\Teacher;

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacherOne= Teacher::create(['name' => 'saba', 'email' => 'sabapervaz991@gmail.com']);
        $teacherTwo= Teacher::create(['name' => 'sehar', 'email' => 'sehar@gmail.com']);
    }
}
