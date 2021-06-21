<?php
require '../conn.php';

$idBooking = $_GET['idBooking'];
$sql = "DELETE FROM booking WHERE idBooking = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idBooking);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');