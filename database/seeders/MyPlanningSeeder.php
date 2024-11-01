<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyPlan;

class MyPlanningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plannings = [
            ['day' => 'Senin', 'production_plan' => 4],
            ['day' => 'Selasa', 'production_plan' => 5],
            ['day' => 'Rabu', 'production_plan' => 1],
            ['day' => 'Kamis', 'production_plan' => 7],
            ['day' => 'Jumat', 'production_plan' => 6],
            ['day' => 'Sabtu', 'production_plan' => 4],
            ['day' => 'Minggu', 'production_plan' => 0],
        ];

        foreach ($plannings as $planning) {
            MyPlan::create($planning);
        }
    }
}
