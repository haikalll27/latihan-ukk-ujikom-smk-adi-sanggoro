<?php 

    $guru = "Haikal";
    $pel_1 = "Al-jabar";
    $pel_2 = "Algoritma";
    $kkm = 80;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include './layout/head2.php';?>
</head>
<body>

  <?php include './layout/header.php';?>

  <div class="container-cs-input">
    <div class="grup-form">
        <form class="form-input-cs" action="" method="POST">
            <div class="grup-input-cs">
                <h2 class="heading-rekap-cs">Rekap Ketentuan Peserta Didik SMK Adi Sanggoro</h2>
            </div>
            <div class="grup-input">
                <label for=""><strong class="strong-cs">Nama Guru</strong></label>
                <input type="text" name="nama-guru" class="input-cs" id="" value="<?= $guru; ?>">
            </div>
            <div class="grup-input">
                <label for=""><strong class="strong-cs">Nama Mapel</strong></label>
                <input type="text" name="mapel" class="input-cs" id="" value="<?= $pel_2; ?>">
            </div>
            <div class="grup-input">
                <label for=""><strong class="strong-cs">Nilai KKM</strong></label>
                <input type="number" name="kkm" class="input-cs" id="" value="<?= $kkm; ?>">
            </div>
            <div class="grup-input">
                <label for=""><strong class="strong-cs">Kelas</strong></label>
                <select class="input-cs" name="kelas" id="">
                    <option>Pilih</option>
                    <option value="rpl-1">RPL 1</option>
                    <option value="rpl2">RPL 2</option>
                </select>
            </div>
            <div class="grup-input-last">
                <div class="grup-input">
                    <label for=""><strong class="strong-cs">Jumlah Peserta Didik</strong></label>
                    <input type="number" name="jml_peserta_didik" class="input-cs" id="" placeholder="Masukan Nama Guru">
                </div>
                <div class="grup-input-btn">
                    <input class="btn-cs-ok" type="submit" name="ok" value="ok!">
                </div>
            </div>

            <?php 
                $students = [];
                
                if(isset($_POST['ok'])) {
                    $jml_peserta_didik = $_POST['jml_peserta_didik'];
                    for ($i = 1; $i <= $jml_peserta_didik; $i++) {
            ?>
                <div class="grup-form" id="grup-form">
                    <div class="grup-input-border-cs">
                        <div class="grup-input">
                            <label for=""><strong class="strong-cs">NIS</strong></label>
                            <input type="number" name="nis[]" class="input-cs" id="">
                        </div>
                        <div class="grup-input">
                            <label for=""><strong class="strong-cs">Nama</strong></label>
                            <input type="text" name="nama[]" class="input-cs" id="">
                        </div>
                        <div class="grup-input">
                            <label for=""><strong class="strong-cs">Nilai</strong></label>
                            <input type="number" name="nilai[]" class="input-cs" id="">
                        </div>
                    </div>
                </div>
            <?php 
                }
            ?>
                <div class="grup-input-btn" style="text-align: center;">
                    <button class="btn-cs-ok" type="submit" name="submit">Submit</button>
                </div>

            <?php 
                }

                //==== Process ====\\
                if(isset($_POST['submit'])) {
                    $nis = $_POST['nis'];
                    $nama = $_POST['nama'];
                    $nilai = $_POST['nilai'];

                //==== Simpan data dalam array siswa ====\\
                for ($i = 0; $i < count($nis); $i++) {
                    $students[] = [
                        'nis' => $nis[$i],
                        'nama' => $nama[$i],
                        'nilai' => $nilai[$i],
                    ];
                }

                    //==== Menampilkan data tabel ====\\\
                    if (!empty($students)) {
                        echo '<h2>Hasil Inputan Peserta Didik</h2>';
                        echo '<table border="1" cellspacing="0" cellpadding="5">';
                        echo '<tr>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                              </tr>';
                        foreach ($students as $student) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($student['nis']) . '</td>';
                            echo '<td>' . htmlspecialchars($student['nama']) . '</td>';
                            echo '<td>' . htmlspecialchars($student['nilai']) . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                    }
                }
            ?>
        </form>
    </div>

  </div>
  
</body>
</html>