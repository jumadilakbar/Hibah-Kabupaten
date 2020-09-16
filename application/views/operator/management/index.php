<section class="content-header">
  <h1>
    Management User
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Operator</a></li>
    <li class="active">Management User</li>
  </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
              <a href="<?php echo base_url().'index.php/management/add'?>" class="btn btn-success"> <i class="fa fa-plus"></i> Tambah</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Nama Lengkap</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                  <?php
               foreach ($user as $value) {
                 # code...

               ?>
                <tr>
                  <td><?php echo $value->username; ?></td>
                  <td><?php echo $value->email; ?></td>
                  <td><?php echo $value->Nama_lengkap; ?></td>
                  <td><?php echo $value->level; ?></td>
                  <td>
                    <a href="<?php echo base_url().'index.php/management/edit/'.$value->id_user?>" class="btn btn-info"><i class="fa fa fa-edit"></i></a>
                    <a href="<?php echo base_url().'index.php/management/del/'.$value->id_user?>" class="btn btn-danger"><i class="fa  fa-trash-o"></i></a>

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
