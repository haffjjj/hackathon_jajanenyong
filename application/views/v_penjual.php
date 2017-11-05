<?php
	// require_once'template/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Penjual</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/kuliner.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/header.css">
</head>
<body>

<div id="toko">
	<div class="bg">
		<img src="<?php echo base_url()?>assets/img/toko.jpg" class="img">
	</div>
	<div class="tentang">
		<div class="title">
			<h1>Warung Bu Umi</h1>
			<h2>JL.D.I.Panjaitan No 128</h2>
		</div>
		<div class="pemilik">Ibu Umi</div>
	</div>
	<div class="center" style="padding-bottom: 50px;">
		<div class="produk-title">Makanan Khas yang Kami Jual</div>
		<div class="produk-list">

			<div class="produk-box">
				<img src="<?php echo base_url()?>assets/img/mendoan.jpg" class="img">
				<div class="produk-title">Mendoan</div>
				<div class="produk-harga">Rp 1.000,-</div>
				<div class="produk-bintang">
					<img src="<?php echo base_url()?>assets/img/bintang.png" class="produk-ranting">
					<img src="<?php echo base_url()?>assets/img/bintang.png" class="produk-ranting">
					<img src="<?php echo base_url()?>assets/img/bintang.png" class="produk-ranting">
					<img src="<?php echo base_url()?>assets/img/bintang.png" class="produk-ranting">
				</div>
			</div>

		</div>
	</div>
	<div class="clear"></div>
</div>

<?php
	// require_once'template/footer.php';
?>
</body>
</html>