<!DOCTYPE html>
<html lang="id">
<head>
  <title>Form Belanja Online</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="style02.css">
</head>
<body>
  <h1>Belanja Online</h1>
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-6">
  <form action="form_belanja.php" method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" value="Kirim" name="proses">
    </div>
  </div>
</form>
</div>

<!-- Bagian Kanan -->
<div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item active">Daftar Harga</li>
          <li class="list-group-item">TV : 4.200.000</li>
          <li class="list-group-item">Kulkas : 3.100.000</li>
          <li class="list-group-item">Mesin Cuci : 3.800.000</li>
          <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>
      </div>
    </div>
  </div>

<?php
$proses = $_POST["proses"];
$customer = $_POST['customer'];
$produk= $_POST['produk'];
$jumlah = $_POST['jumlah'];



if($produk == "TV"){
    $total = $jumlah * 4200000;
  }elseif ($produk == "Kulkas") {
    $total = $jumlah * 3100000;
  }elseif ($produk == "MESIN CUCI") {
    $total = $jumlah * 3800000;
  } else {
    $total = 0;
  }
echo 'Proses :' . $proses;
echo '<br/>Nama Customer: '.$customer;
echo '<br/>Pilih Produk : '.$produk;
echo '<br/>Jumlah : '.$jumlah;
echo '<br/>Total Belanja : '.$total;
?>

</body>
</html>

