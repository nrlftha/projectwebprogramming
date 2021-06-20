<h1>Senarai Buku</h1>
<table border="1">
    <tr>
        <th>Bil</th>
        <th>Nama Buku</th>
        <th>Jenis Buku</th>
    </tr>
    <?php
    $bil = 1;
    $sql = " SELECT * FROM book ORDER BY typeBook";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->Title; ?></td>
            <td><?php echo $row->typeBook; ?></td>
            <td>
                <a href="index.php?menu=edit&idBook=<?php echo $row->idBook; ?>">Edit</a>
                |
                <a href="padam.php?idBook=<?php echo $row->idBook; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
	
</table>