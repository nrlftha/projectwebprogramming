<?php #login
require('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

# admin = $2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6

if ($username == 'admin') {
    $sql = "SELECT * FROM admin ";
    $row = $conn->query($sql)->fetch_object();
    echo $conn->error;
    if (password_verify($password, $row->password)) {
        $_SESSION['admin'] = 'admin';
        header('location: admin/index.php');
    } else {
        ?>
        <script>
            alert('Sorry 1, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
} elseif ($username == 'staff') {
    $sql = "SELECT * FROM staff ";
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($password, $row->password)) {
        $_SESSION['staff'] = 'staff';
        header('location: staff/index.php');
    } else {
        ?>
        <script>
            alert('Sorry 2, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
} else {
    $sql = "SELECT idStudent, password FROM student WHERE username = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $num_rows = $stmt->num_rows;
    $stmt->bind_result($idStudent, $pswd);
    
    if ($num_rows == 1) {
        echo $conn->error;
        $stmt->fetch();
        if (password_verify($password, $pswd)) {
            $_SESSION['idStudent'] = $idStudent;
            header('location: student/index.php');
        } else {
            ?>
            <script>
                alert('Sorry 3, invalid username/password!');
                window.location = './';
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert('Sorry 4, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
    $stmt->close();
}