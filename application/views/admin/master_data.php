<h3>Halaman Pendaftar Bansos</h3>
<a href="<?php echo base_URL(); ?>index.php/Admin/master_data/add" class="btn btn-success btn-sm"><i class="icon-plus"> </i> Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th>id_user</th>
        <th>Nama User</th>
        <th>Email</th>
      </tr>
    </thead>
   
    <tbody>
       <?php 
    foreach ($user as $value) {
      # code...
    
    ?>
      <tr>
        <td><?php echo $value->id_user; ?></td>
        <td><?php echo $value->username; ?></td>
        <td><?php echo $value->email; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>