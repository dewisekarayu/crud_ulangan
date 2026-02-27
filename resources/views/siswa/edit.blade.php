<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Siswa</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 40px 20px;
            background-color: #fffafb;
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
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ffb6ef;
            box-shadow: 0 4px 6px rgba(255, 182, 239, 0.3);
            width: 100%;
            max-width: 400px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ffdeef;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
        }
        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #ffb6ef;
        }
        .btn-container {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        .btn-update {
            background-color: #ffb6ef;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            flex: 1;
            font-size: 14px;
        }
        .btn-batal {
            background-color: #ffc0f7;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
            flex: 1;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

    <h1>Edit Data Siswa</h1>

    <div class="card">
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="input-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" required>
            </div>

            <div class="input-group">
                <label for="umur">Umur</label>
                <input type="number" name="umur" id="umur" value="{{ $siswa->umur }}" required>
            </div>

            <div class="input-group">
                <label for="nilai">Nilai</label>
                <input type="number" step="0.01" name="nilai" id="nilai" value="{{ $siswa->nilai }}" required>
            </div>

            <div class="btn-container">
                <button type="submit" class="btn-update">Update Data</button>
                <a href="{{ route('siswa.index') }}" class="btn-batal">Batal</a>
            </div>
        </form>
    </div>

</body>
</html>