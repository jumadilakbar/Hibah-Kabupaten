<h1>Pendaftaran Identitas Diri</h1>
<hr>
<div class="row">
<div class="col-xs-6">
<form action="<?php echo base_url().'index.php/bansos/add_personal'; ?>" method="POST">
	<div id="nik-checker">
  <div class="form-group">
    <label for="nik">Masukkan NIK</label>    <input type="text" name="nik" value="" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="nik">Nama</label>    <input type="text" name="nama" value="" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="nik">Pekerjaan</label>    <input type="text" name="pekerjaan" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="nik">Tempat Lahir</label>    <input type="text" name="tempat_lahir" value="" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="nik">Tanggal Lahir</label>    <input type="text" name="tgl_lahir" value="" class="form-control" required>
  </div>
  <div class="form-group">
	    <label>Bantuan sosial yang telah didapat</label>    <div class="checkbox">
	      <label>
	        <input type="checkbox" name="bantuan[]" value="Raskin">
	 				Raskin
	      </label>
	    </div>

	    <div class="checkbox">
	      <label>
	        <input type="checkbox" name="bantuan[]" value="Beasiswa">
	 			Beasiswa
	      </label>
	    </div>

	    <div class="checkbox">
	      <label>
	        <input type="checkbox" name="bantuan[]" value="BPJS">
	 			BPJS
	      </label>
	    </div>

	    <div class="checkbox">
	      <label>
	        <input type="checkbox" name="bantuan[]" value="BLT">
	 			BLT
	      </label>
	    </div>
	  </div>
	  <div class="form-group">
		  <label for="comment">Alamat</label>
		  <textarea class="form-control" name="alamat" rows="5" id="comment"></textarea>
		</div>
	<div class="form-group">
	    <button id="btn-check-applicant" type="submit" class="form-control btn btn-primary btn-sm">Submit</button>
	  </div>
	</div>


  </div>
</form>

  </div>
