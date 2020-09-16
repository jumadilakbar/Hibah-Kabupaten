<section class="content-header">
  <h1>
    Form Hubungi Kami
    <small>Konten bansos</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Operator</a></li>
    <li><a href="#">Konten bansos</a></li>
    <li class="active">Hubungi Kami</li>
  </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="box">
         <div class="box-header">
           <h3 class="box-title">Hubungi Kami
             <small>Rapi dan Jelas</small>
           </h3>

         </div>
         <!-- /.box-header -->
         <?php
         foreach ($dok as $data) {
           // code...
          ?>
         <div class="box-body pad">
           <form action="<?php echo base_url().'index.php/hubungi/update_umum'?>" method="post">
             <?php
              $pilihan = $this->uri->segment('2');
              ?>
             <input type="hidden" name="id_konten" value="<?php echo $data->id_konten?>">
             <input type="hidden" name="judul" value="<?php echo $data->judul?>">
             <input type="hidden" name="segment" value="<?php echo $pilihan?>">
             <textarea class="textarea" name="konten" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
               <?php
               echo $data->konten;
                ?>
             </textarea>
             <hr>
             <label for="">Status : </label>
             <!-- <hr> -->
             <div class="form-group">
                <label>
                  <input type="radio" name="status" value="Aktif" class="flat-red"
                  <?php
                  if ($data->status=='Aktif') {
                    echo 'checked';
                  }
                   ?>
                   >
                  Aktif
                </label>
                <label>
                  <input type="radio" name="status" value="Non-Aktif" class="flat-red"
                  <?php
                  if ($data->status=='Non-Aktif') {
                    echo 'checked';
                  }
                   ?>
                  >
                  Non-Aktif
                </label>

              </div>
             <input type="submit" class="btn btn-info" name="simpan" value="Simpan">
           </form>
         </div>
         <?php
       }

         ?>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
  //iCheck for checkbox and radio inputs

  </script>
