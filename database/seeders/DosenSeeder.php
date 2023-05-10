<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 123456789012350001,
            "gender" => 'perempuan',
            "nama" => "Desy Permatasari",
            'role' => 'dosen',
            "email" => "desy@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 12345678901239902,
            "gender" => 'laki-laki',
            "nama" => "Iwan Syarif",
            'role' => 'dosen',
            "email" => "iwan@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 12345678901235903,
            "gender" => 'perempuan',
            "nama" => "Tessy Badriyah",
            'role' => 'dosen',
            "email" => "tessy@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 1234567890128980004,
            "gender" => 'laki-laki',
            "nama" => "Andhik Ampuh Yunanto",
            'role' => 'p3m',
            "email" => "andhik@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 1234567890189650005,
            "gender" => 'perempuan',
            "nama" => "Umi Sa'adah",
            'role' => 'dosen',
            "email" => "umi@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 2,
            "NIP" => 145671038012350006,
            "gender" => 'perempuan',
            "nama" => "Lohdy Diana",
            'role' => 'dosen',
            "email" => "diana@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 2,
            "NIP" => 133456787852350007,
            "gender" => 'laki-laki',
            "nama" => "Erik Tridianto",
            'role' => 'dosen',
            "email" => "erik@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 2,
            "NIP" => 1238929042350008,
            "gender" => 'laki-laki',
            "nama" => "Mochamad Mobed Bachtiar",
            'role' => 'dosen',
            "email" => "mobed@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 2,
            "NIP" => 1514562792350009,
            "gender" => 'laki-laki',
            "nama" => "Aliv Faizal Muhammad",
            'role' => 'dosen',
            "email" => "aliv@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 1234567500010,
            "gender" => 'laki-laki',
            "nama" => "Fadilah Fahrul Hardiansyah",
            'role' => 'dosen',
            "email" => "aliv@gmail.com",
            "password" => bcrypt('password'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        // Dosen::create([
        //     "prodi_id" => 1,
        //     "NIP" => 123451,
        //     "gender" => 'perempuan',
        //     "nama" => "Desy Permatasari",
        //     'role' => 'dosen',
        //     "email" => "desy@gmail.com",
        //     "password" => bcrypt('1234'),
        //     "no_telp" => 87172,
        //     "alamat" => "Surabaya",
        // ]);
        // Dosen::create([
        //     "prodi_id" => 1,
        //     "NIP" => 123452,
        //     "gender" => 'laki-laki',
        //     "nama" => "Andhik Ampuh",
        //     'role' => 'dosen',
        //     "email" => "andhik@gmail.com",
        //     "password" => bcrypt('1234'),
        //     "no_telp" => 87172,
        //     "alamat" => "Surabaya",
        // ]);
        // Dosen::create([
        //     "prodi_id" => 2,
        //     "NIP" => 123453,
        //     "nama" => "Umi Sa'adah",
        //     'role' => 'dosen',
        //     "gender" => 'perempuan',
        //     "email" => "andhik@gmail.com",
        //     "password" => bcrypt('1234'),
        //     "no_telp" => 87172,
        //     "alamat" => "Surabaya",
        // ]);
        // Dosen::create([
        //     "prodi_id" => 2,
        //     "NIP" => 123456789012350001,
        //     "nama" => "Dosen Biasa",
        //     'role' => 'p3m',
        //     "gender" => 'laki-laki',
        //     "email" => "dosen@gmail.com",
        //     "password" => bcrypt('dosen'),
        //     "no_telp" => 87172,
        //     "alamat" => "Surabaya",
        // ]);
        // Dosen::create([
        //     "prodi_id" => 1,
        //     "NIP" => 123456789012310002,
        //     "nama" => "Adam P3M",
        //     'role' => 'p3m',
        //     "gender" => 'laki-laki',
        //     "email" => "adamp3m@gmail.com",
        //     "password" => bcrypt('password'),
        //     "no_telp" => 871728989,
        //     "alamat" => "Surabaya",
        // ]);
    }
}
