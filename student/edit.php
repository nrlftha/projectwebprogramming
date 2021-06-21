<?php
$idBookng = $_GET['idBooking'];
$sql = "SELECT idStudent, idBook, bookingdate, returndate FROM booking WHERE idBooking = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idBooking);
$stmt->execute();
$stmt->store_result();7
$stmt->bind_result($idStudent, $idBook, $bookingdate, $returndate);
$stmt->fetch();
$stmt->close();
?>
<h1>Senarai Pinjaman</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idBooking" value="<?php echo $idBooking; ?>">
    <table>
    <tr>
            <td>Nama Pelajar</td>
            <td><input type="text" name="idStudent"></td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td><input type="text" name="idBook"></td>
        </tr>
        <tr>
            <td>Tanggal Pinjaman</td>
            <td><input type="date" name="bookingdate"></td>
        </tr>
         <tr>
            <td>Tanggal Pengembalian</td>
            <td><input type="date" name="returndate"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>