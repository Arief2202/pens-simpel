<?php

namespace Database\Seeders;

use App\Models\DosenPenelitian;
use Illuminate\Database\Seeder;

class DosenPenelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 1,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 3,
            "penelitian_id" => 1,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 2,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 3,
            "penelitian_id" => 2,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 4,
            "penelitian_id" => 3,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 6,
            "penelitian_id" => 3,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 4,
            "penelitian_id" => 4,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 4,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 5,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 5,
        ]);
    }
}
