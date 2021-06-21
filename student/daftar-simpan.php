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
        
<h1>Simpan Data Pinjaman</h1>

<?php
require '../conn.php';

$idStudent = $_POST['idStudent'];
$idBook = $_POST['idBook'];
$bookingdate = $_POST['bookingdate'];
$returndate = $_POST['returndate'];

$sql = "INSERT INTO booking VALUES (null, ?, ?, ?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssss', $idStudent, $idBook, $bookingdate,$returndate );
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, buku ini tidak wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location: index.php?menu=senarai');
}