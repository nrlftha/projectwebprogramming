<?php
require '../conn.php';

$idBooking = $_POST['idBooking'];
$idStudent = $_POST['idStudent'];
$idBook = $_POST['idBook'];
$bookingdate = $_POST['bookingdate'];
$returnbook = $_POST['returnbook'];


$sql = "UPDATE booking SET idStudent = ?, idBook = ?, bookingdate = ?, returnbook = ? WHERE idBooking = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $idStudent, $idBook, $bookingdate, $returndate );
$stmt->execute();
$stmt->close();

#header('location: index.php?menu=senarai');