<?php
include("connection.php");
?>

<h1>Aplikasi Mahasiswa</h1>

<a href="tambah.php">Tambah</a>
<br>
<table border="1">
    <thead>
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>KELAS</th>
        </tr>
    </thead>
    <tbody>

<?php
$sql = "select * from mahasiswa";
$result = pg_query($sql);

while($row = pg_fetch_object($result)):
?>
        <tr>
            <td><?= $row->nim ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->kelas ?></td>
        </tr>
<?php endwhile; ?>
    </tbody>
</table>