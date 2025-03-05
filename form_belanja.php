<?php

// Daftar harga produk
$harga_produk = [
    "TV" => 4200000,
    "Kulkas" => 3100000,
    "Mesin Cuci" => 3800000
];

// Proses form saat tombol submit ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['customer'] = $_POST['customer'];
    $_SESSION['produk'] = $_POST['pilih_produk'];
    $_SESSION['jumlah'] = intval($_POST['jumlah']);
    $_SESSION['total_harga'] = $harga_produk[$_SESSION['produk']] * $_SESSION['jumlah'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <!-- Kolom Form -->
        <div class="col-md-8">
            <h3>Belanja Online</h3>
            
            <!-- Form tetap mengarah ke halaman ini sendiri -->
            <form method="post" action="">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="pilih_produk" id="produk_tv" type="radio" class="custom-control-input" value="TV" required> 
                            <label for="produk_tv" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="pilih_produk" id="produk_kulkas" type="radio" class="custom-control-input" value="Kulkas" required> 
                            <label for="produk_kulkas" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="pilih_produk" id="produk_mesin_cuci" type="radio" class="custom-control-input" value="Mesin Cuci" required> 
                            <label for="produk_mesin_cuci" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" min="1" class="form-control" required>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-success" value="Proses">Kirim</button>
                    </div>
                </div>
            </form>

            <!-- Mnampilkn hasil belanja di bawah -->
            <?php
            if (isset($_SESSION['customer'])) {
                echo "<p>Nama Customer : " . htmlspecialchars($_SESSION['customer']) . "</p>";
                echo "<p>Produk Pilihan : " . htmlspecialchars($_SESSION['produk']) . "</p>";
                echo "<p>Jumlah Beli : " . $_SESSION['jumlah'] . "</p>";
                echo "<p>Total Belanja : Rp. " . number_format($_SESSION['total_harga'], 0, ',', '.') . ",-</p>";
            }
            ?>
        </div>

        <!-- Daftar Harga -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">Daftar Harga</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp. 4.200.000</li>
                    <li class="list-group-item">Kulkas : Rp. 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
                </ul>
                <div class="card-footer text-center text-danger">
                    Harga Dapat Berubah Setiap Saat
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
