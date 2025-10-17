<!DOCTYPE html>
<html>
<head>
    <title>Data Author</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 50%; margin: auto; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #2ecc71; color: white; }
        h2 { text-align: center; }
        a { display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #2ecc71; }
    </style>
</head>
<body>
    <h2>Daftar Author Buku</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Author</th>
        </tr>
        @foreach ($authors as $a)
        <tr>
            <td>{{ $a['id'] }}</td>
            <td>{{ $a['name'] }}</td>
        </tr>
        @endforeach
    </table>
    <a href="/">Lihat Data Genre</a>
</body>
</html>
