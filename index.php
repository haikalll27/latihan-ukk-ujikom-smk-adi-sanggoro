<?php 
  $list_barang = array(
    array("Nasi Goreng", 20000),
    array("Mie Goreng", 25000),
    array("Mie Ayam", 35000),
    array("Soto Mie", 40000),
  );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include './layout/head.php';?>
</head>
<body>

  <?php include './layout/header.php';?>

  <div class="container-grup">
    <img class="img-hero" src="./assets/img/banner/hero-bg.png" alt="">
  </div>

  <div class="product-1">
    <div class="grup-title-text-produk">
      <h1 class="title-text-produk">Produk Galeri</h1>
    </div>
    <form action="" method="POST">
        <div class="product-cs">
          <?php  
              foreach ($list_barang as $index => $makanan ) { ?>
                <div class="list-product">
                  <img class="img-produk" src="./assets/img/produk/beras.png" alt="Logo Product">
                  <div class="grup-text-produk">
                    <h1 class="text-h1-product"><?= $makanan[0]; ?></h1>
                    <h2 class="text-harga"><?= number_format($makanan[1]); ?></h2>
                    <p class="paragraf-product">Beras Putih Yang Bagus dan <br> Kualitas</p>
                    <div class="grup-input-produk">
                      <label id="label-checkbox" for="">Jumlah Barang</label>
                      <input class="input-number" id="<?= $index; ?>" type="number" name="jumlah[<?= $index; ?>]" min="1" value="1" >
                    </div>
                    <div class="grup-input-produk">
                      <label id="label-checkbox" for="">Pilih Barang</label>
                      <input class="checkbox" id="<?= $index; ?>" type="checkbox" name="pilih[<?= $index; ?>]" value="<?= $makanan[1]; ?>">
                    </div>
                  </div>
                </div>
          <?php } ?>
        </div>

        <div class="grup-form-product">
          <input class="beli-form-product" type="submit" name="beli" value="Beli">
        </div>
    </form>

    <div class="grup-total">
      <?php
        $total = 0;
        if (isset($_POST['beli'])) {
            echo '<h2>Keranjang</h2>';
            echo '<table border="1" cellspacing="0" cellpadding="5">
                <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                </tr>';

            foreach ($list_barang as $index => $makanan) {
                if (isset($_POST['pilih'][$index])) {
                    $jumlah = isset($_POST['jumlah'][$index]) ? $_POST['jumlah'][$index] : 1;
                    $total_harga = $makanan[1] * $jumlah;
                    echo '
                    <tr>
                    <td>' . $makanan[0] . '</td>
                    <td align="right">' . number_format($makanan[1], 0, ',', '.') . '</td>
                    <td align="right">' . $jumlah . '</td>
                    </tr>';
                    $total += $total_harga;
                }
            }
            echo '
            <tr>x
            <th>Total</th>
            <th colspan="2" align="right">' . number_format($total, 0, ',', '.') . '</th>
            </tr>
            </table>';
        }
      ?>
    </div>

      <!-- <div class="list-product">
        <img class="img-produk" src="./assets/img/produk/gulaku.png" alt="Logo Product">
        <div class="grup-text-produk">
          <h1 class="text-h1-product">Gula Pasir</h1>
          <h2 class="text-harga">Rp. 55.000</h2>
          <p class="paragraf-product">Gula Pasir Yang Bagus dan <br> Kualitas</p>
          <div class="grup-input-produk">
            <label id="label-checkbox" for="">Jumlah Barang</label>
            <input id="input-number" type="number" name="number">
          </div>
          <div class="grup-input-produk">
              <label id="label-checkbox" for="">Pilih Barang</label>
              <input id="checkbox" type="checkbox" name="checkbox">
          </div>
        </div>
      </div>
      <div class="list-product">
        <img class="img-produk" src="./assets/img/produk/minyak.png" alt="Logo Product">
        <div class="grup-text-produk">
          <h1 class="text-h1-product">Minyak</h1>
          <h2 class="text-harga">Rp. 55.000</h2>
          <p class="paragraf-product">Minyak Sawit Yang Bagus dan <br> Kualitas</p>
          <div class="grup-input-produk">
            <label id="label-checkbox" for="">Jumlah Barang</label>
            <input id="input-number" type="number" name="number">
          </div>
          <div class="grup-input-produk">
              <label id="label-checkbox" for="">Pilih Barang</label>
              <input id="checkbox" type="checkbox" name="checkbox">
          </div>
        </div>
      </div>
      <div class="list-product">
        <img class="img-produk" src="./assets/img/produk/tepung.png" alt="Logo Product">
        <div class="grup-text-produk">
          <h1 class="text-h1-product">Tepung</h1>
          <h2 class="text-harga">Rp. 55.000</h2>
          <p class="paragraf-product">Tepung Putih Yang Bagus dan <br> Kualitas</p>
          <div class="grup-input-produk">
            <label id="label-checkbox" for="">Jumlah Barang</label>
            <input id="input-number" type="number" name="number">
          </div>
          <div class="grup-input-produk">
              <label id="label-checkbox" for="">Pilih Barang</label>
              <input id="checkbox" type="checkbox" name="checkbox">
          </div>
        </div>
      </div>
      <div class="list-product">
          <img class="img-produk" src="./assets/img/produk/minyak.png" alt="Logo Product">
          <div class="grup-text-produk">
            <h1 class="text-h1-product">Minyak</h1>
            <h2 class="text-harga">Rp. 55.000</h2>
            <p class="paragraf-product">Minyak Sawit Yang Bagus dan <br> Kualitas</p>
            <div class="grup-input-produk">
              <label id="label-checkbox" for="">Jumlah Barang</label>
              <input id="input-number" type="number" name="number">
            </div>
            <div class="grup-input-produk">
              <label id="label-checkbox" for="">Pilih Barang</label>
              <input id="checkbox" type="checkbox" name="checkbox">
            </div>
          </div>
        </div>
        <div class="list-product">
          <img class="img-produk" src="./assets/img/produk/tepung.png" alt="Logo Product">
          <div class="grup-text-produk">
            <h1 class="text-h1-product">Tepung</h1>
            <h2 class="text-harga">Rp. 55.000</h2>
            <p class="paragraf-product">Tepung Putih Yang Bagus dan <br> Kualitas</p>
            <div class="grup-input-produk">
              <label id="label-checkbox" for="">Jumlah Barang</label>
              <input id="input-number" type="number" name="number">
            </div>
            <div class="grup-input-produk">
              <label id="label-checkbox" for="">Pilih Barang</label>
              <input id="checkbox" type="checkbox" name="checkbox">
            </div>
          </div>
        </div>
        <div class="list-product">
          <img class="img-produk" src="./assets/img/produk/beras.png" alt="Logo Product">
          <div class="grup-text-produk">
            <h1 class="text-h1-product">Beras</h1>
            <h2 class="text-harga">Rp. 55.000</h2>
            <p class="paragraf-product">Beras Putih Yang Bagus dan <br> Kualitas</p>
            <div class="grup-input-produk">
              <label id="label-checkbox" for="">Jumlah Barang</label>
              <input id="input-number" type="number" name="number">
            </div>
            <div class="grup-input-produk">
              <label id="label-checkbox" for="">Pilih Barang</label>
              <input id="checkbox" type="checkbox" name="checkbox">
            </div>
          </div>
        </div>
        <div class="list-product">
          <img class="img-produk" src="./assets/img/produk/gulaku.png" alt="Logo Product">
          <div class="grup-text-produk">
            <h1 class="text-h1-product">Gula Pasir</h1>
            <h2 class="text-harga">Rp. 55.000</h2>
            <p class="paragraf-product">Gula Pasir Yang Bagus dan <br> Kualitas</p>
            <div class="grup-input-produk">
              <label id="label-checkbox" for="">Jumlah Barang</label>
              <input id="input-number" type="number" name="number">
            </div>
            <div class="grup-input-produk">
              <label id="label-checkbox" for="">Pilih Barang</label>
              <input id="checkbox" type="checkbox" name="checkbox">
            </div>
          </div>
        </div>
    </div> -->

  <!-- <div class="product-2">
    <div class="grup-title-text-produk">
      <h1 class="title-text-produk">Produk List</h1>
    </div>

    <div class="product-2-list">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Pilih Barang</th>
          </tr>
        </thead>

        <tbody>
          <?php 
            $no = 1;
            foreach ($list_barang as $barang) { 
          ?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $barang[0]; ?></td>
              <td>Rp. <?php echo number_format($barang[1]); ?></td>
              <td>
                  <input id="checkbox-<?php echo $no; ?>" type="checkbox" name="checkbox">
              </td>
          </tr>
            <?php } ?>
        </tbody>


      </table>
    </div>
  </div> -->

  <!-- <div class="product-3">
    <div class="grup-title-text-produk">
      <h1 class="title-text-produk">Produk Input</h1>
    </div>
    <div class="product-3-input">
    </div>
  </div> -->
  
</body>
</html>