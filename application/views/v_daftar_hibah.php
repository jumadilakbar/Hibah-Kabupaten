
<h3>Form Pendaftaran Hibah</h3>
<hr>
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>

    </div>
</div>
<form role="form" action="<?php echo base_url().'index.php/hibah/add_proses'; ?>" method="POST">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">

                <h3> Pendaftaran Identitas Diri</h3>
                <div class="form-group">
                  <label for="applicant[nik]">NIK</label>    <input type="text" name="NIK" value="" class="form-control" placeholder=" Masukkan NIK">
                </div>

                <div class="form-group">
                  <label for="applicant[name]">Nama</label>    <input type="text" name="Nama" value="" class="form-control" placeholder="Masukkan Nama lengkap">
                </div>

                <div class="form-group">
                  <label for="applicant[job]">Pekerjaan</label>    <input type="text" name="job" value="" class="form-control" placeholder = "Masukkan Pekerjaan ">
                </div>

                <div class="form-group">
                  <label for="applicant[birth_place]">Tempat Lahir</label>    <input type="text" name="tempat_lahir" value="" class="form-control" placeholder = "Masukkan Tempat Lahir ">
                </div>

                <div class="form-group">
                  <label for="applicant[birth_day]">Tanggal Lahir</label>    <input type="text" name="tgl_lahir" value="" class="form-control date-picker" placeholder="dd-mm-yyyy">
                </div>

                <div class="form-group">
                  <label for="applicant[address]">Alamat</label>    <textarea name="alamat" cols="40" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="applicant[position]">Jabatan di Organisasi</label>    <select name="jabatan" class="form-control">
              <option value="Ketua">Ketua</option>
              <option value="Wakil Ketua">Wakil Ketua</option>
              <option value="Sekretaris">Sekretaris</option>
              <option value="Bendahara">Bendahara</option>
              <option value="Anggota">Anggota</option>
              <option value="Lain-lain">Lain-lain</option>
              </select>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>

        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Pendaftaran Identitas Kelompok</h3>
                <div class="form-group">
                    <label class="control-label">Nama Kelompok/Organisasi</label>
                    <input maxlength="200" type="text" name="nama_org" required="required" class="form-control" placeholder="Nama Organisasi" />
                </div>
                <div class="form-group">
                    <label class="control-label">No Registrasi Kelompok</label>
                    <input maxlength="200" type="text" name="no_registrasi" required="required" class="form-control" placeholder="No Registrasi" />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Selanjutnya</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Pendaftaran Identitas Kelompok</h3>
                <div class="form-group">
                  <label for="applicant[address]">Alamat Kantor</label>    <textarea name="alamat_kantor" cols="40" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="applicant[position]">Termasuk Dalam Bagian</label>
                  <select name="bagian" class="form-control">
                    <option value="Kesbangpol1">Kesbangpol</option>
                    <option value="Kesbangpol2">Kesbangpo2</option>
                    <option value="Kesbangpol3">Kesbangpo3</option>
                    <option value="Kesbangpol4">Kesbangpo4</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="applicant[position]">Kegiatan di Bidang</label>
                  <select name="Bidang" class="form-control">
                    <option value="Perekonomian">Perekonomian</option>
                    <option value="UKM">UKM</option>
                    <option value="Bencana">Bencana</option>
                    <option value="Lain-lain">Lain-lain</option>
                  </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Jumlah Anggota</label>
                    <input maxlength="200" type="number" name="jumlah_agt" required="required" class="form-control" placeholder="jumlah anggota" />
                </div>
                 <div class="form-group">
                  <div class="col-md-6">
                    <label class="control-label">Nama Ketua Kelompok</label>
                    <input maxlength="200" type="text" name="nama_ketum" required="required" class="form-control" placeholder="Nama ketua" />
                  </div>
                  <div class="col-md-6">
                    <label class="control-label">NIK Ketua Kelompok</label>
                    <input maxlength="200" type="text" name="nik_ketum" required="required" class="form-control" placeholder="NIK Ketua" />
                  </div>
                 </div>
                 <div class="form-group">
                  <div class="col-md-6">
                    <label class="control-label">Nama Sekretaris Kelompok</label>
                    <input maxlength="200" type="text" name="nama_sek" required="required" class="form-control" placeholder="Nama Sekretaris" />
                  </div>
                  <div class="col-md-6">
                    <label class="control-label">NIK Sekretaris Kelompok</label>
                    <input maxlength="200" type="text" name="nik_sek" required="required" class="form-control" placeholder="NIK Sekretaris" />
                  </div>
                 </div>
                 <div class="form-group">
                  <div class="col-md-6">
                    <label class="control-label">Nama Bendahara Kelompok</label>
                    <input maxlength="200" type="text" name="nama_ben" required="required" class="form-control" placeholder="Nama Bedahara" />
                  </div>
                  <div class="col-md-6">
                    <label class="control-label">NIK Bendahara Kelompok</label>
                    <input maxlength="200" type="text" name="nik_ben" required="required" class="form-control" placeholder="NIK Bendahara" />
                  </div>
                 </div>
                 <br>
                <button class="btn btn-success btn-lg pull-right" style="margin-top: 10px; " type="submit">Submit</button>
            </div>
        </div>
    </div>

</form>

<script type="text/javascript">

  $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>
