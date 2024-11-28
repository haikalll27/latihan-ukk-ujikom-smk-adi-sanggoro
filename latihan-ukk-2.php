<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './layout/head-latihan-ukk.php'; ?>
</head>
<body>

 <?php include './layout/header-latihan-ukk.php'; ?>

<?php 

if(isset($_POST['woke'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $kkm = $_POST['kkm'];
    
    $guru = $_POST['guru'];
    $mapel = $_POST['mapel'];
    $kelas = $_POST['kelas'];
    ?>

<div class="grup-all-data-1">
    <div class="grup-all-data-2">
        <div class="grup-peserta-didik">
            <img class="img-as-two" src="./assets/img/LOGO.png" alt="">
            <h2 class="heading-2-rekap-perserta-didik">Hasil Data Nilai Siswa</h2>
         </div>
        <p class="text-all-data">Guru : <?= $guru ?></p>
        <p class="text-all-data">Mapel : <?= $mapel ?></p>
        <p class="text-all-data">KKM : <?= $kkm ?></p>
        <p class="text-all-data">Kelas : <?= $kelas ?></p>

        <form action="" method="">
            <table for="" border="1">
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Keterangan</th>
                </tr>
                <?php 
                for ($i = 0; $i < count(value: $nis); $i++) {
                    ?>
                    <tr>
                        <td><?= $i+1; ?></td>
                        <td><?= $nis[$i]; ?></td>
                        <td><?= $nama[$i]; ?></td>
                        <td><?= $nilai[$i]; ?></td>
                        <td>
                            <?php 
                            if ($nilai[$i] > $kkm) {
                                echo 'Tuntas';
                            } else {
                                echo 'Remedial Kasihan Deloh';
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </form>
    </div>
</div>

<?php
    }
?>    
</body>
</html>