<?php
include '../../lib/query.php';

$data = getPegawaiAll();

foreach ($data as $key) {
?>
<tr>
  <td><?= $key['nama'] ?></td>
  <td><?= $key['nik'] ?></td>
  <td><?= $key['jenis_kelamin'] ?></td>
  <td><?= $key['alamat'] ?></td>
  <td>Action</td>
</tr>
<?php
}
