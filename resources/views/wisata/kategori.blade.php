
@extends('layouts')

@section('title', 'Kategori Wisata')

@section('content')

<div class="container">

    <section class="hero">
        <h1>Kategori Wisata Indonesia</h1>

        <p>
            Temukan berbagai jenis wisata menarik
            sesuai dengan minat dan keinginan kamu.
        </p>
    </section>

    <section style="margin-top: 40px;">

        <h2 style="text-align: center;">
            Pilihan Kategori Wisata
        </h2>

        <div class="grid">

            <div class="card">
                <div class="card-content">
                    <h3>Wisata Alam</h3>
                    <p>
                        Menikmati keindahan alam Indonesia,
                        seperti hutan, air terjun, dan danau.
                    </p>
                    <a href="{{ route('wisata.index') }}" class="btn">
                        Lihat Destinasi
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <h3>Wisata Pantai</h3>
                    <p>
                        Menjelajahi keindahan pantai,
                        pasir putih, dan pemandangan laut.
                    </p>
                    <a href="{{ route('wisata.index') }}" class="btn">
                        Lihat Destinasi
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <h3>Wisata Pegunungan</h3>
                    <p>
                        Menikmati udara sejuk dan
                        pemandangan indah dari pegunungan.
                    </p>
                    <a href="{{ route('wisata.index') }}" class="btn">
                        Lihat Destinasi
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <h3>Wisata Sejarah</h3>
                    <p>
                        Mengenal peninggalan sejarah,
                        budaya, dan bangunan bersejarah.
                    </p>
                    <a href="{{ route('wisata.index') }}" class="btn">
                        Lihat Destinasi
                    </a>
                </div>
            </div>

        </div>

    </section>

</div>

@endsection
