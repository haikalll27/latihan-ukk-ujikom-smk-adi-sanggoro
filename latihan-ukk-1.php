<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './layout/head-latihan-ukk.php'; ?>
</head>
<body>

 <?php include './layout/header-latihan-ukk.php'; ?>


 <div class="container-form-one">
     <form class="form-one" action="" method="POST">
         <div class="grup-peserta-didik">
             <img class="img-as-two" src="./assets/img/LOGO.png" alt="">
             <h2 class="heading-2-rekap-perserta-didik">Masukan Rekap Peserta Didik</h2>
         </div>
         <div class="grup-input-cs">
             <label class="label-cs" for=""><strong class="strong-cs">Nama Guru</strong></label>
             <input class="input-cs" type="text" name="guru" placeholder="Masuk Nama Guru" required>
         </div>
         <div class="grup-input-cs">
             <label class="label-cs" for=""><strong class="strong-cs">Nama Mapel</strong></label>
             <input class="input-cs" type="text" name="mapel" placeholder="Masuk Nama mapel" required>
         </div>
         <div class="grup-input-cs">
             <label class="label-cs" for=""><strong class="strong-cs">KMM</strong></label>
             <input class="input-cs" type="number" name="kkm" max="100" placeholder="Masuk Nama KKM" required>
         </div>
         <div class="grup-input-cs">
             <select class="input-cs-select" name="kelas" id="">
                 <option>Pilih</option>
                 <option value="1">XII RPL 1</option>
                 <option value="2">XII RPL 2</option>
             </select>
         </div>
         <div style="display: flex; justify-content: center; margin-bottom: 30px;">
             <input class="button-form-one" type="submit" name="ok" value="Create!">
         </div>
     </form>
 </div>

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

<div class="grup-all-data-1">
    <div class="grup-all-data-2">
        <p class="text-all-data">Guru : <?= $guru ?></p>
        <p class="text-all-data">Mapel : <?= $mapel ?></p>
        <p class="text-all-data">KKM : <?= $kkm ?></p>
        <p class="text-all-data">Kelas : <?= $kelas ?></p>
        <form class="form-two" action="latihan-ukk-2.php" method="POST">
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
                        <input class="form-nilai-cs" type="number" name="nilai[]" value="" max="100" required placeholder="Isi Nilai">
                        </td>
                    </tr>
                    <?php 
                    $no++;
                    }
                    ?>
            </table>
            <div class="grup-button-submit-lats">
                <input class="button-submit-lats" type="submit" name="woke" value="Submit" id="">
            </div>
        </form>
    </div>
</div>


<?php 
} 
?>    
</body>
</html>