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
        
<h1>Senarai Pinjaman</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Name</th>
        <th>Judul Buku</th>
        <th>Tarikh Pinjaman</th>
        <th>Tarikh Pulangan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM booking ORDER BY idStudent";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->idStudent; ?></td>
            <td><?php echo $row->idBook; ?></td>
            <td><?php echo $row->bookingdate; ?></td>
            <td><?php echo $row->returndate; ?></td>

            <td>
                |
                <a href="index.php?menu=edit&idBooking=<?php echo $row->idBooking; ?>">Edit</a>
                |
                <a href="padam.php?idBooking=<?php echo $row->idBooking; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>