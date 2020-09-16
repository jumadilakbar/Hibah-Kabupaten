<br>
<?php
if(empty($dok)){
  echo '<div class="panel panel-default">
  <div class="panel-body">Panel Informasi</div>
  <div class="panel-footer"><b>Data Tidak Tersedia</b></div>
</div>';
}
else{
  foreach ($dok as  $value) {
     if($value->status=='Diterima'){
       echo '<div class="panel panel-default">
       <div class="panel-body">Panel Informasi</div>
       <div class="panel-footer"><b>Selamat Proposal Anda Diterima</b></div>
     </div>';
     }
     else if($value->status=='default'){
       echo '<div class="panel panel-default">
       <div class="panel-body">Panel Informasi</div>
       <div class="panel-footer"><b>Sedang Proses Verifikasi</b></div>
     </div>';
     }
     else{
       echo '<div class="panel panel-warning">
       <div class="panel-body">Panel Informasi</div>
       <div class="panel-footer"><b>Proposal anda ditolak</b></div>
     </div>';
     }
  }
}

//var_dump($dok);

 ?>
