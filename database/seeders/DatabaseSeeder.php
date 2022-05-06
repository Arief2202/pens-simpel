<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\DosenPenelitian;
use App\Models\Prodi;
use App\Models\Skema;
use App\Models\Penelitian;
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
            "nama" => "Teknik Informatika"
        ]);
        Prodi::create([
            "nama" => "Teknik Komputer"
        ]);
        // Prodi::create([
        //     "nama" => "Teknik Elektro"
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
            "nama" => "Desy Permatasari",
            "email" => "desy@gmail.com",
            "password" => bcrypt('1234'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 1,
            "NIP" => 123452,
            "nama" => "Andhik Ampuh",
            "email" => "andhik@gmail.com",
            "password" => bcrypt('1234'),
            "no_telp" => 87172,
            "alamat" => "Surabaya",
        ]);
        Dosen::create([
            "prodi_id" => 2,
            "NIP" => 123453,
            "nama" => "Umi Sa'adah",
            "email" => "andhik@gmail.com",
            "password" => bcrypt('1234'),
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
        Penelitian::create([
            "prodi_id" => 2,
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
            "prodi_id" => 2,
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
            // "dosen_id" => 2,
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
            // "dosen_id" => 3,
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
            // "dosen_id" => 1,
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
            // "dosen_id" => 2,
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
            "dosen_id" => 1,
            "penelitian_id" => 2,
        ]);
        DosenPenelitian::create([
            "dosen_id" => 2,
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
        DosenPenelitian::create([
            "dosen_id" => 2,
            "penelitian_id" => 11,
        ]);
    }
}
