<?php

// var_dump($kulinerbyid);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Kuliner</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/kuliner.css">
</head>
<body>
<div id="header">
	<div class="center">
		<div class="logo">
			<h1><span>Jajane</span>Nyong</h1>
		</div>
		<div class="menu">
			<ul>
				<li><a href="<?php echo base_url()?>">Home</a></li>
				<li><a href="makananKhas.php">Makanan Khas</a></li>
				<li><a href="#">Minuman Khas</a></li>
				<li><a href="#">Kontak</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
</div>
</head>
<body>
<div id="pesan">
	<div class="center">
		<div class="pesan-img">
			<img src="<?php echo base_url()?>assets/img/mendoan.jpg" class="img">
		</div>
		<div class="pesan-detail">
			<h1><?php echo $kulinerbyid['nama'] ?></h1>
			<div class="pesan-bintang">
				<img src="<?php echo base_url()?>assets/img/bintang.png" class="pesan-ranting">
				<img src="<?php echo base_url()?>assets/img/bintang.png" class="pesan-ranting">
				<img src="<?php echo base_url()?>assets/img/bintang.png" class="pesan-ranting">
			</div>
			<div class="pesan-line"></div>
			<h2><?php echo "Rp " . number_format($kulinerbyid['harga_rata'],2,',','.')?></h2>
			<h3>(*Harga rata-rata di Banyumas)</h3>
			<a href="#" class="btn">Jadikan Favorite</a>
		</div>
	</div>
	<div class="clear"></div>
	<div class="center">
		<span>Toko yang tersedia</span>
		<div class="toko">
			<div class="toko-list" style="background-color: #19b5fe;">Mendoan Store</div>
			<div class="toko-list" style="background-color: #f39c12;">Wedang Store</div>
			<div class="toko-list" style="background-color: #ef4836;">Kuliner Banyumas</div>
			<div class="toko-list" style="background-color: #4183d7;">Dawet Ayu</div>
			<div class="toko-list" style="background-color: #2ecc71;">Getuk Goreng</div>
		</div>
		<h4>Load More . . .</h4>
	</div>
	<div class="clear"></div>

	<?php echo $kulinerbyid['deskripsi'] ?>

	<!-- Modal Box -->
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <span class="close">&times;</span>
  <div class="penjual">
	  <div class="penjual-data">
		  <span>Warung Bu Umi</span>
		  <table>
			  <tr>
				  <td>Alamat</td>
				  <td>:</td>
				  <td>Jl.D.I.Panjaitan No.128</td>
			  </tr>
			  <tr>
				  <td>Lain-lain</td>
				  <td>:</td>
				  <td>Di warung bu Umi, pembuatan mendoan dilaksanakan dengan bersih dan higenis, mendioanyapun gurih dan lezat.</td>
			  </tr>
			  <tr>
				  <td>Harga</td>
				  <td>:</td>
				  <td><h1>Rp 10.000,-</h1></td>
			  </tr>
		  </table>
		  <button onclick="location.href='beranda.php'">Hubungi Penjual</button>
	  </div>
  </div>
</div>

</div>
<!-- Modal Box -->

</div>

<div id="footer">
	<div class="center">
		<div class="logo"><h1>Tericy Duck</h1></div>
		<div class="cp">CopyRight JajaneNyong. All Right Reserved 2017.</div>
	</div>
	<div class="clear"></div>
</div>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/modal.js"></script>
</body>
</html>