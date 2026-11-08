<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Dokumen Akademik</title>

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
            margin-bottom: 15px;
        }

        .description {
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .upload-box {
            background: #eaf2fb;
            border-left: 5px solid #123b65;
            padding: 25px;
            border-radius: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="file"] {
            display: block;
            margin-bottom: 20px;
            padding: 10px;
            background: white;
            width: 100%;
        }

        button {
            background: #123b65;
            color: white;
            padding: 11px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #e67e22;
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

        <h2>Layanan Pengunggahan Dokumen</h2>

        <p class="description">
            Halaman ini menyediakan fasilitas untuk memilih
            dokumen akademik yang akan diunggah oleh mahasiswa.
        </p>

        <div class="upload-box">
            <h3>Formulir Unggah Dokumen</h3>
            <br>

            @if (session('success'))
    <p style="color: green; margin-bottom: 15px;">
        {{ session('success') }}
    </p>
@endif

@if ($errors->any())
    <div style="color: red; margin-bottom: 15px;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <label for="dokumen">Pilih Dokumen:</label>

    <input
        type="file"
        id="dokumen"
        name="dokumen"
        accept=".pdf,.doc,.docx"
        required
    >

    <button type="submit">
        Unggah Dokumen
    </button>

</form>
        </div>

    </section>
</main>

<footer>
    <p>&copy; 2026 Sistem Layanan Akademik Universitas</p>
</footer>

</body>
</html>