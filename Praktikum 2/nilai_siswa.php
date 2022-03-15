<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form class="form-horizontal" method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<?php
$proses = isset ($_POST['proses']) ? $_POST['proses'] : '';
$nama_siswa = isset ($_POST['nama']) ? $_POST['nama'] : '';
$mata_kuliah = isset ($_POST['matkul']) ? $_GET['matkul'] : '';
$nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
$nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
$nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

if($nilai_uts > 84){
    $nilai_uts = 'A';
}elseif($nilai_uts > 69){
    $nilai_uts = 'B';
}elseif($nilai_uts > 55){
    $nilai_uts = 'C';
}elseif($nilai_uts > 35){
    $nilai_uts = 'D';
}elseif($nilai_uts >= 0){
    $nilai_uts = 'E';
}else {
    $nilai_uts = 'I';
}

if(!empty($proses)) {
 echo 'Proses : '.$proses;
 echo '<br/>Nama : '.$nama_siswa;
 echo '<br/>Mata Kuliah : '.$mata_kuliah;
 echo '<br/>Nilai UTS : '.$nilai_uts;
 echo '<br/>Nilai UAS : '.$nilai_uas;
 echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
}
?>
</body>
</html>