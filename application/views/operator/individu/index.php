<section class="content-header">
  <h1>
    Pengajuan Bansos Individu
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Operator</a></li>
    <li class="active">Pengajuan Bansos Individu</li>
  </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
              <a href="#" class="btn btn-success"> <i class="fa fa-plus"></i> Tambah</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                  <?php
               foreach ($user as $value) {
                 # code...

               ?>
                <tr>
                  <td><?php echo $value->NIK; ?></td>
                  <td><?php echo $value->Nama_lengkap; ?></td>
                  <td><?php echo $value->Tanggal_lahir; ?></td>
                  <td><?php echo $value->status; ?></td>
                  <td>
                    <?php if ($value->status=='default'){ ?>
                      <a href="<?php echo base_url().'index.php/bansosindividu/edit/'.$value->id?>" class="btn btn-info">
                      <i class="fa fa fa-edit"></i> Verifikasi </a>
                    <?php }
                    elseif($value->status=='Diterima'){ ?>
                      <a href="<?php echo base_url().'index.php/bansosindividu/download/'.$value->id?>" target="_blank" class="btn btn-success">
                      <i class="fa fa fa-cloud-download"></i> Download </a>
                    <?php } ?>
                    <a href="<?php echo base_url().'index.php/bansosindividu/del/'.$value->id?>" class="btn btn-danger">
                    <i class="fa  fa-trash-o"></i> Hapus </a>
                  </td>

                </tr>
                <?php
                }
                ?>
                <!-- </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <script type="text/javascript">
      // window.print();
    </script>
