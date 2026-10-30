
@extends('layouts')

@section('title', 'Detail Wisata')

@section('content')

<div class="container">

    <section class="hero">
        <h1>{{ $wisata['nama'] }}</h1>

        <p>
            Informasi lengkap destinasi wisata Indonesia.
        </p>
    </section>

    <div class="card" style="margin-top: 35px;">

        <img
            src="{{ $wisata['gambar'] }}"
            alt="{{ $wisata['nama'] }}"
            style="width: 100%; height: 350px; object-fit: cover;"
        >

        <div class="card-content">

            <h2>{{ $wisata['nama'] }}</h2>

            <p style="margin-top: 15px;">
                <strong>Lokasi:</strong>
                {{ $wisata['lokasi'] }}
            </p>

            <p style="margin-top: 10px;">
                <strong>Kategori:</strong>
                {{ $wisata['kategori'] }}
            </p>

            <h3 style="margin-top: 20px;">
                Deskripsi Wisata
            </h3>

            <p style="margin-top: 10px; text-align: justify;">
                {{ $wisata['deskripsi'] }}
            </p>

            <a
                href="{{ route('wisata.index') }}"
                class="btn"
                style="margin-top: 20px;"
            >
                Kembali ke Destinasi
            </a>

        </div>

    </div>

</div>

@endsection
