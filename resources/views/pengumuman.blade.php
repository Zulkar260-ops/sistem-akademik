<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman Akademik</title>

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
            margin-bottom: 7px;
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

        .container {
            width: 84%;
            margin: 35px auto;
        }

        .content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000010;
        }

        h2 {
            color: #123b65;
            margin-bottom: 20px;
        }

        .announcement {
            background: #eaf2fb;
            border-left: 5px solid #123b65;
            padding: 20px;
            margin-bottom: 18px;
            border-radius: 5px;
        }

        .announcement h3 {
            margin-bottom: 10px;
        }

        .announcement p {
            line-height: 1.7;
        }

        footer {
            text-align: center;
            padding: 22px;
            margin-top: 45px;
            background: #123b65;
            color: white;
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
    <section class="content">

        <h2>Pengumuman Akademik</h2>

        <div class="announcement">
            <h3>Informasi Kegiatan Akademik</h3>
            <p>
                Halaman ini menyediakan informasi mengenai
                kegiatan dan pemberitahuan akademik universitas.
            </p>
        </div>

        <div class="announcement">
            <h3>Informasi Pengisian KRS</h3>
            <p>
                Mahasiswa dapat memperoleh informasi mengenai
                jadwal dan ketentuan pengisian Kartu Rencana Studi.
            </p>
        </div>

        <div class="announcement">
            <h3>Informasi Administrasi Akademik</h3>
            <p>
                Halaman ini menjadi tempat penyampaian informasi
                terkait layanan administrasi akademik mahasiswa.
            </p>
        </div>

    </section>
</main>

<footer>
    <p>&copy; 2026 Sistem Layanan Akademik Universitas</p>
</footer>

</body>
</html>