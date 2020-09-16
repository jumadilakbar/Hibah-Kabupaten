 <br>
<div class="row">

<div class="col-xs-8">
  <div class="panel panel-default">
    <div class="panel-body">
	  <ul class="nav nav-tabs nav-justified">
	    <li role="presentation" class="active"><a href="#umum" data-toggle="tab">Informasi Umum</a></li>
        <li role="presentation"><a href="#syarat" data-toggle="tab">Persyaratan</a></li>
        <li role="presentation"><a href="#prosedur" data-toggle="tab">Prosedur</a></li>
      </ul>
	  <div class="tab-content">
	    <div class="tab-pane active" id="umum"><br>
        <?php
        foreach ($dok as $value) {
          echo $value->konten;
        }
         ?>
		</div>
		<div class="tab-pane" id="syarat"><br>
      <?php
      foreach ($dok1 as $value) {
        echo $value->konten;
      }
       ?>
    </div>
		<div class="tab-pane" id="prosedur"><br>
      <?php
      foreach ($dok2 as $value) {
        echo $value->konten;
      }
       ?>
		  </div>
        </div>
    </div>
  </div>
</div>

<div class="col-xs-4">
  <div class="panel panel-default">
    <div class="panel-body">
      <a class="btn btn-sm btn-primary btn-block" href="<?php echo base_url().'index.php/bansos/daftar_personal'?>">Daftar Bansos Individu</a>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      <a class="btn btn-sm btn-primary btn-block" href="<?php echo base_url().'index.php/bansos/daftar_group'?>">Daftar Bansos Kelompok</a>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      <a class="btn btn-sm btn-info btn-block" href="<?php echo base_url().'index.php/bansos/cek_proposal'?>">Cek Status Proposal</a>
    </div>
  </div>
</div>

</div>
