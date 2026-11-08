<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Layanan Akademik Universitas</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
            color: #263445;
        }

        header {
            background: #123b65;
            color: white;
            padding: 22px 8%;
        }

        header h1 {
            font-size: 24px;
            margin-bottom: 7px;
        }

        header p {
            font-size: 14px;
            color: #dce8f5;
        }

        nav {
            background: white;
            padding: 16px 8%;
            display: flex;
            gap: 30px;
            border-bottom: 1px solid #ddd;
        }

        nav a {
            text-decoration: none;
            color: #123b65;
            font-weight: bold;
        }

        nav a:hover {
            color: #e67e22;
        }

        .container {
            width: 84%;
            margin: 35px auto;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 2px 8px #00000010;
        }

        .welcome h2 {
            color: #123b65;
            margin-bottom: 12px;
        }

        .welcome p {
            line-height: 1.7;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000010;
        }

        .card h3 {
            color: #123b65;
            margin-bottom: 12px;
        }

        .card p {
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .button {
            display: inline-block;
            background: #123b65;
            color: white;
            padding: 10px 16px;
            border-radius: 5px;
            text-decoration: none;
        }

        .button:hover {
            background: #e67e22;
        }

        footer {
            text-align: center;
            padding: 22px;
            margin-top: 45px;
            background: #123b65;
            color: white;
        }

        @media (max-width: 700px) {
            .cards {
                grid-template-columns: 1fr;
            }

            nav {
                flex-wrap: wrap;
                gap: 15px;
            }

            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Sistem Layanan Akademik Universitas</h1>
        <p>Portal Informasi dan Layanan Akademik Mahasiswa</p>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/krs">Informasi KRS</a>
        <a href="/pengumuman">Pengumuman</a>
        <a href="/dokumen">Dokumen</a>
    </nav>

    <main class="container">

        <section class="welcome">
            <h2>Selamat Datang di Layanan Akademik</h2>
            <p>
                Sistem Layanan Akademik Universitas merupakan portal
                informasi yang membantu mahasiswa mengakses informasi
                Kartu Rencana Studi (KRS), pengumuman akademik, dan
                layanan pengunggahan dokumen.
            </p>
        </section>

        <section class="cards">

            <div class="card">
                <h3>Informasi KRS</h3>
                <p>
                    Akses informasi terkait Kartu Rencana Studi
                    dan kegiatan pengisian mata kuliah.
                </p>
                <a href="/krs" class="button">Lihat KRS</a>
            </div>

            <div class="card">
                <h3>Pengumuman Akademik</h3>
                <p>
                    Lihat informasi dan pengumuman terbaru
                    mengenai kegiatan akademik universitas.
                </p>
                <a href="/pengumuman" class="button">Lihat Pengumuman</a>
            </div>

            <div class="card">
                <h3>Unggah Dokumen</h3>
                <p>
                    Akses halaman layanan pengunggahan
                    dokumen akademik.
                </p>
                <a href="/dokumen" class="button">Lihat Dokumen</a>
            </div>

        </section>

    </main>

    <footer>
        <p>&copy; 2026 Sistem Layanan Akademik Universitas</p>
    </footer>

</body>
</html>