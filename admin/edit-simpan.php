<?php
require '../conn.php';

$Title = $_POST['Title'];
$typeBook = $_POST['typeBook'];
$idBook = $_POST['idBook'];
$sql = "UPDATE book SET Title = ?, typeBook = ? WHERE idBook = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $Title, $typeBook, $idBook);
$stmt->execute();
if ($stmt->error) {
    echo 'Error dari database: ' . $stmt->error;
    exit;
}
$stmt->close();

header('location: index.php?menu=senarai');