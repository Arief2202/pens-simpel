<?php

namespace Database\Seeders;

use App\Models\Skema;
use Illuminate\Database\Seeder;

class SkemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Skema::create([
            "nama" => "Dasar",
        ]);
        Skema::create([
            "nama" => "Terapan",
        ]);
        Skema::create([
            "nama" => "Unggulan",
        ]);
        Skema::create([
            "nama" => "PLP",
        ]);
        Skema::create([
            "nama" => "Internasional",
        ]);
    }
}
