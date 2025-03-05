<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Nama lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="" name="" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Dasar - Dasar Pemrograman" class="col-4 col-form-label">Matkul</label> 
    <div class="col-8">
      <input id="Dasar - Dasar Pemrograman" name="Dasar - Dasar Pemrograman" placeholder="Dasar-Dasar Pemrograman" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="" name="" placeholder="Nilai_UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="" name="" placeholder="Nilai_UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="" name="" placeholder="Tugas/Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php 
    $ar_matkul = [
  "ddp" => "Dasar-Dasar Pemrograman",
  "web1" => "Pemrograman Web 1",
  "web2" => "Pemrograman Web 2",
  "basdat" => "Basis Data",
  "ui/ux" => "UI/UX",
  "jarkom" => "Jaringan Komputer",
  "se" => "Sistem Enterprise"
  ];
  ?>
<option value="0" class="">-- Pilih Mata Kuliah --</option>
<?php foreach ($ar_matkul as $key => $value) { ?>
<option value="<?= $key ?>"><?= $value ?></option>
<?php } ?>

<?php
 $nama = $_POST["nama"];
 $matkul = $_POST["matkul"];
 $uts = $_POST["nilai_uts"];
 $uas = $_POST["nilai_uas"];
 $tugas = $_POST["tugas"];
?>