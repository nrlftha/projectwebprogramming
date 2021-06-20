<?php
require '../conn.php';

$idStudent = $_GET['idStudent'];
$sql = "SELECT username FROM student WHERE idStudent = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $idStudent);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$stmt->fetch();
$password = password_hash($username, PASSWORD_DEFAULT);
$stmt->close();

$sql = "UPDATE student SET password = ? WHERE idStudent = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username, $password);
$stmt->execute();

header('location: index.php?menu=senarai');