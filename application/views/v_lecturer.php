<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Lecturer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Kanal Nuklir ID" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>

	</head>
	<body>


	<?php $this->load->view('v_banner');?>


	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/Picture5.png'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2 class="btn btn-success">Lecturer Profile</h2>
		   					<p class="fh5co-lead"> Graduate Program in Nuclear Science and Engineering has a total of 19 lecturer members (members of Nuclear Physics and Biophysics research group of ITB) which 7 members are qualified doctoral supervisors. </p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-about animate-box">
		<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
			<h2>About Lecturer</h2>
			<!-- <p>TECHO merupakan perusahaan yang bergerak dan memfokuskan diri pada bidang Konsultan IT dan Security. Seiring dengan pesatnya perkembangan teknologi dan keterkaitan nya dengan bidang usaha maka kami hadir di dunia teknologi informasi untuk memberikan solusi, perencanaan, dan strategi yang terintegerasi sebagai nilai tambah yang maksimal bagi kebutuhan dan permasalahan dibidang Teknologi Informasi.</p> -->
		</div>
		<div class="container">
			<!-- <div class="col-md-6">
				<figure>
					<img src="<?php echo base_url().'theme/images/image_1.jpg'?>" alt="Free HTML5 Template" class="img-responsive">
				</figure>
			</div>
			<div class="col-md-6">
				<h3>Visi</h3>
				<ul>
					<li>Menjadi Perusahaan IT Profesional dengan solusi dan layanan yang optimal serta memiliki daya saing.</li>
					<li>Memberikan Layanan dan Solusi yang terintegerasi dan mengikuti perkembangan dunia Teknologi Informasi.</li>
				</ul>
				<h3>Misi</h3>
				<ul>
					<li>Tidak hanya memberi solusi, kami memberikan layanan yang terpadu dalam setiap layanan Teknologi Informasi yang kami berikan.</li>
					<li>Memberikan produk dan layanan yang berkualitas dengan layanan purna jual yang maksimal kepada setiap pelangan kami.</li>
				</ul>
			</div> -->
			<div>
				<table class="table">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Data Lector</th>
					<th scope="col">Education</th>
					<th scope="col">Kelompok Keahlian</th>
					<th scope="col">Sekolah / Fakultas</th>
					<th scope="col">Jabatan Fungsional</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php $i = 1; ?>
						<?php foreach ($tbl_lecturer as $lec) : ?>
					<th scope="row"><?= $i; ?></th>
					<td><b><a href="datalengkapstylish.php?id=<?= $lec["id"]; ?>"><?= $lec['nama']; ?></b> <br> <img src="<?php echo base_url().'theme/images/profile/'.$lec['gambar'];?>" alt=""></td>
					<td>
						<li><?= $lec['s1']; ?></li>
						<li><?= $lec['s2']; ?></li>
						<li><?= $lec['s3']; ?></li>
					</td>
					<td><?= $lec['Kel_Keahlian']; ?></td>
					<td><?= $lec['Sekolah_Fakultas']; ?></td>
					<td><?= $lec['Jabatan_Fungsional']; ?></td>
					</tr>
						<?php $i++; ?>
						<?php endforeach; ?>
					
				</tbody>
				</table>
				<div class="container">
					<h4>Dosen Tamu (Guest Lecture)</h4>
					<p class="fh5co-staff">Other Lecturers : Partial or Guest lecture from ractitioners, Industries, Government, Research Center, Regulator, universities (Nasional and international), and international organization.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="fh5co-team animate-box">
		<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>The Team</h2>
						<p>Kami memiliki tim yang solid. one team, one spirit, and one goal.</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/person3.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Kanal Nuklir ID</h3>
						<h4>Co-Founder, CEO</h4>
						<p>M Fikri adalah seorang senior engineer lulusan perguruan tinggi di daerah Sumatera Barat.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/person2.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Dedi Irawan</h3>
						<h4>Co-Founder, CTO</h4>
						<p>Dedi Irawan adalah seorang web designer lulusan perguruan tinggi di daerah Sumatera Barat.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url().'theme/images/person4.jpg'?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Afif Ma'ruf</h3>
						<h4>Co-Founder, Designer</h4>
						<p>Afif Ma'ruf adalah seorang web designer lulusan perguruan tinggi di daerah Sumatera Barat.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
		</div>
	</div> -->


	<!-- <div class="fh5co-services">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>LAYANAN</h2>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/30.svg'?>" class="img-responsive"></span>
					<h3>SOFTWARE & PROGRAM</h3>
					<p>Tingkatkan kinerja perusahaan dengan Software yang sesuai dengan Business Process anda.</p>
					<p><a href="<?php echo base_url().'roadmap'?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/18.svg'?>" class="img-responsive"></span>
					<h3>IT CONSULTING</h3>
					<p>Konsultasi kan kebutuhan IT anda pada kami dan ketahui layanan lain yang kami berikan.</p>
					<p><a href="<?php echo base_url().'roadmap'?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'theme/images/27.svg'?>" class="img-responsive"></span>
					<h3>WEB DESIGN</h3>
					<p>Bangun identitas bisnis dan usaha anda di dunia Internet melalui Website.</p>
					<p><a href="<?php echo base_url().'roadmap'?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div> -->


	<?php $this->load->view('v_footer');?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

	</body>
</html>
