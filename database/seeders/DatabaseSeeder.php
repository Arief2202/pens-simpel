<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\DosenSeeder;
use Database\Seeders\ProdiSeeder;
use Database\Seeders\SkemaSeeder;
use Database\Seeders\PenelitianSeeder;
use Database\Seeders\AnnouncementSeeder;
use Database\Seeders\DosenPenelitianSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProdiSeeder::class,
            DosenSeeder::class,
            PenelitianSeeder::class,
            SkemaSeeder::class,
            DosenPenelitianSeeder::class,
            AnnouncementSeeder::class,
        ]);
    }
}
