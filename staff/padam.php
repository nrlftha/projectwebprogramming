<?php
require '../conn.php';

$idStudent = $_GET['idStudent'];
$sql = "DELETE FROM student WHERE idStudent = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idStudent);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');