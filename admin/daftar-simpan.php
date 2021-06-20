<?php
require '../conn.php';

$Title = $_POST['Title'];
$typeBook = $_POST['typeBook'];

$sql = "INSERT INTO book VALUES (null, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $Title, $typeBook);
$stmt->execute();
echo 'Data sudah disimpan. ' . $stmt->error;
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