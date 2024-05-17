<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Artikel::insert([
            'judul' => 'Penyebab Kulit Berjerawat',
            'foto' => 'https://stephanie-skincare.com/storage/2023/02/Kulit-sensitif.jpg',
            'kategori' => 'Kesehatan',
            'konten' => 'Jerawat atau disebut juga dengan acne vulgaris (AV) adalah suatu penyakit peradangan kronis dari kelenjar pilosebasea yang ditandai adanya komedo, papul, kista, dan pustul. Bagian tubuh yang kerap ditumbuhi jerawat antara lain daerah wajah, bahu, lengan atas, dada, dan punggung. Biasanya kondisi ini diakibatkan oleh beragam faktor risiko',
            'penulis' => 'dr. Indina Sastrini Sekarnesia, SpDV',
        ]);

        Artikel::insert([
            'judul' => 'Manfaat Olahraga Lari',
            'foto' => 'https://media.suara.com/pictures/970x544/2016/11/09/o_1b14aap401o5tmjr7f01ul11defa.jpg',
            'konten' => 'Manfaat lari tidak hanya untuk menurunkan berat badan, tetapi juga dapat menurunkan risiko terkena berbagai penyakit. Bahkan, rutin berolahraga lari juga baik untuk mengurangi stres. Meski begitu, lari sebaiknya dilakukan dengan beberapa persiapan untuk mendapatkan manfaat yang maksimal dan mencegah terjadinya cedera.',
            'kategori' => 'Olahraga',
            'penulis' => 'dr. Sienny Agustin',
        ]);

        Artikel::insert([
            'judul' => 'Senja Di Sore Hari',
            'foto' => 'https://cdn1-production-images-kly.akamaized.net/OKC5YmJTaNJahKbSzJJaAKTzlBQ=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2450762/original/052174200_1543059539-jalan-langit-pemandangan-senja-paling-menakjubkan-di-dunia.jpg',
            'kategori' => 'Pemandangan',
            'konten' => 'Senja adalah periode meninggalkan matahari terbenam, yaitu sesaat setelah matahari masuk ke dalam cakrawala hingga saat cahaya aram benar-benar hilang.',
            'penulis' => 'Wikipedia',
        ]);

        Artikel::insert([
            'judul' => 'Manfaat Olahraga Renang',
            'foto' => 'https://tribratanews.polri.go.id/web/image/blog.post/50108/image',
            'konten' => 'Selain meningkatkan metabolisme, renang diketahui dapat membantu memperbaiki masalah postur tubuh sekaligus melatih ketahanan otot. Namun, tidak hanya sampai disitu, manfaat berenang adalah hal yang tak boleh terlewatkan, karena bukan hanya untuk kesehatan tubuh saja, tetapi juga mental.',
            'kategori' => 'Olahraga',
            'penulis' => 'Tim Medis Siloam Hospitals',
        ]);

        Artikel::insert([
            'judul' => 'Diet Yang Sehat',
            'foto' => 'https://img-cdn.medkomtek.com/bk6EYH6pWtkJ5w6PLa7FfaeGkXs=/0x0/smart/filters:quality(100):format(webp)/article/m09XFoI9m4CprTMlviuz2/original/040754200_1642564190-Diet_Ini_Berisiko_Terhadap_Kesehatan.jpg',
            'konten' => 'Pada dasarnya, diet sehat adalah diet yang dijalani dengan menerapkan pola makan sehat. Selain itu, diet yang Anda jalani masuk ke dalam kategori diet sehat jika kalori dan semua nutrisi yang dibutuhkan tubuh terpenuhi dengan baik.',
            'kategori' => 'Kesehatan',
            'penulis' => 'dr. Airindya Bella',
        ]);

        Artikel::insert([
            'judul' => 'Gunung Indah',
            'foto' => 'https://asset.kompas.com/crops/2yXHUutdTyVhaVtSL0MNtB17Ggw=/0x0:780x390/750x500/data/photo/2016/12/07/2020586pagoda-wisman780x390.jpg',
            'konten' => 'Gunung adalah suatu bentuk permukaan tanah yang jauh lebih tinggi dibandingkan dengan permukaan tanah di sekelilingnya. Suatu daerah bisa dikatakan gunung jika memiliki puncak lebih dari 2000 kaki atau 610 meter.',
            'kategori' => 'Pemandangan',
            'penulis' => 'Silmi Nurul Utami',
        ]);
    }
}
