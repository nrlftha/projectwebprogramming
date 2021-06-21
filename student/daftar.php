<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>DSL</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

    <center>
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="senarai.php">Senarai Pinjaman</a>
            <a href="daftar.php">Daftar Pinjaman</a>
            <a href="logout.php">Logout</a>
        </div>
        
<h1>Daftar Pinjaman</h1>

<form action="daftar-simpan.php" method="post">
    <table>
        <tr>
            <td>Nama Pelajar</td>
            <td><input type="text" name="idStudent"></td>
        </tr>

        <tr>
            <td>Judul Buku</td>
            <td><input type="text" name="idBook"></td>
        </tr>
        <tr>
            <td>Tanggal Pinjaman</td>
            <td><input type="date" name="bookingdate"></td>
        </tr>
         <tr>
            <td>Tanggal Pengembalian</td>
            <td><input type="date" name="returndate"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>