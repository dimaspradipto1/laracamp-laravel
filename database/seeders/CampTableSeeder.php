<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                "title" => "Gila Belajar",
                "slug" => "gila-belajar",
                "price" =>280,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Baru Mulai",
                "slug" => "baru-mulai",
                "price" =>140,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];

        foreach ($camps as $camp) {
            Camp::create($camp);
        }
    }
}
