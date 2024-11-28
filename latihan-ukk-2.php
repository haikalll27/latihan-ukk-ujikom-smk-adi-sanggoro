<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

<div>
    <p>Guru : <?= $guru ?></p>
    <p>Mapel : <?= $mapel ?></p>
    <p>KKM : <?= $kkm ?></p>
    <p>Kelas : <?= $kelas ?></p>
</div>

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
<?php
    }
?>    
</body>
</html>