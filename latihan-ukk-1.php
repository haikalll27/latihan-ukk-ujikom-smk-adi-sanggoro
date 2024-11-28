<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukk 1</title>
</head>
<body>

<form action="" method="POST">
    <div style="display: flex; justify-content: center; margin-bottom: 30px;">
        <label for=""><strong>Nama Guru</strong></label>
        <input type="text" name="guru" placeholder="Masuk Nama Guru" required>
    </div>
    <div style="display: flex; justify-content: center; margin-bottom: 30px;">
        <label for=""><strong>Nama Mapel</strong></label>
        <input type="text" name="mapel" placeholder="Masuk Nama mapel" required>
    </div>
    <div style="display: flex; justify-content: center; margin-bottom: 30px;">
        <label for=""><strong>Nama KMM</strong></label>
        <input type="number" name="kkm" max="100" placeholder="Masuk Nama KKM" required>
    </div>
    <div style="display: flex; justify-content: center; margin-bottom: 30px;">
        <select name="kelas" id="">
            <option>Pilih</option>
            <option value="1">XII RPL 1</option>
            <option value="2">XII RPL 2</option>
        </select>
    </div>
    <div style="display: flex; justify-content: center; margin-bottom: 30px;">
        <input type="submit" name="ok" value="Ok!">
    </div>
</form>

<?php  

    if(isset($_POST['ok'])) {
        $guru = $_POST['guru'];
        $mapel = $_POST['mapel'];
        $kkm = $_POST['kkm'];
        $kelas = $_POST['kelas'];

        if($kelas == 1) {
            $siswa = array(
                [10223211, 'Ikal'],
                [10223222, 'Kocak'],
                [10223233, 'Hahaha'],
                [10223244, 'Huhuh'],
                [10223255, 'Heyyo'],
            );
            $kelas = 'XII RPL 1';
        } else {
            $siswa = array(
                [10223255, 'healo'],
                [10223244, 'hahi'],
                [10223233, 'Hahaha'],
                [10223222, 'kop'],
                [10223211, 'koko'],
            );
            $kelas = 'XII RPL 2';
        }
?>

<div>
    <p>Guru : <?= $guru ?></p>
    <p>Mapel : <?= $mapel ?></p>
    <p>KKM : <?= $kkm ?></p>
    <p>Kelas : <?= $kelas ?></p>
</div>

<form action="latihan-ukk-2.php" method="POST">
    <input type="hidden" name="kkm" value="<?= $kkm; ?>">
    <input type="hidden" name="guru" value="<?= $guru; ?>">
    <input type="hidden" name="mapel" value="<?= $mapel; ?>">
    <input type="hidden" name="kelas" value="<?= $kelas; ?>">
    <table>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Nilai</th>
        </tr>
        <?php
            $no = 1;
            foreach ($siswa as $index => $key) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td>
                    <input type="number" name="nis[]" value="<?= $key[0] ?>" readonly>
                </td>
                <td>
                    <input type="text" name="nama[]" value="<?= $key[1] ?>" readonly>
                </td>
                <td>
                <input type="number" name="nilai[]" value="" max="100" required>
                </td>
            </tr>
            <?php 
            $no++;
            }
            ?>
    </table>
    <input type="submit" name="woke" value="Ok!" id="">
</form>

<?php 
} 
?>    
</body>
</html>