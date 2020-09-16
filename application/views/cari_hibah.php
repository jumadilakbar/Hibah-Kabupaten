<br>
<?php
if(empty($dok)){
  echo '<div class="panel panel-default">
  <div class="panel-body">Panel Informasi</div>
  <div class="panel-footer">Data Tidak Tersedia</div>
</div>';
}
else{
  foreach ($dok as  $value) {
     if($value->status=='Diterima'){
       echo '<div class="panel panel-default">
       <div class="panel-body">Panel Informasi</div>
       <div class="panel-footer">Selamat Proposal Anda Diterima</div>
     </div>';
     }
     else{
       echo '<div class="panel panel-warning">
       <div class="panel-body">Panel Informasi</div>
       <div class="panel-footer">Proposal anda ditolak</div>
     </div>';
     }
  }
}

//var_dump($dok);

 ?>
