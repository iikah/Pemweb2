<?php
require_once 'bmipasien.php';
$pasien1 = new bmipasien(1, "B001", "Annisa", "P", "Depok", "21-01-2022", 1.59, 48.5);
$pasien2 = new bmipasien(2, "B002", "Zakhi", "L", "Bogor", "21-01-2022", 1.70, 69.1);
$pasien3 = new bmipasien(3, "B003", "Halimah", "P", "Jakarta", "21-01-2022", 1.63, 49.1);

$array = [$pasien1, $pasien2, $pasien3];
if(isset($_POST['submit'])) {
    $id = 4;
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $asal = $_POST['asal'];
    $tgl_periksa = $_POST['tanggal'];
    $tinggi = $_POST['tinggi']/100;
    $berat = (int)$_POST['berat'];

    $pasien4 = new bmipasien($id, $nomor, $nama, $kelamin, $asal, $tgl_periksa, $tinggi, $berat);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Pasien</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h2>Input Data Pasien</h2>
            <label>Tanggal Periksa</label><br>
            <input type="date" name="tanggal"><br><br>
            <label>nomor Pasien</label><br>
            <input type="text" name="nomor"><br><br>
            <label>Nama Pasien</label><br>
            <input type="text" name="nama"><br><br>
            <label>Jenis Kelamin</label><br>
            <select name="kelamin">
                <option value="P">Perempuan</option>
                <option value="L">Laki-laki</option>
            </select><br><br>
            <label>Tinggi Badan</label><br>
            <input type="text" name="tinggi"><br><br>
            <label>Berat Badan</label><br>
            <input type="text" name="berat"><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <br>
    <table border=1 callpadding=15 cellpadding=0>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat (KG)</th>
            <th>Tinggi (CM)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
        <?php foreach($array as $a) : ?> 
        <tr>
            <td><?php echo $a->pasien->id; ?></td>
            <td><?php echo $a->tanggal; ?></td>
            <td><?php echo $a->pasien->kode; ?></td>
            <td><?php echo $a->pasien->nama; ?></td>
            <td><?php echo $a->pasien->gender; ?></td>
            <td><?php echo $a->berat; ?></td>
            <td><?php echo ($a->tinggi * 100);?></td>
            <td><?php echo number_format($a->nilaiBmi(),2); ?></td>
            <td><?php echo $a->statusBmi(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>