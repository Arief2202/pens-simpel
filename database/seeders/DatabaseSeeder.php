<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Dosen;
use App\Models\DosenPenelitian;
use App\Models\Prodi;
use App\Models\Skema;
use App\Models\Penelitian;
use App\Models\Pengumuman;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        Prodi::create([
            "nama" => "D3 Teknik Informatika"
        ]);
        Prodi::create([
            "nama" => " D3 Teknik Komputer"
        ]);
        // Prodi::create([
        //     "nama" => "D4 Teknik Informatika"
        // ]);

        // Prodi::create([
        //     "nama" => "Teknik Elektronika"
        // ]);
        // Prodi::create([
        //     "nama" => "Teknik Mekatronika"
        // ]);
        // Prodi::create([
        //     "nama" => "Sistem Pembangkit Energi"
        // ]);

        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 123451,
            "gender" => 'perempuan',
            "nama" => "Desy Permatasari",
            'role' => 'dosen',
            "email" => "desy@gmail.com",
            "password" => bcrypt('1234'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 123452,
            "gender" => 'laki-laki',
            "nama" => "Andhik Ampuh",
            'role' => 'dosen',
            "email" => "andhik@gmail.com",
            "password" => bcrypt('1234'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 2,
            "NIP" => 123453,
            "nama" => "Umi Sa'adah",
            'role' => 'dosen',
            "gender" => 'perempuan',
            "email" => "andhik@gmail.com",
            "password" => bcrypt('1234'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 2,
            "NIP" => 123456789012345671,
            "nama" => "Dosen Biasa",
            'role' => 'p3m',
            "gender" => 'laki-laki',
            "email" => "dosen@gmail.com",
            "password" => bcrypt('dosen'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);


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



        Penelitian::create([
            "prodi_id" => 2,
            'dosen_id' => 1,
            "skema_id" => 1,
            "judul" => "Perancangan Sistem Manajemen Rumah Sakit Berbasis Web",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2020-01-10'),
            "tahun" => Carbon::parse('2020-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => 1,
            'dosen_id' => 2,
            "skema_id" => 2,
            "judul" => "Rancang Bangun Aplikasi Alat Musik Kolintang Menggunakan Augmented Reality Berbasis Android",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2019-01-10'),
            "tahun" => Carbon::parse('2019-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => 2,
            'dosen_id' => 3,
            "skema_id" => 3,
            "judul" => "Pemetaan Daerah Ancaman Tanah Longsor di Kota Manado",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2021-01-10'),
            "tahun" => Carbon::parse('2021-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => 2,
            'dosen_id' => 1,
            "skema_id" => 4,
            "judul" => "Rancang Bangun Aplikasi Bimbingan Dosen Wali Secara Online",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2022-01-10'),
            "tahun" => Carbon::parse('2022-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => 1,
            'dosen_id' => 2,
            "skema_id" => 1,
            "judul" => "Alat Peraga Digital Pengenalan Pahlawan Sulawesi Utara",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2019-01-10'),
            "tahun" => Carbon::parse('2019-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => 1,
            'dosen_id' => 1,
            "skema_id" => 1,
            "judul" => "Perancangan Aplikasi Web Berbasis Usability",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2020-01-10'),
            "tahun" => Carbon::parse('2020-01-12')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => 1,
            'dosen_id' => 3,

            "skema_id" => 2,
            "judul" => "Aplikasi Agenda Berbasis Android Dengan Fitur Push Notification Dan Reminder",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2022-01-10'),
            "tahun" => Carbon::parse('2022-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "dosen_id" => 2,
            "prodi_id" => 1,
            "skema_id" => 3,
            "judul" => "Mendeteksi Keakuratan Metode Noise Salt And Pepper Dengan Median Filter",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2020-02-10'),
            "tahun" => Carbon::parse('2020-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "dosen_id" => 3,
            "prodi_id" => 1,
            "skema_id" => 1,
            "judul" => "Pengembangan Aplikasi Modul Pembelajaran Desain Grafis Berbasis Android",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2021-01-10'),
            "tahun" => Carbon::parse('2021-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "dosen_id" => 1,
            "prodi_id" => 1,
            "skema_id" => 2,
            "judul" => "Penerapan Metode Jaringan Syaraf Tiruan Pada Sistem Deteksi Citra Darah Manusia",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2020-01-10'),
            "tahun" => Carbon::parse('2020-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "dosen_id" => 2,
            "prodi_id" => 1,
            "skema_id" => 3,
            "judul" => "Sistem Informasi Pemasaran Rumah Berbasis Web Gis",
            "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
            "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "rekayasa perangkat lunak",
            "tanggal" => Carbon::parse('2022-01-10'),
            "tahun" => Carbon::parse('2022-01-10')->format('Y'),
        ]);
        // Penelitian::create([
        //     "dosen_id" => 2,
        //     "prodi_id" => 3,
        //     "skema_id" => 3,
        //     "judul" => "obat tetes mata",
        //     "rumpun_ilmu" => "Rekayasa Perangkat Lunak",
        //     "abstrak" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti inventore quibusdam reprehenderit fugit dignissimos explicabo, dolor veritatis exercitationem perferendis? Reiciendis, eos aspernatur assumenda fugiat molestiae ducimus dicta ab iste, voluptate obcaecati perspiciatis dignissimos nemo enim eum repudiandae vitae, delectus quas harum ullam iusto repellat sed aut maiores aperiam. Quas, aut?",
        //     "keyword" => "Kepuasan",
        //     "latar_belakang" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur veniam animi praesentium iusto dolore, molestiae rem cupiditate commodi amet!",
        //     "tujuan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
        //     "tinjau_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
        //     "metode" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
        //     "daftar_pustaka" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint. Nulla voluptates aliquam perspiciatis vero.",
        //     "lama_kgtn" => "1 tahun",
        //     "thn_pekerjaan" => "ke-1",
        //     "grp_riset" => "rekayasa perangkat lunak",
        //     "tanggal" => Carbon::parse('2022-01-10'),
        //     "tahun" => Carbon::parse('2022-01-10')->format('Y'),
        // ]);
        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 1,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 1,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 3,
            "penelitian_id" => 1,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 4,
            "penelitian_id" => 1,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 2,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 2,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 4,
            "penelitian_id" => 2,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 3,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 3,
            "penelitian_id" => 3,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 3,
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
            "dosen_id" => 4,
            "penelitian_id" => 5,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 3,
            "penelitian_id" => 5,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 5,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 6,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 6,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 4,
            "penelitian_id" => 7,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 3,
            "penelitian_id" => 7,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 7,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 8,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 8,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 9,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 3,
            "penelitian_id" => 9,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 4,
            "penelitian_id" => 9,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 10,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 3,
            "penelitian_id" => 10,
        ]);

        DosenPenelitian::create([
            "dosen_id" => 1,
            "penelitian_id" => 11,
        ]);
        Announcement::create([
            'dosen_id' => 4,
            'judul' => 'Pengumuman Hasil Seleksi Penelitian dan Pengabdian kepada Masyarakat Gelombang 2 PENS 2022',
            'gambar' => '../img/pens.jpg',
            'isi' => 'Seleksi Proposal Penelitian Gelombang 2 untuk skema Hibah Politeknik Elektronika Negeri Surabaya Tahun 2022 telah selesai dilakukan. Berikut terlampir daftar proposal yang telah dinyatakan lolos seleksi oleh Reviewer. Kami mengucapkan selamat kepada para peneliti yang berhasil mendapatkan pendanaan',
            'tanggal' => Carbon::parse('2020-01-10')->isoFormat('D MMMM Y'),
        ]);
        Announcement::create([
            'dosen_id' => 4,
            'judul' => 'Perpanjangan penerimaan proposal Upgrading Tugas Akhir s.d Tanggal 24 Mei 2022 Pukul 23.59',
            'gambar' => '../img/pens.jpg',
            'isi' => 'Perpanjangan penerimaan proposal Upgrading Tugas Akhir s.d Tanggal 24 Mei 2022 Pukul 23.59. Panduan dan template dapat diunduh pada dashboard setelah login SIMPEL',
            'tanggal' => Carbon::parse('2020-01-10')->isoFormat('D MMMM Y'),
        ]);
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 11,
        ]);
    }
}
