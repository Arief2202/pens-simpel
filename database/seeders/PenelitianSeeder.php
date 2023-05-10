<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Dosen;
use App\Models\Penelitian;
use App\Models\DosenPenelitian;
use Illuminate\Database\Seeder;

class PenelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Dose
        $dosen = Dosen::all();

        Penelitian::create([
            "prodi_id" => $dosen->where('id', 3)->pluck('prodi_id')[0],
            'dosen_id' => 3,
            "skema_id" => 1,
            "judul" => "DIAGNOSA PENYAKIT STROKE MENGGUNAKAN METODE DEEP LEARNING",
            "rumpun_ilmu" => "Deep Learning",
            "abstrak" => "Stroke salah satu jenis penyakit kelompok cardiovascular, yang merupakan penyebab kematian nomor satu di dunia dan penyebab utama mortalitas dan morbiditas yang tinggi dalam menyebabkan kecacatan di banyak negara. Stroke merupakan penyakit otak dalam bentuk disfungsi neurologis lokal atau global yang muncul tiba-tiba, cepat dan progresif. Data Penelitian ini mengajukan suatu pendekatan Machine learning untuk mengetahui jenis stroke berdasarkan penyebabnya yaitu penyumbatan pembuluh darah (iskemik) dan atau pecahnya pembuluh darah atau hemoragik. Data stroke yang digunakan pada penilitian ini diambil dari salah satu Rumah Sakit Umum Haji Surabaya yang terdiri dari 102 data pasien dengan 2 label kelas. Penelitian ini kami mengusulkan beberapa metode tahapan untuk memperoleh data masukan berupa ekstraksi fitur dan data citra CT Scan yang digunakan untuk membangun sistem klasifikasi, tahapan tersebut mulai dari konversi, segmentasi, pemotongan, augmentasi dan graycale gambar. Deep Learning digunakan untuk proses klasifikasi data, pada imlementasi proses klasifikasi menggunakan perbandingan dua arsitektur deep learning yaitu Multi-Layer (MLP) perceptron dan arsitektur lainnya adalah Convoluional Neural Network (CNN). Hyperparameter yang digunakan dalam MLP adalah default parameter dan berdasarkan metode empirical methode dengan melakukan percobaan kombinasi parameter untuk mendapat hasil terbaik. Sedangkan CNN menggunakan arsitektur LeNet, New LeNet 1 dan New Lenet 2. Penyetelan hyperparameter Drop Out dan L2 Regulation dengan mengaplikasikan nilai yang berbeda-beda untu mendapatkan model klasifikasi yang baik tanpa adanya overfitting. Dalam meningkatkan akurasi digunakan dengan menambahkan kedalaman layer konvolusi pada masing masing arsitektur. Hasil arsitektur LeNet 2 unggul dari arsitektur lainnya dengan nilai akurasi 99.82%. Pengujiaan data testing sebanyak 1430 data memberikan presisi terhadap pemodelan yang dihasilkan dari metode Deep Learning menggunakan arsitektur New LeNet 2 mencapai 99.65%.",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Secara konvensional, studi tentang mental disorder mengandalkan informasi yang dikumpulkan melalui kontak secara pribadi seseorang dengan terapis. Penelitian terbaru menunjukkan kemampuan data media sosial untuk meneliti topik kesehatan mental. Hal ini berpotensi untuk melengkapi teknik konvensional pada kemampuannya dalam menyediakan hasil yang natural",
            "tujuan" => "Hasil arsitektur LeNet 2 unggul dari arsitektur lainnya dengan nilai akurasi 99.82%. Pengujiaan data testing sebanyak 1430 data memberikan presisi terhadap pemodelan yang dihasilkan dari metode Deep Learning menggunakan arsitektur New LeNet 2 mencapai 99.65%.",
            "tinjau_pustaka" => "digilib pens",
            "metode" => "Deep Learning",
            "daftar_pustaka" => "digilib pens",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "Deep Learning",
            "tanggal" => Carbon::parse('2020-01-10'),
            "status" => 'disetujui',
            "tahun" => Carbon::parse('2020-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => $dosen->where('id', 4)->pluck('prodi_id')[0],
            'dosen_id' => 4,
            "skema_id" => 3,
            "judul" => "SCREEN PRINTING MANAGEMENT ORDER STUDI KASUS FOCUS CLOTH",
            "rumpun_ilmu" => "FOCUS CLOTH",
            "abstrak" => "Focus Cloth merupakan sebuah vendor yang bergerak di bidang screen printing manual dan juga konveksi, yang berada di daerah kabupaten Sidoarjo. Sejak berdirinya Focus Cloth segala proses yang berkaitan dengan management masih menggunakan system manual dan pembukuan sederhana yang semuanya diatur oleh pemilik vendor itu sendiri. Mulai dari pembukuan mengenai order dan juga customer, pengaturan progres pengerjaan order, pelayanan customer seperti follow up,dan juga negosiasi harga order dengan customer. Hal ini membuat owner harus selalu berada di vendor sablon dan konveksi untuk mengawasi dan mengatur segala sesuatunya. Dengan segala permasalahan yang ada akan membuat owner terlalu sibuk focus dengan masalah yang ada di sablon dan konveksinya dan kurang mmemiliki waktu untuk mengembangkan vendor sablon dan konveksinya atau melakukan strategi marketing untuk mencari lebih banyak order. Saran harga merupakan sebuah algoritma yang dibuat untuk membantu owner dalam hal perencanaan harga order yang mengacu pada spesifikasi dari order yang ada. Daftar table yang mencakup informasi mengenai tanggal terakhir order dari customer akan membuat owner dapat dengan mudah memberikan pelayanan follow up kepada customer yang sudah lama tidak melakukan order. Database customer dan juga detail order akan menampilkan daftar customer yang pernah melakukan order beserta dengan detail order yang akan menampilkan semua detail mengenai order yang ada. Progress order akan membuat baik vendor dan juga customer dapat saling melihat progress pengerjaan dari order. Hasil penelitian ini menghasilkan sebuah system yang dapat membantu masalah owner yang ada di vendor sablon dan konveksi yang berkaitan dengan manajemen order dan pembukuanya tersimpan dengan lebih tertata dan juga peningkatan pelayanan kepada customer yang akan membuat customer lebih nyaman,tertarik, dan juga percaya kepada vendor yang dapat meningkatkan jumlah order.",
            "keyword" => "FOCUS CLOTH",
            "latar_belakang" => "Focus Cloth merupakan sebuah vendor yang bergerak di bidang screen printing manual dan juga konveksi, yang berada di daerah kabupaten Sidoarjo. ",
            "tujuan" => " Database customer dan juga detail order akan menampilkan daftar customer yang pernah melakukan order beserta dengan detail order yang akan menampilkan semua detail mengenai order yang ada. Progress order akan membuat baik vendor dan juga customer dapat saling melihat progress pengerjaan dari order. Hasil penelitian ini menghasilkan sebuah system yang dapat membantu masalah owner yang ada di vendor sablon dan konveksi yang berkaitan dengan manajemen order dan pembukuanya tersimpan dengan lebih tertata dan juga peningkatan pelayanan kepada customer yang akan membuat customer lebih nyaman,tertarik, dan juga percaya kepada vendor yang dapat meningkatkan jumlah order.",
            "tinjau_pustaka" => "digilib pens",
            "metode" => "FOCUS CLOTH",
            "daftar_pustaka" => "digilib pens",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "FOCUS CLOTH",
            "tanggal" => Carbon::parse('2021-01-10'),
            "status" => 'disetujui',

            "tahun" => Carbon::parse('2021-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => $dosen->where('id', 4)->pluck('prodi_id')[0],
            'dosen_id' => 4,
            "skema_id" => 2,
            "judul" => "STUDI DETEKSI MENTAL DISORDER MELALUI SOCIAL MEDIA MINING",
            "rumpun_ilmu" => "SOCIAL MEDIA MINING",
            "abstrak" => "Secara konvensional, studi tentang mental disorder mengandalkan informasi yang dikumpulkan melalui kontak secara pribadi seseorang dengan terapis. Penelitian terbaru menunjukkan kemampuan data media sosial untuk meneliti topik kesehatan mental. Hal ini berpotensi untuk melengkapi teknik konvensional pada kemampuannya dalam menyediakan hasil yang natural. Penelitian ini membangun corpus dari pengakuan kelompok pengguna terdiagnosis klinis depresi pada platform Twitter. Sistem yang dikembangkan mengimplementasikan proses computational linguistic. Digunakan beberapa fitur yaitu fitur dari empat dimensi sentics milik kepustakaan SenticNet, fitur self-reference, fitur emosi negatif, dan fitur wordcount leksikon depresi untuk memodelkan tingkat depresi pada post media sosial. Hasil ditunjukkan menggunakan rule based system untuk menentukan tingkat depresi berdasarkan bahasa. Ditemukan sebanyak 1733 kata khas oleh kelompok terdiagnosa. Temuan ini berdasarkan pengecekan Wordnet, SenticNet, Vader, dan TextBlob dan telah dievaluasi dengan pemeriksaan sinonim. Sistem yang dikembangkan dapat mengkategorikan sebanyak 8105 tweet ke dalam 3 cluster. 1028 tweet dikategorikan high, 1073 moderate, dan 1605 low.",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Secara konvensional, studi tentang mental disorder mengandalkan informasi yang dikumpulkan melalui kontak secara pribadi seseorang dengan terapis. Penelitian terbaru menunjukkan kemampuan data media sosial untuk meneliti topik kesehatan mental. Hal ini berpotensi untuk melengkapi teknik konvensional pada kemampuannya dalam menyediakan hasil yang natural",
            "tujuan" => "Temuan ini berdasarkan pengecekan Wordnet, SenticNet, Vader, dan TextBlob dan telah dievaluasi dengan pemeriksaan sinonim. Sistem yang dikembangkan dapat mengkategorikan sebanyak 8105 tweet ke dalam 3 cluster. 1028 tweet dikategorikan high, 1073 moderate, dan 1605 low",
            "tinjau_pustaka" => "digilib pens",
            "metode" => "SOCIAL MEDIA MINING",
            "daftar_pustaka" => "digilib pens",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "SOCIAL MEDIA MINING",
            "tanggal" => Carbon::parse('2019-01-10'),
            "status" => 'disetujui',

            "tahun" => Carbon::parse('2019-01-10')->format('Y'),
        ]);
        Penelitian::create([
            "prodi_id" => $dosen->where('id', 1)->pluck('prodi_id')[0],
            'dosen_id' => 1,
            "skema_id" => 4,
            "judul" => "PENGEMBANGAN SISTEM INFORMASI MANAJEMEN LAPORAN KEUANGAN PADA INKUBATOR BISNIS DENGAN METODE USER EXPERIENCE DESIGN",
            "rumpun_ilmu" => "SISTEM INFORMASI",
            "abstrak" => "Perkembangan bisnis yang semakin cepat dan persaingan yang semakin ketat antar perusahaan membuat manajemen yang dilakukan harus lebih detail, efektif dan efisien agar mencapai tujuan yang diinginkan. Laporan keuangan merupakan salah satu faktor penting bagi perkembangan sebuah perusahaan yang dapat dijadikan dasar dalam mengambil sebuah keputusan. Penggunaan aplikasi dalam pembuatan laporan keuangan sangat membantu pengguna dalam proses monitoring dan evaluasi pengeluaran yang dilakukan oleh pengguna. Kenyamanan pengguna dalam penggunaan aplikasi menjadi faktor penting dalam pengembangan aplikasi. UI/UX Design dapat meningkatkan pengalaman pengguna di aplikasi dan kepuasan pengguna secara keseluruhan. UX design membuat pengguna menjadi ingat dan menciptakan pola pikir terhadap sebuah aplikasi. Pengembangan aplikasi sering kali mengalami kendala pada bagian UI/UX aplikasi yang tidak sesuai dengan kebutuhan dan keinginan pengguna sehingga membuat pengguna tidak nyaman dan beralih menggunakan aplikasi lain yang sesuai dengan kebutuhannya.",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Perkembangan bisnis yang semakin cepat dan persaingan yang semakin ketat antar perusahaan membuat manajemen yang dilakukan harus lebih detail, efektif dan efisien agar mencapai tujuan yang diinginkan.",
            "tujuan" => "Perkembangan bisnis yang semakin cepat dan persaingan yang semakin ketat antar perusahaan membuat manajemen yang dilakukan harus lebih detail, efektif dan efisien agar mencapai tujuan yang diinginkan.",
            "tinjau_pustaka" => "digilib pens",
            "metode" => "SISTEM INFORMASI",
            "daftar_pustaka" => "digilib pens",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "SISTEM INFORMASI",
            "tanggal" => Carbon::parse('2022-01-10'),
            "status" => 'disetujui',

            "tahun" => Carbon::parse('2022-01-10')->format('Y'),
        ]);

        Penelitian::create([
            "prodi_id" => $dosen->where('id', 1)->pluck('prodi_id')[0],
            'dosen_id' => 1,
            "skema_id" => 1,
            "judul" => "IMPLEMENTASI KONSEP BERBAGI KENDARAAN (RIDE SHARING) UNTUK MENGURANGI KEMACETAN PADA PLATFORM WEB",
            "rumpun_ilmu" => "WEB",
            "abstrak" => "Berbagi kendaraan atau biasa dikenal dengan ride sharing/carpooling, merupakan sebuah konsep berbagi kendaraan baik itu berupa mobil maupun motor untuk sebuah perjalanan dengan tujuan yang sama. Bukti dilapangan menujukkan konsep ini sangat membantu untuk mengurangi masalah kemacetan lalu lintas, dengan mengurangi penggunaan mobil dengan jumlah penumpang yang tidak maksimal, dan juga memiliki efek pada penghematan bahan bakar minyak serta untuk mengontrol polusi dan memelihara lingkungan hijau. Pada penelitian ini penulis mencoba mengimplementasikan konsep carpooling agar lebih mudah untuk di gunakan oleh banyak pihak dengan menggunakan platform web. Aplikasi yang dibangun akan menyediakan portal untuk komunikasi antara pemberi tumpangan dengan penumpang, kemudian verifikasi user dan payment menggunakan payment gateway dengan tujuan untuk meningkatkan kepercayaan dan keamanan dalam bertransaksi pada aplikasi.",
            "keyword" => "Kepuasan",
            "latar_belakang" => "Berbagi kendaraan atau biasa dikenal dengan ride sharing/carpooling, merupakan sebuah konsep berbagi kendaraan baik itu berupa mobil maupun motor untuk sebuah perjalanan dengan tujuan yang sama",
            'tujuan' => ' Aplikasi yang dibangun akan menyediakan portal untuk komunikasi antara pemberi tumpangan dengan penumpang, kemudian verifikasi user dan payment menggunakan payment gateway dengan tujuan untuk meningkatkan kepercayaan dan keamanan dalam bertransaksi pada aplikasi.',
            "tinjau_pustaka" => "digilib pens",
            "metode" => "WEB",
            "daftar_pustaka" => "digilib pens",
            "lama_kgtn" => "1 tahun",
            "thn_pekerjaan" => "ke-1",
            "grp_riset" => "WEB",
            "tanggal" => Carbon::parse('2020-01-10'),
            "tahun" => Carbon::parse('2020-01-10')->format('Y'),
        ]);
    }
}
