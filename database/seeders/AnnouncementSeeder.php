<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
        Announcement::create([
            'dosen_id' => 4,
            'judul' => 'Studi Banding Politeknik Elektronika Negeri Surabaya (PENS)',
            'gambar' => '../img/pens.jpg',
            'isi' => 'Salah satu cara meningkatkan kualitas layanan Lembaga Penelitian dan Pengabdian Masyarakat Universitas Brawijaya (LPPM UB) adalah menjalin kerjasama dengan pihak eksternal dan memperkuat jejaring yang telah terjalin di antara para stakeholder. Pada Selasa, 12 April 2022 bertempat di Gedung Layanan Bersama lantai 6, Pusat Penelitian dan Pengabdian Masyarakat Politeknik Elektronika Negeri Surabaya (P3M PENS) melakukan studi banding ke LPPM UB. Kunjungan ini dilakukan dalam rangka peningkatan kapasitas Pengelola P3M PENS dan dipimpin langsung oleh Ketua P3M PENS, Dr. Mike Yuliana, ST., MT.',
            'tanggal' => Carbon::parse('2020-01-10')->isoFormat('D MMMM Y'),
        ]);
    }
}
