<?php
session_start();
if ($_SESSION['status'] != "admin_login") {
  header("location:index.php?pesan=belum_login");
}
$username = $_SESSION['username'];
require '../mainconfig.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data users.xls");
?>

<table border="1">
  <tr>
    <th>
      id
    </th>
    <th>nama</th>
    <th>username</th>
    <th>password</th>
    <th>prodi</th>
    <th>pilihan</th>
  </tr>

  <?php
  $cek_user = mysqli_query($db, "SELECT * FROM users WHERE pilihan = '0'");
  $nomor = 1;
  while ($data_user = mysqli_fetch_assoc($cek_user)) {
  ?>
    <tr>
      <td>
        <?php echo $nomor ?>
      </td>
      <td><?php echo $data_user['nama'] ?></td>
      <td><?php echo $data_user['username'] ?></td>
      <td><?php echo $data_user['password'] ?></td>
      <td><?php echo $data_user['prodi'] ?></td>
      <td><?php echo $data_user['pilihan'] ?></td>
    </tr>
  <?php
    $nomor++;
  }
  ?>
</table>