
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Jelajah Wisata Indonesia</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f8f3;
            color: #263b2b;
            line-height: 1.6;
        }

        nav {
            background: #174c32;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            color: #b8e0a5;
        }

        .container {
            width: 84%;
            max-width: 1200px;
            margin: 40px auto;
        }

        /* HERO DENGAN BACKGROUND PURA BALI */
        .hero {
            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.40),
                    rgba(0, 0, 0, 0.40)
                ),
                url('https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=1600');

            background-size: cover;
            background-position: center;
            min-height: 420px;
            padding: 100px 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: left;
            border-radius: 15px;
            color: white;
        }

        .hero h1 {
            font-size: 42px;
            color: white;
            max-width: 650px;
            margin-bottom: 15px;
        }

        .hero p {
            color: white;
            max-width: 600px;
            margin-bottom: 25px;
            font-size: 17px;
        }

        .btn {
            display: inline-block;
            background: #267346;
            color: white;
            padding: 11px 22px;
            border-radius: 7px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: #174c32;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 22px;
            margin-top: 25px;
        }

        .card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 12px #00000012;
        }

        .card img {
            width: 100%;
            height: 190px;
            object-fit: cover;
        }

        .card-content {
            padding: 18px;
        }

        .card h3 {
            margin-bottom: 8px;
            color: #174c32;
        }

        footer {
            background: #174c32;
            color: white;
            text-align: center;
            padding: 22px;
            margin-top: 60px;
        }

        @media(max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 12px;
            }

            nav a {
                margin: 5px;
            }

            .container {
                width: 92%;
            }

            .hero {
                min-height: 350px;
                padding: 55px 25px;
            }

            .hero h1 {
                font-size: 27px;
            }

            .hero p {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <h2>Jelajah Wisata</h2>

        <div>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('tentang') }}">Tentang</a>
            <a href="{{ route('wisata.index') }}">Destinasi</a>
            <a href="{{ route('wisata.kategori') }}">Kategori</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Jelajah Wisata Indonesia.</p>
        <p>Menjelajahi keindahan alam Indonesia.</p>
    </footer>

</body>
</html>
