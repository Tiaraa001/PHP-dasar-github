<?php

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'] ;
    $jenis = $_POST['jenis'];
    $kls = $_POST['kls'];
    $alamat = $_POST['alamat'];
}
?>

<center><table border="8">
  <tr>
    <td><?php echo "Nama" ?></td>
    <td><?php echo"Jenis Kelamin" ?></td>
    <td><?php echo "Kelas" ?></td>
    <td><?php echo"Alamat" ?></td>
  </tr>
  <tr>
  <td><?php echo "$nama" ?></td>
  <td><?php echo"$jenis" ?></td>
  <td><?php echo "$kls" ?></td>
  <td><?php echo"$alamat" ?></td>

</tr>
</table>
<a href="07.php"> kembali</a>