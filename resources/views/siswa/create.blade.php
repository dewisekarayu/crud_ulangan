<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 40px 20px;
            background-color: #ffeef8;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #ff69b4;
            margin-bottom: 20px;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(255, 105, 180, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .input-group {
            width: 100%;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
            font-size: 14px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ffdeef;
            border-radius: 8px;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #ff8fda;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
        }

        .btn-simpan {
            font-size: 14px;
            color: white;
            background-color: #ff8fda;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
            flex: 1;
        }

        .btn-simpan:hover {
            background-color: #ff69b4;
        }

        .btn-batal {
            font-size: 14px;
            text-decoration: none;
            color: #555;
            background-color: #f0f0f0;
            padding: 10px 20px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            transition: background 0.3s;
            flex: 1;
        }

        .btn-batal:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

    <h1>Tambah Siswa</h1>

    <div class="card">
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" required maxlength="50" placeholder="Masukkan nama...">
            </div>

            <div class="input-group">
                <label for="umur">Umur</label>
                <input type="number" name="umur" id="umur" required placeholder="Contoh: 17">
            </div>

            <div class="input-group">
                <label for="nilai">Nilai Akhir</label>
                <input type="number" step="0.01" name="nilai" id="nilai" required placeholder="0.00">
            </div>

            <div class="btn-container">
                <button class="btn-simpan" type="submit">Simpan</button>
                <a href="{{ route('siswa.index') }}" class="btn-batal">Batal</a>
            </div>
        </form>
    </div>

</body>
</html>