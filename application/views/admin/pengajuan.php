<h3>Halaman Pendaftar Bansos</h3>
<table class="table">
    <thead>
      <tr>
        <th>Nama Ketua</th>
        <th>NO Registrasi</th>
        <th>Bidang</th>
        <th>Aksi</th>
      </tr>
    </thead>
   
    <tbody>
       <?php 
    foreach ($data as $value) {
     
    ?>
      <tr>
        <td><?php echo $value->Nama_ket; ?></td>
        <td><?php echo $value->No_REG; ?></td>
        <td><?php echo $value->Bidang; ?></td>
        <td><a href="<?php echo base_URL(); ?>index.php/Admin/pengajuan/detail/<?php echo $value->No_REG?>" class="btn btn-success btn-sm"><i class="icon-plus"> </i> Detail</a></td>

      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>