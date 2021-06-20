<?php
require '../conn.php';

$idStudent = $_POST['idStudent'];
$username = $_POST['username'];
$password = password_hash($username, PASSWORD_DEFAULT);
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$icnum = $_POST['icnum'];
$email = $_POST['email'];
$class = $_POST['class'];
$phonenum = $_POST['phonenum'];

$sql = "UPDATE student SET username = ?, password = ?, fullname = ?, age = ?, icnum = ?, email = ?, class = ?, phonenum = ? WHERE idStudent = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssisssss', $username, $password, $fullname, $age, $icnum, $email, $class, $phonenum, $idStudent);
$stmt->execute();
if ($stmt->error) {
    echo 'Error dari database: ' . $stmt->error;
    exit;
}
$stmt->close();

header('location: index.php?menu=senarai');