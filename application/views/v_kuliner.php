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
			<img src="<?php echo base_url()?>assets/img/kuliner/<?php echo $kulinerbyid['gambar_kuliner'] ?>" class="img">
		</div>
		<div class="pesan-detail">
			<h1><?php echo $kulinerbyid['nama'] ?></h1>
			<div class="pesan-bintang">
			
			<?php for ($i=0; $i <$kulinerbyid['rating'] ; $i++) {  ?>
				<img src="<?php echo base_url()?>assets/img/bintang.png" class="pesan-ranting">
			<?php } ?>

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

			<?php 
				$color = ['#19b5fe','#f39c12','#ef4836','#4183d7','#2ecc71'];

				foreach ($penjual as $value) { ?>
					<!-- onclick="location.href='<?php echo base_url()."home/users/".$value[0]['id_users'] ?>'" -->
					<div  class="toko-list" style="background-color: <?php echo $color[rand(0,4)] ?>;"><?php echo $value[0]['toko'] ?></div>

			<?php	}?>
		</div>
		<h4>Load More . . .</h4>
	</div>
	<div class="clear"></div>

	<!-- <?php echo $kulinerbyid['deskripsi'] ?> -->



<div id="detail">
	<div class="center">
		<div class="deskripsi">
			<div class="title"><?php echo $kulinerbyid['nama'] ?></div>
			<p><?php echo $kulinerbyid['deskripsi'] ?></p>
		</div>
		<div class="bahan">
			<div class="bahan-title">Bahan membuat <?php echo $kulinerbyid['nama'] ?></div>
			<ul>
				<?php $bahan = explode(",",$kulinerbyid['bahan']);

				foreach ($bahan as $value) {
					echo "<li>".ucwords($value)."</li>";
				}
				?>

				
			</ul>
		</div>
	</div>

	<div class="clear"></div>

	<div class="center" style="margin-bottom: 50px;">
		
		
	</div>
	
	<div class="center" style="margin-bottom: 50px;">
	<div class="deskripsi">
			<h1>Komentar Pembeli</h1>

			<?php foreach ($komentar as $value) { ?>
				<div class="komentar">
					<div class="komentar-img">
						<img src="<?php echo base_url()?>assets/img/profile.jpg" class="imgK">
					</div>
					<div class="komentar-text">
						<span>Bryan Larson</span>
						<p><?php echo $value['komentar'] ?></p>
					</div>
				</div>
			<?php } ?>

		</div>
			<div class="tambah-komentar">
				<h2>Berikan Komentar Anda</h2>
				<form action="<?php echo base_url() ?>home/insertkomentar" method="post">
					<input type="hidden" value="<?php echo $kulinerbyid['id'] ?>" name="id_kuliner">
					<textarea name="komentar" cols="50" rows="5" class="input-komentar" placeholder="Masukan Komentar Anda"></textarea><br/>
					<input type="submit" name="submit" class="submit" value="Kirim" />
				</form>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div id="footer">
	<div class="center">
		<div class="logo"><h1>Tericy Duck</h1></div>
		<div class="cp">CopyRight JajaneNyong. All Right Reserved 2017.</div>
	</div>
	<div class="clear"></div>
</div>

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
		  <iframe
  width="100%"
  height="300"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCEtGJwuJZSwXwyp5Nr8d5l1QYhRa8DsIA
    &q=Purwokerto,+Kabupaten+Banyumas,+Jawa+Tengah" allowfullscreen>
</iframe>
			<!-- <iframe src="https://developers.google.com/maps/documentation/embed/wizard?hl=id" height="1220" width="100%" allowfullscreen></iframe></p> -->
		  <button onclick="location.href='<?php echo base_url()?>home/users/2'">Kunjungi Toko</button> +62873847384 (WA)
	  </div>
  </div>
</div>

</div>
<!-- Modal Box -->

</div>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/modal.js"></script>
</body>

	

</html>