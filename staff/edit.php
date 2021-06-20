<?php
$idStudent = $_GET['idStudent'];
$sql = "SELECT username, fullname, age, icnum, email, class, phonenum FROM student WHERE idStudent = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idStudent);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username, $fullname, $age, $icnum, $email, $class, $phonenum);
$stmt->fetch();
$stmt->close();
?>
<h1>Daftar Pelajar </h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idStudent" value="<?php echo $idStudent; ?>">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
        </tr>
        <tr>
            <td>Nama Penuh</td>
            <td><input type="text" name="fullname" value="<?php echo $fullname; ?>"></td>
        </tr>
		<tr>
            <td>Age</td>
            <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
        </tr>
        <tr>
            <td>IC Number</td>
            <td><input type="text" name="icnum" value="<?php echo $icnum; ?>"></td>
        </tr>
		<tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td>Class</td>
            <td><input type="text" name="class" value="<?php echo $class; ?>"></td>
        </tr>
		<tr>
            <td>Phone Number</td>
            <td><input type="text" name="phonenum" value="<?php echo $phonenum; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>