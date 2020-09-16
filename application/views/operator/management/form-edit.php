<section class="content-header">
  <h1>
    Form Edit User
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Management</a></li>
    <li class="active">Edit User</li>
  </ol>
</section>
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php
          foreach ($dok as $value) {
            // code...
           ?>
          <form role="form" action="<?php echo base_url().'index.php/management/update'; ?>" method="post">
            <input type="hidden" name="id_user" value="<?php echo $value->id_user ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $value->username ?>" id="exampleInputEmail1" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $value->password ?>" id="exampleInputEmail1" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" name="email" value="<?php echo $value->email ?>" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $value->Nama_lengkap ?>" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                  <label>Pilih Level</label>
                  <select class="form-control" name="level">
                    <option value="Admin">Admin</option>
                    <option value="Operator">Operator</option>

                  </select>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          <?php
            }
           ?>
        </div>
      </div>
    </div>
</section>
