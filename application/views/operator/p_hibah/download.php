<head>
  <style media="screen">
  div.a {
text-align: center;
}

div.b {
text-align: left;
}

div.c {
text-align: right;
}

div.d {
text-align: justify;
}
  </style>
</head>
<?php
foreach ($dok as $value) {
  // code...
  $nama = $value->Nama_lengkap;
  $jabatan = $value->jabatan;
  $alamat = $value->Alamat;
  $nama_org = $value->Nama_org;
  $nik = $value->NIK;

  // echo 'Nama Lengkap : '.$value->Nama_lengkap."<br>";
  // echo 'No Registrasi : '.$value->No_REG."<br>";
  // echo "dll";
}
 ?>
 <script type="text/javascript">
   // window.print();
 </script>

<center><h5>NASKAH PERJANJIAN HIBAH DAERAH (NPHD)</h5> </center>
<center><h5>ANTAR PEMERINTAH KABUPATEN BIMA </h5> </center>
<center><h5>DENGAN </h5> </center>
<center><h5>PENERIMA HIBAH </h5> </center>
<center><h5>NOMOR : 03.3/025/ /07.3/20.....</h5> </center>
<center><h5>NOMOR:  ....................20.......</h5> </center>
<center><h5>PEMBERIAN HIBAH BERUPA UANG BAGI PENYELENGGARAAN KEGIATAN</h5> </center>
<center><h5>(.......................... PENERIMA HIBAH ..........................)</h5> </center>
<p>Pada hari ini ............... Tanggal ............ Bulan ............... Tahun Dua Ribu ..............., kami yang
bertanda tangan dibawah ini:</p>
<table border="0">
  <tr>
    <td width=10%;>1. </td>
    <td width=40%;> <b>Hj. Indah Dhamayanti Putri</b> </td>
    <td width=50%;> Bupati/Sekretaris Daerah* Kabupaten Bima yang
            beralamat di Jalan Lintas Sumbawa-Bima Godo
            Kecamatan Woha, dalam hal ini bertindak untuk dan
            atas nama Pemerintahan Kabupaten Bima
            selanjutnya disebut PIHAK PERTAMA. </td>
  </tr>
  <tr>
    <td width=10%;>2. </td>
    <td width=40%;> <b><?php echo $nama ?></b> </td>
    <td width=50%;> <b><?php echo $jabatan ?></b>  yang beralamat di
                    <b><?php echo $alamat ?></b> , dalam hal ini bertindak
                    untuk dan atas nama <b><?php echo $nama_org ?></b>, selanjutnya disebut PIHAK KEDUA. </td>
  </tr>
</table>

<p>PIHAK PERTAMA dan PIHAK KEDUA yang selanjutnya disebut PARA PIHAK masing-masing dalam
kedudukannya tersebut di atas, sepakat untuk mengadakan Perjanjian Pemberian Hibah dengan
syarat-syarat dan ketentuan sebagai berikut:</p>

<center>
  <b>BAB I</b> <br>
  <b>TUJUAN DAN BESARAN</b> <br>
  <b>Pasal 1</b> <br>
  <b>TUJUAN</b> <br>
</center>
Pemberian Hibah berupa uang kepada <b><?php echo $nama_org ?></b> ditujukan untuk
menunjang pelaksaan program kerja/kegiatan <b><?php echo $nama_org ?></b> Tahun 20.....

<center>
  <b>Pasal 2</b> <br>
  <b>BESARAN</b> <br>
</center>
<p>(1) PIHAK PERTAMA memberikan hibah berupa uang kepada PIHAK KEDUA dengan nilai
maksimal sebesar Rp ................................................. (dengan huruf);</p>
<p>(2) Besaran hibah berdasarkan Surat Keputusan Bupati Bima sebagaimana tertuang dalam
Anggaran Pendapatan dan Belanja Daerah Kabupaten Bima Tahun Anggaran 20.......</p>

<center>
  <b>BAB II</b> <br>
  <b>HAK DAN KEWAJIBAN PARA PIHAK</b> <br>
  <b>Pasal 3</b> <br>
  <b>HAK PARA PIHAK</b> <br>
</center>
<p>(1) Hak PIHAK PERTAMA:</p>
<ul style="list-style-type:none;">
  <li>a. Menerima permohonan hibah dari PIHAK KEDUA yang disertai dengan proposal rencana kegiatan;</li>
  <li>b. Menerima laporan tentang pelaksanaan kegiatan yang bersumber dari dana hibah;</li>
  <li>c. Melakukan evaluasi terhadap pelaksanaan kegiatan.</li>
</ul>
<p>(2) Hak PIHAK KEDUA:</p>
<ul style="list-style-type:none;">
  <li>a. Menerima hibah yang besarnya sebagaimana dimaksud dalam Pasal 2 perjanjian ini;</li>
  <li>b. Mengatur pelaksanaan kegiatan sesuai dengan proposal dan naskah perjanjian hibah.</li>
</ul>

<center>
  <b>Pasal 4</b> <br>
  <b>KEWAJIBAN PARA PIHAK</b> <br>
</center>
<p>(1) Kewajiban PIHAK PERTAMA:</p>
<ul style="list-style-type:none;">
  <li>a. Memberikan hibah yang besarnya sebagaimana dimaksud dalam Pasal 2 perjanjian ini;</li>
  <li>b. Melakukan evaluasi terhadap realisasi pencairan keuangan bantuan dana belanja hibah kepada PIHAK KEDUA;</li>
  <li>c. Melakukan evaluasi atas penggunaan bantuan dana belanja hibah oleh PIHAK KEDUA melalui <b>(Dinas/instansi teknis terkait)</b> </li>
</ul>
<p>(2) Kewajiban PIHAK KEDUA:</p>
<ul style="list-style-type:none;">
  <li>a. Melaksanakan kegiatan sesuai tujuan pemberian dana bantuan hibah sebagaimana dimaksud Pasal 1 perjanjian ini;</li>
  <li>b. Bertanggung jawab secara fisik dan keuangan atas penggunaan dana hibah yang diterima sesuai dengan Rencana Penggunaan Uang (RPU) yang diajukan;</li>
  <li>c. Menyampaikan laporan pertanggungjawaban penggunaan bantuan dana hiban yang bersumber dari Anggaran Pendapatan Belanja Daerah (APBD) Kabupaten Bima Tahun
20.... kepada PIHAK PERTAMA;</li>
  <li>d. Penerima hibah wajib menyusun laporan penggunaan dana hibah yang disertai dengan surat pernyataan tanggungjawab.</li>
</ul>

<center>
  <b>BAB III</b> <br>
  <b>TATA CARA PENYALURAN DAN PELAPORAN</b> <br>
  <b>Pasal 5</b> <br>
  <b>Tata Cara Penyaluran</b> <br>
</center>
<p>(1) Penyaluran hibah berupa uang dilakukan melalui pemindahbukuan dari rekening kas umum
daerah ke rekening PIHAK KEDUA;</p>
<p>(2) Penyerahan bantuan dan belanja hibah oleh PIHAK PERTAMA dapat dilakukan secara
sekaligus atau bertahap sesuai kemampuan keuangan daerah dan kebutuhan yang diajukan
oleh PIHAK KEDUA;</p>
<p>(3) Dalam hal penyerahan hibah dilakukan secara bertahap, penyaluran tahap berikutnya
dilakukan bilamana laporan pertanggungjawaban atas penggunaan dana tahap sebelumnya
telah disampaikan oleh PIHAK KEDUA.</p>

<center>
  <b>Pasal 6</b> <br>
  <b>Tata Cara Pelaporan</b> <br>
</center>
<p>(1) Laporan disampaikan kepada Bupati melalui Pejabat Pengelola Keuangan Daerah (PPKD)
dengan tembusan SKPD terkait.</p>
<p>(2) Bukti-bukti pengeluaran yang lengkap dan sah wajib disimpan oleh penerima hibah sebagai
objek pemeriksaan.</p>
<p>(3) Penyampaian laporan pertanggungjawaban penggunaan bantuan dana belanja hibah,
dilakukan paling lambat 10 Januari tahun berikutnya.</p>

<center>
  <b>Pasal 7</b> <br>
  <b>PEMERIKSAAN</b> <br>
</center>
<p>PIHAK PERTAMA dan PIHAK KEDUA sepakat menunjuk Inspektorat Kabupaten Bima untuk
melaksanakan pengawasan terhadap penggunaan anggaran hibah yang bersumber dari dana
Anggaran Pendapatan dan Belanja Daerah Kabupaten Bima Tahun Anggaran 20......</p>

<center>
  <b>Pasal 8</b> <br>
  <b>KEADAAN KAHAR (FORCE MAJEURE)</b> <br>
</center>
<p>(1) Apabila terjadi hal-hal diluar kemampuan dan/atau kekuasaan salah satu pihak sehingga
mengakibatkan Perjanjian Ini tidak dapat dilaksanakan sebagian maupun seluruhnya maka
pihak tersebut memberitahukan hal tersebut kepada pihak lainnya dalam jangka waktu 7
(tujuh) hari kerja.</p>
<p>(2) Yang dimaksud dengan keadaan kahar (force majeure) adalah:</p>
  <ul>
    <li>a. Bencana alam seperti banjir, kebakaran, gempa bumi, angin topan, perang, huru hara,
  dan lain-lain yang terjadi bukan kemauan manusia atau kejadian yang ditetapkan
  sebagai bencana alam oleh pemerintah;</li>
  <li>b. Kebijakan pemerintah dalam bidang keuangan/moneter</li>
  </ul>

<center>
  <b>Pasal 9</b> <br>
  <b>PENYELESAIAN PERSELISIHAN</b> <br>
</center>
<p>(1) Apabila muncul perbedaan penafsiran atas pelaksanaan perjanjian ini dan/atau terdapat halhal lain yang belum cukup diatur atau yang tercantum dalam perjanjian ini akan diselesaikan
secara kekeluargaan dengan cara musyawarah untuk mencapai mufakat</p>
<p>(2) Apabila musyawarah untuk mencapai mufakat tidak tercapai maka akan ditempuh jalur
hukum dan oleh karena itu PIHAK PERTAMA dan PIHAK KEDUA sepakat memilih didomisili
hukun di Kantor Kepaniteraan Pengadilan Negeri Raba-Bima.</p>

<center>
  <b>Pasal 10</b> <br>
  <b>KETENTUAN LAIN-LAIN</b> <br>
</center>
<p>(1) Apabila hibah yang diberikan sebagaimana dimaksud dalam Pasal 2 perjanjian ini ternyata
belum cukup membiayai kegiatan yang dilaksanakan oleh PIHAK KEDUA maka PIHAK
PERTAMA dapat memberikan bantuan anggaran kepada PIHAK KEDUA dengan
pertanggungjawaban PIHAK KEDUA sesuai kemampuan keuangan daerah.</p>
<p>(2) Hal-hal yang belum diatur dan ditentukan dalam perjanjian hibah ini akan diatur kemudian
dalam perjanjian Hibah tambahan atau addendum yang merupakan bagian tidak terpisahkan
dengan perjanjian hibah ini.</p>

<center>
  <b>Pasal 11</b> <br>
  <b>PENUTUP</b> <br>
</center>
<p>Demikan perjanjian hibah ini dibuat dan ditandatangani pada hari dan tanggal tersebut di atas
dalam rangkap 3 (tiga) asli, 2 (dua) rangkap diantaranya bermaterai cukup oleh karenanya sah
dan mempunyai kekuatan hukun yang sama agar dapat dipergunakan sebagaimana mestinya.</p>

<table>
  <tr>
    <td width=50%><center>PIHAK KEDUA </center></td>
    <td width=50%><center>PIHAK PERTAMA</center></td>
  </tr>
  <tr>
    <td width=50%><center><?php echo $jabatan ?></center></td>
    <td width=50%><center>BUPATI/SEKRETARIS DAERAH* BIMA</center></td>
  </tr>
  <tr>
    <td><br><br><br></td>
    <td><br><br><br></td>
  </tr>

  <tr>
    <td width=50%><center><b><?php echo $nama ?></b></center></td>
    <td width=50%><center> <b>Hj. Indah Dhamayanti Putri</b></center></td>
  </tr>
</table>
<p>Keterangan: *Untuk jumlah s/d 5 juta ditandatangani oleh Sekretaris Daerah, > 5 juta
ditandatangani oleh Bupati</p>
<br>
<center>

<h5>HIBAH BERUPA UANG</h5>
<h5>PAKTA INTEGRITAS PENERIMA HIBAH</h5>
</center>
<p>Yang bertanda tangan dibawah ini:</p>
<table>
  <tr>
    <td>Nama </td>
    <td><?php echo ': '.$nama ?></td>
  </tr>
  <tr>
    <td>No Indentitas KTP </td>
    <td><?php echo ': '.$nik ?></td>
  </tr>
  <tr>
    <td>Alamat </td>
    <td><?php echo ': '.$alamat ?></td>
  </tr>
  <tr>
    <td>Jabatan </td>
    <td><?php echo ': '.$jabatan ?></td>
  </tr>
  <tr>
    <td>Bertindak untuk dan atas nama </td>
    <td><?php echo ': '.$nama_org ?></td>
  </tr>
</table>
<p>Dalam rangka pelaksanaan kegiatan yang dibiayai dari dana hibah, dengan ini menyatakan
bahwa saya:</p>
<p>1. Tidak akan melakukan praktek Korupsi, Kolusi dan Nepotisme (KKN);</p>
<p>2. Akan melaporkan kepada pihak yang berwajib/berwenang apabila mengetahui ada indikasi
Korupsi, Kolusi dan Nepotisme (KKN) dalam proses pelaksanaan kegiatan yang dibiayai dari
dana hibah ini;</p>
<p>3. Akan menggunakan dana hibah sesuai dengan usulan proposal hibah dan Naskah Perjanjian
Hibah Daerah serta pelaksanaannya akan mematuhi Peraturan Bupati Nomor 15 Tahun 2016
tentang Tata Cara Pemberian Hibah dan Bantuan Sosial dan peraturan perundang-undangan;</p>
<p>4. Bersedia diaudit oleh instansi yang berwenang atas penggunaan dan Hibah yang kami terima
dari Pemerintah Kabupaten Bima.</p>
<p>5. Apabila saya melanggar hal-hal yang telah saya nyatakan dalam Pakta Integritas ini, saya
bersedia dikenakan sanksi sesuai dengan peraturan perundang-undangan.</p>
<p>Demikian pernyataan ini dibuat dengan sebenar-benarnya dan penuh tanggung jawab.</p>
<div class="c">
  Bima, ....................................20.....<br>
Hormat Saya,<br><br><br><br>
(<?php echo $nama ?>)
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>
<h5>SURAT KETERANGAN TRANSFER</h5>
</center>
<p>Yang bertanda tangan dibawah ini:</p>
<table>
  <tr>
    <td>Nama </td>
    <td><?php echo ': '.$nama ?></td>
  </tr>
  <tr>
    <td>Alamat </td>
    <td><?php echo ': '.$alamat ?></td>
  </tr>
  <tr>
    <td>Jabatan </td>
    <td><?php echo ': '.$jabatan ?></td>
  </tr>
</table>
<p>Bahwa untuk keperluan penyaluran dana hibah kepada (Organisasi/Lembaga Penerima Hibah)
ditujukan untuk pelaksanaan kegiatan ....................... tahun 20......., dengan ini menerangkan bahwa:</p>

No. Rekening : <br>
Bank : <br>
Atas Nama : <br>
<p>adalah benar rekening <?php echo $nama_org?></p>
<p>Selanjutnya untuk pencairan dana hibah tersebut, mohon untuk ditransfer ke nomor rekening
dimaksud.</p>
<p>Demikina surat keterangan ini saya buat agar sapat diperlukan sebagaimana mestinya.</p>
<div class="c">
  Bima, ....................................20.....<br>
Hormat Saya,<br><br><br><br>
(<?php echo $nama ?>)
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>
<h5>SURAT PERNYATAAN</h5>
<h5>KESANGGUPAN MENYAMPAIKAN PERTANGGUNGJAWABAN</h5>
</center>
<p>Yang bertanda tangan dibawah ini:</p>
<table>
  <tr>
    <td>Nama </td>
    <td><?php echo ': '.$nama ?></td>
  </tr>
  <tr>
    <td>Alamat </td>
    <td><?php echo ': '.$alamat ?></td>
  </tr>
  <tr>
    <td>Jabatan </td>
    <td><?php echo ': '.$jabatan ?></td>
  </tr>
</table>
<p>Bahwa untuk pelaksanaan kelengkapan administrasi dalam rangka pemeriksaan akhir tahun oleh
Badan Pemeriksa Keuangan (BPK), maka kami bersedia untuk menyampaikan Laporan
Pertanggungjawaban penggunaan bantuan dana hibah yang bersumber dari Anggaran Pendapatan
dan Belanja Daerah Kabupaten Bima Tahun Anggaran 20..... kepada Pemerintah Kabupaten Bima, cq.
Badan Pengelola Pendapatan, Keuangan dan Aset Daerah (BPPKAD) Kabupaten Bima paling lambat
tanggal 31 Desember 20......</p>

<p>Demikian surat pernyataan ini saya buat agar dapat dipergunakan sebagaimana mestinya.</p>

<div class="c">
  Bima, ....................................20.....<br>
Hormat Saya,<br><br><br><br>
(<?php echo $nama ?>)
</div>
