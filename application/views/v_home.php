<!DOCTYPE html>
<html>
<head>
	<title>Beranda Jajane Nyong</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>

<div id="header">
	<div class="center">
		<div class="logo"><h1><span>Jajane</span> Nyong</h1></div>
		<div class="menu">
			<ul>
				<li><a href="beranda.php">Home</a></li>
				<li><a href="makananKhas.php">Makanan Khas</a></li>
				<li><a href="beranda.php">Minuman Khas</a></li>
				<li><a href="beranda.php">Kontak</a></li>
				<li><a href="beranda.php">Masuk</a></li>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
	<div class="center" style="padding-bottom: 10px;">
		<div class="title">
			Kami menyediakan berbagai macam<br/>makanan dan minuman khas Banyumas untuk anda.
		</div>
		<a href="#" class="btn">Selengkapnya</a>
	</div>
	<div class="clear"></div>
</div>

<div id="kuliner">
	<div class="title">Kuliner Khas Banyumas</div>
		<form action="" method="post" style="text-align: center;">
			<input type="text" name="search" size="30" class="search" placeholder="Cari Kuliner Khas Banyumas" />
			<input type="submit" name="submit" value="Cari" class="cari" />
		</form>
	<div class="center" style="padding-bottom: 140px;">
		<div class="makanan">Makanan</div>
		<div class="makanan-list">
		
			<?php foreach ($kuliner_makanan as $value) { ?>

			<div class="makanan-box">
				<img src="assets/img/mendoan.jpg" class="img">
				<div class="makanan-title"><a href="<?php echo base_url()."home/kuliner/".$value['id'] ?>"><?php echo substr($value['nama'], 0, 15) ?></a></div>
				<div class="makanan-harga"><?php echo "Rp " . number_format($value['harga_rata'],2,',','.')?></div>
				<div class="makanan-bintang">
					<img src="assets/img/bintang.png" class="makanan-ranting">
					<img src="assets/img/bintang.png" class="makanan-ranting">
					<img src="assets/img/bintang.png" class="makanan-ranting">
					<img src="assets/img/bintang.png" class="makanan-ranting">
				</div>
			</div>

			<?php } ?>

		</div>
		<a href="#" class="btn">Selengkapnya</a>
	</div>
	<div class="clear"></div>
	<div class="center">
		<div class="makanan">Minuman</div>
		<div class="makanan-list">

			<?php foreach ($kuliner_minuman as $value) { ?>

			<div class="makanan-box">
				<img src="assets/img/mendoan.jpg" class="img">
				<div class="makanan-title"><a href="<?php echo base_url()."home/kuliner/".$value['id'] ?>"><?php echo substr($value['nama'], 0, 15) ?></a></div>
				<div class="makanan-harga"><?php echo "Rp " . number_format($value['harga_rata'],2,',','.')?></div>
				<div class="makanan-bintang">
					<img src="assets/img/bintang.png" class="makanan-ranting">
					<img src="assets/img/bintang.png" class="makanan-ranting">
					<img src="assets/img/bintang.png" class="makanan-ranting">
					<img src="assets/img/bintang.png" class="makanan-ranting">
				</div>
			</div>

			<?php } ?>
			
		</div>
		<a href="#" class="btn">Selengkapnya</a>
	</div>
	</div>
	<div class="clear"></div>
</div>

<div id="footer">
	<div class="center">
		<div class="logo"><h1><span>Jajane</span> Nyong</h1></div>
		<div class="cp">CopyRight JajaneNyong. All Right Reserved 2017.</div>
	</div>
	<div class="clear"></div>
</div>
</body>
</html>