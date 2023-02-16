<?php

namespace Database\Seeders;
use App\Models\Contact;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactOne= Contact::create(['address' => 'Okara', 'phone' => '3456789', 'teacher_id' => '1']);
        $contactTwo= Contact::create(['address' => 'lahore', 'phone' => '45678', 'teacher_id' => '2']);
    }
}
