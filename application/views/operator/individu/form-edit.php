<section class="content-header">
      <h1>
        Form Verifikasi
        <small>preview data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Verifikasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <?php
          foreach ($dok as $value) {
            // code...
           ?>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengajuan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="<?php echo base_url().'index.php/bansosindividu/update'; ?>" method="post">
              <div class="col-md-6">
              <table class="table table-bordered">
                <tr>
                  <th>Field</th>
                  <th>Isi</th>
                </tr>
                <tr>
                  <td>NIK</td>
                  <td><?php echo $value->NIK?></td>
                  <input type="hidden" name="id" value="<?php echo $value->id?>">
                  <input type="hidden" name="NIK" value="<?php echo $value->NIK?>">
                </tr>

                <tr>
                  <td>Nama Lengkap</td>
                  <input type="hidden" name="Nama" value="<?php echo $value->Nama_lengkap?>">
                  <td><?php echo $value->Nama_lengkap?></td>
                </tr>
                <tr>
                  <td>Pekerjaan</td>
                  <input type="hidden" name="job" value="<?php echo $value->Pekerjaan?>">

                  <td><?php echo $value->Pekerjaan?></td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <input type="hidden" name="tempat_lahir" value="<?php echo $value->Tempat_lahir?>">

                  <td><?php echo $value->Tempat_lahir?></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <input type="hidden" name="tgl_lahir" value="<?php echo $value->Tanggal_lahir?>">

                  <td><?php echo $value->Tanggal_lahir?></td>
                </tr>
                <tr>
                  <td>Nama Lengkap</td>
                  <input type="hidden" name="Nama" value="<?php echo $value->Nama_lengkap?>">
                  <td><?php echo $value->Nama_lengkap?></td>
                </tr>
                <tr>
                  <td>Pekerjaan</td>
                  <input type="hidden" name="job" value="<?php echo $value->Pekerjaan?>">

                  <td><?php echo $value->Pekerjaan?></td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <input type="hidden" name="tempat_lahir" value="<?php echo $value->Tempat_lahir?>">

                  <td><?php echo $value->Tempat_lahir?></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <input type="hidden" name="tgl_lahir" value="<?php echo $value->Tanggal_lahir?>">

                  <td><?php echo $value->Tanggal_lahir?></td>
                </tr>
                <tr>
                  <td>Bantuan yang telah diterima</td>
                  <input type="hidden" name="bantuan" value="<?php echo $value->Bantuan?>">

                  <td><?php echo $value->Bantuan?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <input type="hidden" name="alamat" value="<?php echo $value->Alamat?>">

                  <td><?php echo $value->Alamat?></td>
                </tr>

              </table>
            </div>

          <div class="col-md-6">
            <div class="form-group">
                <label>Pilih Verifikasi</label>
                <select class="form-control" name="status">
                  <option value="Diterima">Diterima</option>
                  <option value="Ditolak">Ditolak</option>
                </select>
              </div>
              <!-- <div class="box-footer"> -->
                <button type="submit" class="btn btn-primary">Simpan</button>
              <!-- </div> -->
          </div>

          </form>

          </div>
        </div>

      </div>

      <?php
    }
       ?>
      </div>
    </section>
