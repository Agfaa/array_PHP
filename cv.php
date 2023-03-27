<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 40%;
  padding: 10px;
  height: 950px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Tugas CV</h2>

<div class="row">
  <div class="column" style="background-color:#FFA36F;">
	<center> <img src="gambar.jpg" width="150px" height="200px" border="2"> </center>
    <center> <h1>AGFANADITA REZKIA CHAURINA</h1> </center>
	<center> <hr size="5px" width="50%"> </center>
	<center> <h3>Mahasiswa Informatika</h3> </center>
	<center> <h3>UPN "Veteran" Jawa Timur</h3> </center>
	<p></p>
	<p> <?php
        $deskripsi = "Mahasiswa informatika UPN Veteran Jawa Timur yang dikenal antusias dan bermotivasi tinggi dengan kemampuan kepemimpinan, inisiatif dan mencari tantangan baru. serta memiliki ketertarikan dlam dunia olahraga. 
        Lahir di Kota Surabaya Tanggal 22 November 2001.";
        $tgllahir = ("2001-11-22");
                $hari_ini=date ("y-m-d");
                $umur =date_diff(date_create($tgllahir), date_create($hari_ini))->y;
        echo $deskripsi;
        echo " Umur saya saat ini adalah $umur tahun.";

    ?>.</p>

<p> </p>

<h4>Pendidikan</h4>
<hr size="5px" width="50%" align="left">
<?php
                $pendidikan = array (
                array ('education' => "SDIT Al Uswah Surabaya", 'education1' => "SMP Negeri 19 Surabaya", 'education2' => "SMA Negeri 20 Surabaya", 'education3' => "Universitas Pembangunan Nasional Veteran Jawa Timur Prodi Informatika")
                );
                    ?>
                <?php
                    foreach ($pendidikan as $pnd) :
                ?>
                <p>
                    <ul>
                        <li><?php echo $pnd['education']?></li>
                        <li><?php echo $pnd['education1']?></li>
                        <li><?php echo $pnd['education2']?></li>
                        <li><?php echo $pnd['education3']?></li>
                    </ul>
                </p>
                <?php endforeach?>
  </div>
  
  <div class="column" style="background-color:#FFF2D0;">
    <h4>Organisasi</h4>
	<hr size="5px" width="50%" align="left">
	<p> 2022 - 2023 Anggota Departemen PSDA UKM Veteran Archery</p>
	
	<h4>Kepanitiaan</h4>
	<hr size="5px" width="50%" align="left">
    <?php
                $kepanitiaan = array (
                    array ('kepanitiaan' => "Komdis BCD 2022", 'kepanitiaan1' => "Humas Kuliah Tamu 2022", 'kepanitiaan2' => "Perlengkapan dan Konsumsi Open Talk 2022")
                );
                ?>

                <?php 
                    foreach ($kepanitiaan as $panitia) :
                ?>
                <ul>
                    <li><?php echo $panitia['kepanitiaan']?></li>
                    <li><?php echo $panitia['kepanitiaan1']?></li>
                    <li><?php echo $panitia['kepanitiaan2']?></li>
                </ul>
                <?php endforeach ?>
  </div>
</div>

</body>
</html>