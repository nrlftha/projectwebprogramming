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

<body>

    <center>
        <div class="topnav">
            <a class="active" href="index.php?menu=#home">Home</a>
            <a href="daftar.php">Daftar Buku</a>
            <a href="../logout.php">Logout</a>
        </div>

        <h3>Name System : Data Store Library(DSL)</h3><br>
        <br>Nama Programmer :<a href="student/">Student()</a>
    </center>
    
</body>
</html>
<?php
require '../conn.php';
    
$menu = 'senarai';
if (isset($_GET['menu'])) $menu = $_GET['menu'];
require "$menu.php";
?>