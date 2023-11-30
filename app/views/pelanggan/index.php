<h2>PELANGGAN</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Tambah Pelanggan</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>SERI PELANGGAN</th>
            <th>METERAN PELANGGAN</th>
            <th>PELANGGAN AKTIF</th>
            <th>GOLONGAN</th>
            <th>PETUGAS</th>
            <th>KETERANGAN</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><?php echo $row['pel_meteran']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>
                  <td>
                  <a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a>
                  <a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>"class="btn">Delete</a>
                  </td>
            </tr>
      <?php } ?>

</table>