<?php
$idBook = $_GET['idBook'];
$sql = "SELECT Title, typeBook FROM book WHERE idBook = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idBook);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($Title, $typeBook);
$stmt->fetch();
$stmt->close();
?>
<h1>Daftar Buku Baru</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idBook" value="<?php echo $idBook; ?>">
    <table>
        <tr>
            <td>Nama Buku</td>
            <td><input type="text" name="Title" value="<?php echo $Title; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Buku</td>
            <td><input type="text" name="typeBook" value="<?php echo $typeBook; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>