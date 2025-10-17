<!DOCTYPE html>
<html>
<head>
    <title>Data Genre</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 50%; margin: auto; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #3498db; color: white; }
        h2 { text-align: center; }
        a { display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #3498db; }
    </style>
</head>
<body>
    <h2>Daftar Genre Buku</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>
        @foreach ($genres as $g)
        <tr>
            <td>{{ $g['id'] }}</td>
            <td>{{ $g['name'] }}</td>
        </tr>
        @endforeach
    </table>
    <a href="/authors">Lihat Data Author</a>
</body>
</html>
