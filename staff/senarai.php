<h1>Senarai Nama Pelajar</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Username</th>
        <th>Nama Penuh</th>
        <th>Age</th>
        <th>IcNumber</th>
        <th>Email</th>
        <th>Class</th>
        <th>Phone Number</th>
        
    </tr>
      <?php
    $bil = 1;
    $sql = " SELECT * FROM student ORDER BY fullname";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->fullname; ?></td>
			<td><?php echo $row->age; ?></td>
			<td><?php echo $row->icnum; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->class; ?></td>
			<td><?php echo $row->phonenum; ?></td>
            <td>
                <a href="reset.php?idStudent=<?php echo $row->idStudent; ?>">Reset</a>
                |
                <a href="index.php?menu=edit&idStudent=<?php echo $row->idStudent; ?>">Edit</a>
                |
                <a href="padam.php?idStudent=<?php echo $row->idStudent; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
