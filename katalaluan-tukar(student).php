<?php
require '../conn.php';

$kata1 = $_POST['kata1'];
$kata2 = $_POST['kata2'];
$kata3 = $_POST['kata3'];

if ($kata2 != $kata3) {
    ?>
    <script>
        alert('Maaf, sila pastikan kata laluan baru sama dengan ulang kata laluan baru.');
        window.location = 'index.php?menu=katalaluan';
    </script>
    <?php
} else {
    $idbooking = $_SESSION['idstudent'];
    $sql = "SELECT * FROM student WHERE idstudent = $idstudent";
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($kata1, $row->password)) {
        $password = password_hash($kata2, PASSWORD_DEFAULT);
        $sql = "UPDATE student SET password = '$password' WHERE idstudent = $idstudent";
        $conn->query($sql);
        ?>
        <script>
            alert('Kata laluan baru telah berjaya disimpan.');
            window.location = 'index.php?menu=katalaluan';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Maaf, sila pastikan kata laluan asal salah.');
            window.location = 'index.php?menu=katalaluan';
        </script>
        <?php
    }
}