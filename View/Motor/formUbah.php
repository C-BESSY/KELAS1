<?php
include_once __DIR__ . '/../../Model/Motor.php';
include_once __DIR__ . '/../../Model/Mahasiswa.php';
$idMotor = $_REQUEST['id'];
$motor = Motor::getBy($id, "id");
if ($motor === NULL) {
    echo "<h2>Data Motor tidak ditemukan</h2>";
    echo "<a href='index.php'>Klik Link Ini untuk kembali</a>";
    die();
}
#kondisi motor tidak null
$listMahasiswa = Mahasiswa::getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Tambah Motor Mahasiswa</h3>
    <form action="prosesUbah.php" method="POST">
        <p>
            Pilih Mahasiswa <br>
            <select name="mahasiswaNim" id="">
                <option value="" disabled selected>Pilih Mahasiswa</option>
                <?php
                foreach ($listMahasiswa as $mhs) {
                    $selected = "";
                    if ($mhs->nim === $motor->mahasiswaNim) {
                        $selected = "selected";
                    }
                    echo "<option $selected value='$mhs->nim'>$mhs->nim / $mhs->nama</option>";
                }
                ?>
            </select>
        </p>
        <p>Plat No : <br> <input value="<?= $motor->platNo ?>" type="text" name="platNo" required /> </p>
        <p>Merek : <br> <input value="<?= $motor->merek ?>" type="text" name="merek" required /> </p>
        <p>Tipe : <br> <input value="<?= $motor->tipe ?>" type="text" name="tipe" required /> </p>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
