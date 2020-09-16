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
              <form role="form" action="<?php echo base_url().'index.php/pengajuanbansos/update'; ?>" method="post">
              <div class="col-md-6">
              <table class="table table-bordered">
                <tr>
                  <th>Field</th>
                  <th>Isi</th>
                </tr>
                <tr>
                  <td>Jenis Pengajuan</td>
                  <td><?php echo $value->Jenis_Pengajuan?></td>
                  <input type="hidden" name="id_subm" value="<?php echo $value->id_subm?>">
                  <input type="hidden" name="JP" value="<?php echo $value->Jenis_Pengajuan?>">

                </tr>
                <tr>
                  <td>NIK</td>
                  <td><?php echo $value->NIK?></td>
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
                  <td>Alamat</td>
                  <input type="hidden" name="alamat" value="<?php echo $value->Alamat?>">

                  <td><?php echo $value->Alamat?></td>
                </tr>
                <tr>
                  <td>Jabatan</td>
                  <input type="hidden" name="jabatan" value="<?php echo $value->jabatan?>">

                  <td><?php echo $value->jabatan?></td>
                </tr>
                <tr>
                  <td>Nama Organisasi</td>
                  <input type="hidden" name="nama_org" value="<?php echo $value->Nama_org?>">

                  <td><?php echo $value->Nama_org?></td>
                </tr>
                <tr>
                  <td>No Registrasi</td>
                  <input type="hidden" name="no_registrasi" value="<?php echo $value->No_REG?>">

                  <td><?php echo $value->No_REG?></td>
                </tr>

              </table>
            </div>
            <div class="col-md-6">
            <table class="table table-bordered">

              <tr>
                <th>Field</th>
                <th>Isi</th>
              </tr>
              <tr>
                <td>Alamat Kantor</td>
                <input type="hidden" name="alamat_kantor" value="<?php echo $value->Alamat_kantor?>">

                <td><?php echo $value->Alamat_kantor?></td>
              </tr>
              <tr>
                <td>Bagian</td>
                <input type="hidden" name="bagian" value="<?php echo $value->Bagian?>">

                <td><?php echo $value->Bagian?></td>
              </tr>
              <tr>
                <td>Bidang</td>
                <input type="hidden" name="Bidang" value="<?php echo $value->Bidang?>">

                <td><?php echo $value->Bidang?></td>
              </tr>
              <tr>
                <td>Jumlah Anggota</td>
                <input type="hidden" name="jumlah_agt" value="<?php echo $value->Anggota?>">

                <td><?php echo $value->Anggota?></td>
              </tr>
              <tr>
                <td>Nama Ketua</td>
                <input type="hidden" name="nama_ketum" value="<?php echo $value->Nama_ket?>">

                <td><?php echo $value->Nama_ket?></td>
              </tr>
              <tr>
                <td>NIK Ketua</td>
                <input type="hidden" name="nik_ketum" value="<?php echo $value->Nik_ket?>">

                <td><?php echo $value->Nik_ket?></td>
              </tr>
              <tr>
                <td>Nama Sekeretaris</td>
                <input type="hidden" name="nama_sek" value="<?php echo $value->Nama_sek?>">

                <td><?php echo $value->Nama_sek?></td>
              </tr>
              <tr>
                <td>NIK Sekretaris</td>
                <input type="hidden" name="nik_sek" value="<?php echo $value->Nik_sek?>">

                <td><?php echo $value->Nik_sek?></td>
              </tr>
              <tr>
                <td>Nama Bendahara</td>
                <input type="hidden" name="nama_ben" value="<?php echo $value->Nama_ben?>">

                <td><?php echo $value->Nama_ben?></td>
              </tr>
              <tr>
                <td>NIK Bendahara</td>
                <input type="hidden" name="nik_ben" value="<?php echo $value->Nik_ben?>">

                <td><?php echo $value->Nik_ben?></td>
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
