<?php

namespace App\Http\Controllers;

class WisataController extends Controller
{
    // Data destinasi wisata
    private function dataWisata()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Kawah Putih',
                'lokasi' => 'Bandung, Jawa Barat',
                'kategori' => 'Alam',
                'deskripsi' => 'Kawah Putih merupakan destinasi wisata alam dengan danau kawah berwarna putih kehijauan yang indah.',
                'gambar' => 'https://images.unsplash.com/photo-1511497584788-876760111969?w=800'
            ],
            [
                'id' => 2,
                'nama' => 'Pantai Pangandaran',
                'lokasi' => 'Pangandaran, Jawa Barat',
                'kategori' => 'Pantai',
                'deskripsi' => 'Pantai Pangandaran menawarkan pemandangan laut yang indah dan suasana pantai yang menyenangkan.',
                'gambar' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800'
            ],
            [
                'id' => 3,
                'nama' => 'Gunung Bromo',
                'lokasi' => 'Jawa Timur',
                'kategori' => 'Pegunungan',
                'deskripsi' => 'Gunung Bromo terkenal dengan panorama matahari terbit dan lautan pasir yang memukau.',
                'gambar' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=800'
            ],
            [
                'id' => 4,
                'nama' => 'Candi Borobudur',
                'lokasi' => 'Magelang, Jawa Tengah',
                'kategori' => 'Sejarah',
                'deskripsi' => 'Candi Borobudur merupakan peninggalan sejarah dan warisan budaya yang terkenal di Indonesia.',
                'gambar' => 'https://images.unsplash.com/photo-1604999333679-b86d54738315?w=800'
            ],
            [
                'id' => 5,
                'nama' => 'Raja Ampat',
                'lokasi' => 'Papua Barat Daya',
                'kategori' => 'Pantai',
                'deskripsi' => 'Raja Ampat memiliki keindahan pulau-pulau karst, laut jernih, dan keanekaragaman bawah laut.',
                'gambar' => 'https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?w=800'
            ],
        ];
    }

    // Halaman daftar destinasi
    public function index()
    {
        $wisata = $this->dataWisata();

        return view('wisata.index', compact('wisata'));
    }

    // Halaman kategori
    public function kategori()
    {
        $kategori = ['Alam', 'Pantai', 'Pegunungan', 'Sejarah'];

        return view('wisata.kategori', compact('kategori'));
    }

    // Halaman detail destinasi
    public function show($id)
    {
        $wisata = collect($this->dataWisata())
            ->firstWhere('id', (int) $id);

        if (!$wisata) {
            abort(404);
        }

        return view('wisata.detail', compact('wisata'));
    }
}
