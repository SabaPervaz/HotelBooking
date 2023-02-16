<?php

namespace Database\Seeders;

use App\Models\ContactInformation;
use Illuminate\Database\Seeder;

class ContactInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ContactInformation::create([

            'pincode' => '54678',
            'near_by' => 'lahaore',
            'extra_detail' => 'extra detail',
            'tel_no' => '4576890',
            'contact_id'=> 1,



        ]);

     ContactInformation::create([

            'pincode' => '54678',
            'near_by' => 'lahaore',
            'extra_detail' => 'extra detail',
            'tel_no' => '4576890',
            'contact_id'=>2,



        ]);

       ContactInformation::create([

            'pincode' => '54678',
            'near_by' => 'lahaore',
            'extra_detail' => 'extra detail',
            'tel_no' => '4576890',
            'contact_id'=> 3,



        ]);

      ContactInformation::create([

            'pincode' => '54678',
            'near_by' => 'lahaore',
            'extra_detail' => 'extra detail',
            'tel_no' => '4576890',
            'contact_id'=>4,



        ]);
    }
}
