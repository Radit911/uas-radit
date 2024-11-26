<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Penggajian Yayasan</title>
  </head>
  <body>
  

    <!-- Form Penggajian -->
    <div class="container my-5">
    <img src="https://smkassalaambandung.sch.id/img/logo-custom.png" alt="" width="20%" class="mx-auto d-block">
      <h2 class="mb-4 text-center">Form Penggajian Guru Karyawan</h2>

      <!-- Form Input Penggajian -->
      <form action="" method="post">
        <!-- Data Umum -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="no" class="form-label">Nomor</label>
            <input type="text" class="form-control" name="no" placeholder="Masukkan nomor">
          </div>
          <div class="col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="unit" class="form-label">Unit Pendidikan</label>
            <select name="unit" class="form-select">
              <option selected>Pilih unit</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="tanggal" class="form-label">Tanggal Gaji</label>
            <input type="date" class="form-control" name="tanggal">
          </div>
        </div>

        <hr></hr>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select name="jabatan" class="form-select">
              <option selected>Pilih jabatan...</option>
              <option value="Guru">Guru</option>
              <option value="Karyawan">Karyawan</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="lamaKerja" class="form-label">Lama Kerja</label>
            <input type="number" class="form-control" name="lamaKerja" placeholder="Masukkan lama kerja">
          </div>
        </div>

        <hr></hr>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="status" class="form-label">Status Kerja</label>
            <select name="status" class="form-select">
              <option selected>Pilih status...</option>
              <option value="Tetap">Tetap</option>
              <option value="Kontrak">Kontrak</option>
            </select>
          </div>
        </div>

        <!-- Data Gaji dan Potongan -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="bpjs" class="form-label">BPJS</label>
            <input type="text" class="form-control" name="bpjs" placeholder="BPJS">
          </div>
          <div class="col-md-6">
            <label for="pinjaman" class="form-label">Pinjaman</label>
            <input type="text" class="form-control" name="pinjaman" placeholder="Pinjaman">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="cicilan" class="form-label">Cicilan</label>
            <input type="text" class="form-control" name="Cicilan" placeholder="Cicilan">
          </div>
          <div class="col-md-6">
            <label for="tabungan" class="form-label">Tabungan</label>
            <input type="text" class="form-control" name="tabungan" placeholder="Tabungan">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="infak" class="form-label">Infak</label>
            <input type="text" class="form-control" name="infak" placeholder="Lainnya">
          </div>
        </div>

        <input type="submit" name="proses" id="" class="btn btn-primary" value="PROSES">
      </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
    <?php


if(isset($_POST['proses'])) {
  $Nomor = $_POST['no'];
  $Nama = $_POST['nama'];
  $Unit_Pendidikan = $_POST['unit'];
  $tgl_gaji = $_POST['tanggal'];
  $jabatan = $_POST['jabatan'];
  $lama_kerja = $_POST['lamaKerja'];
  $status_kerja = $_POST['status'];
  $bpjs = $_POST['bpjs'];
  $pinjaman = $_POST['pinjaman'];
  $cicilan = $_POST['Cicilan'];
  $lainnya = $_POST['infak'];

$gaji = [
      'Kepala Sekolah' => 10000000,
      'Wakasek' => 7000000,
      'Guru' => 5000000,
      'Karyawan' => 2500000
  ];

  if($status_kerja == "Tetap"){
    $bonus = 1000000;
  }else if($status_kerja == "Kontrak"){
    $bonus = 0;
  }
  $hasil_gaji = $gaji[$jabatan];
  $gaji_bersih = ($hasil_gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $lainnya);

  class Gaji{

   public function StrukGaji($no2,$nama2,$unit2,$tgl_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$cicilan2,$lainnya2,$gaji_bersih2){
    echo "<div style='border:1px solid blue; padding:20px; width:500px; margin:20px auto;'>";
    echo "<div class='card-header'>
             <h4 style='text-align:center;'>$nama2</h4>
          </div>";
    echo "<h5 style='text-align:center;' class=text-primary>STRUK GAJI</h5>";
    echo "<table align='center' class=text-primary>";
    echo "<tr>
          <td>No</td>
          <td>:</td>
          <td>$no2</td>
          </tr>";
    echo "<tr>
          <td>Nama</td>
          <td>:</td>
          <td>$nama2</td>
          </tr>";
    echo "<tr>
          <td>Unit Pendidikan</td>
          <td>:</td>
          <td>$unit2</td>
          </tr>";
    echo "<tr>
          <td>Tanggal Gaji</td>
          <td>:</td>
          <td>$tgl_gaji2</td>
          </tr>";
    echo "<tr>
          <td>Jabatan</td>
          <td>:</td>
          <td>$jabatan2</td>
          </tr>";
    echo "<tr>
          <td>Gaji</td>
          <td>:</td>
          <td>Rp.$gaji2</td>
          </tr>";
    echo "<tr>
          <td>Lama Kerja</td>
          <td>:</td>
          <td>$lama_kerja2</td>
          </tr>";
    echo "<tr>
          <td>Status Kerja</td>
          <td>:</td>
          <td>$status_kerja2</td>
          </tr>";
    echo "<tr>
          <td>Bonus</td>
          <td>:</td>
          <td>Rp.$bonus2</td>
          </tr>";
    echo "<tr>
          <td>BPJS</td>
          <td>:</td>
          <td>Rp.$bpjs2</td>
          </tr>";
    echo "<tr>
          <td>Pinjaman</td>
          <td>:</td>
          <td>Rp.$pinjaman2</td>
          </tr>";
    echo "<tr>
          <td>Cicilan</td>
          <td>:</td>
          <td>Rp.$cicilan2</td>
          </tr>";
    echo "<tr>
          <td>Infaq</td>
          <td>:</td>
          <td>Rp.$lainnya2</td>
          </tr>";
    echo "<tr>
          <td>Gaji Bersih</td>
          <td>:</td>
          <td>Rp.$gaji_bersih2</td>
          </tr>";
    echo "</table>";
    echo "</div>";
  }
  }
  $gaji2 = new Gaji();

  echo $gaji2->StrukGaji($Nomor, $Nama, $Unit_Pendidikan, $tgl_gaji, $jabatan, $hasil_gaji, $lama_kerja, $status_kerja, $bonus, $bpjs, $pinjaman, $cicilan, $lainnya, $gaji_bersih);
}
?>

</body>
</html> 

    






