
@extends('layouts')

@section('title', 'Destinasi Wisata')

@section('content')

<div class="container">

    <section class="hero">
        <h1>Destinasi Wisata Indonesia</h1>

        <p>
            Temukan berbagai keindahan tempat wisata
            yang tersebar di seluruh Indonesia.
        </p>
    </section>

    <section style="margin-top: 40px;">

        <h2 style="text-align: center;">
            Jelajahi Destinasi Pilihan
        </h2>

        <div class="grid">

            @foreach($wisata as $item)

                <div class="card">

                    <img
                        src="{{ $item['gambar'] }}"
                        alt="{{ $item['nama'] }}"
                    >

                    <div class="card-content">

                        <h3>{{ $item['nama'] }}</h3>

                        <p>
                            <strong>Lokasi:</strong>
                            {{ $item['lokasi'] }}
                        </p>

                        <p>
                            <strong>Kategori:</strong>
                            {{ $item['kategori'] }}
                        </p>

                        <p>
                            {{ $item['deskripsi'] }}
                        </p>

                        <a
                            href="{{ route('wisata.detail', $item['id']) }}"
                            class="btn"
                        >
                            Lihat Detail
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </section>

</div>

@endsection
