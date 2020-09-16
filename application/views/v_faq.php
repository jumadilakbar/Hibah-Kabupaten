<h1>FAQ</h1>
<hr>
<div class="row">
<div class="col-sm-8">
  <div class="panel panel-default">
    <div class="panel-body">
      <?php
      foreach ($dok as  $value) {
        echo $value->konten;
      }
       ?>
	   </div>
  </div>
</div>

<div class="col-sm-4">
  <div class="panel panel-default">
    <div class="panel-body">
      <a class="btn btn-sm btn-primary btn-block" href="<?php echo base_url().'index.php/hibah/daftar_hibah'?>">Hibah</a>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      <a class="btn btn-sm btn-info btn-block" href="<?php echo base_url().'index.php/bansos/daftar_personal'?>">Bansos Individu</a>
    </div>
  </div>
    <div class="panel panel-default">
    <div class="panel-body">
      <a class="btn btn-sm btn-info btn-block" href="<?php echo base_url().'index.php/bansos/daftar_group'?>">Bansos Kelompok</a>
    </div>
  </div>
</div>

</div>
