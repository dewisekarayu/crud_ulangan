<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
        body { 
            font-family: sans-serif; 
            margin: 20px; 
            background-color: #fffafb;
        }
        h1 {
            color: #ff69b4;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px; 
            background-color: white;
        }
        th, td { 
            border: 1px solid #ffb6ef; 
            padding: 10px; 
            text-align: left; 
        }
        th { 
            background-color: #ffb6ef; 
            color: white;
        }
        .btn-create { 
            background: rgb(255, 192, 247); 
            color: white; 
            display: inline-block;
            border: none; 
            cursor: pointer; 
            margin-bottom: 10px;
            padding: 8px 15px; 
            text-decoration: none; 
            border-radius: 3px; 
            font-weight: bold;
        }
        .action-group {
            display: flex;
            gap: 5px;
            align-items: center;
        }
        .btn-edit { 
            background: rgb(255, 171, 227); 
            color: black;  
            border: none; 
            cursor: pointer;
            padding: 5px 10px; 
            text-decoration: none; 
            border-radius: 3px; 
            font-size: 14px;
            display: inline-block;
            line-height: 20px;
        }
        .btn-delete { 
            background: rgb(255, 176, 242); 
            color: black; 
            border: none; 
            cursor: pointer;
            padding: 5px 10px; 
            text-decoration: none; 
            border-radius: 3px; 
            font-size: 14px;
            height: 30px;
        }
        td form {
            margin: 0;
            display: flex;
        }
    </style>
<body>
    <h1>Data Siswa</h1>

    <a href="{{ route('siswa.create') }}" class="btn-create">Tambah Siswa</a>

    <table>
        <thead>
            <tr>    
                <th>Nama</th>
                <th>Umur</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->umur }}</td>
                    <td>{{ $siswa->nilai }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
</body>
</html>