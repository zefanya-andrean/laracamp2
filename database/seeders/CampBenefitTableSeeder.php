<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstak'
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline COurse'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos'
            ],
            
        ];

        CampBenefit::insert($campBenefits);
    }
}
