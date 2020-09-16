<section class="content-header">
  <h1>
    Pengajuan Hibah
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Operator</a></li>
    <li class="active">Pengajuan Hibah</li>
  </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->


            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>No Reg</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                  <?php
               foreach ($dok as $value) {
                 # code...

               ?>
                <tr>
                  <td><?php echo $value->NIK; ?></td>
                  <td><?php echo $value->Nama_lengkap; ?></td>
                  <td><?php echo $value->No_REG; ?></td>
                  <td><?php echo $value->status; ?></td>
                  <td>
                    <?php if ($value->status=='default'){ ?>
                      <a href="<?php echo base_url().'index.php/pengajuanhibah/edit/'.$value->id_subm?>" class="btn btn-info">
                      <i class="fa fa fa-edit"></i> Verifikasi </a>
                    <?php }
                    elseif($value->status=='Diterima'){ ?>
                      <a href="<?php echo base_url().'index.php/pengajuanhibah/download/'.$value->id_subm?>" target="_blank" class="btn btn-success">
                      <i class="fa fa fa-cloud-download"></i> Download </a>
                    <?php } ?>
                    <a href="<?php echo base_url().'index.php/pengajuanhibah/del/'.$value->id_subm?>" class="btn btn-danger">
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
