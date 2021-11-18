<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title></title>
    </head>
    <body>
        <h3>Tampil Siswa</h3>
        <table class="table table-hover table-striped">
        <thead>
        <tr>
        <th>NO</th><th>NAMA SISWA</th><th>TANGGAL LAHIR</th><th>ALAMAT</th>
        </tr>
    </thead>
    <tbody>
<?php
include "conn.php";

$qry_users=mysqli_query($conn,"select * from users");

$no=0;
while($data_users=mysqli_fetch_array($qry_users)){
    $no++;?>
    <tr>
    <td><?=$no?></td><td><?=$data_users['nama_siswa']?></td>
    <td><?=$data_user['tanggal_lahir']?></td>
    <td><?=$data_user['alamat']?></td>
    <td><?=$data_user['gender']?></td> 
    <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>

<?php
}
?>
<td><a href="tambah_siswa.php" class="btn btn-success">Tambah Siswa</a></td>

<?php
?>

</tbody>
</table>
<script src=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</body>
</html>