<?php
require '../conn.php';

$username = $_POST['username'];
$password = password_hash($username, PASSWORD_DEFAULT);
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$icnum = $_POST['icnum'];
$email = $_POST['email'];
$class = $_POST['class'];
$phonenum = $_POST['phonenum'];

$sql = "INSERT INTO student VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssisssss', $username, $fullname, $age, $icnum, $email, $class, $phonenum, $password);
$stmt->execute();
echo 'Error: ' . $stmt->error;
if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, username ini telah wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location: index.php?menu=senarai');
}