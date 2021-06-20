<?php
require '../conn.php';

$idBook = $_GET['idBook'];
$sql = "DELETE FROM book WHERE idBook = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idBook);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');