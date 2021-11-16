
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <?php foreach($tbl_lecturer as $lec): ?>
			<?php if ($in==$lec["id"]): ?>
				<title>About Lecturer | <?= $lec["nama"]; ?></title>
			<?php endif; ?>
		<?php endforeach; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Kanal Nuklir ID" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url().'theme/favicon.ico'?>">

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
						   <?php foreach($tbl_lecturer as $lec): ?>
								<?php if ($in==$lec["id"]): ?>
									<h2 class="btn btn-success">Lecturer Profile </h2>
									<!-- <br> <h5 class="btn btn-success"> <?= $lec["nama"]; ?> </h5> -->
								<?php endif; ?>
							<?php endforeach; ?>
		   					
		   					<!-- <p class="fh5co-lead"> Graduate Program in Nuclear Science and Engineering has a total of 19 lecturer members (members of Nuclear Physics and Biophysics research group of ITB) which 7 members are qualified doctoral supervisors. </p> -->
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>


	<div class="fh5co-services">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Details Profile</h2>
					<?php foreach($tbl_lecturer as $lec): ?>
						<?php if ($in==$lec["id"]): ?>
							 <h5> <?= $lec["nama"]; ?> </h5>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<div class="col-md-8">
				<!-- <figure>
					<img src="<?php echo base_url().'theme/images/image_1.jpg'?>" alt="Free HTML5 Template" class="img-responsive">
				</figure> -->
				<div>
					<?php foreach($tbl_lecturer as $lec): ?>
						<?php if ($in==$lec["id"]): ?>
						
						<div class="jumbotron jumbotron-fluid">
							<div class="container text-center">
							<img src="<?php echo base_url().'theme/images/profile/'.$lec['gambar'];?>" style="width: 100%; height: auto;" alt="">
							<br>
							<br>
							<h3 class="display-4"><?= $lec["nama"]; ?></h3>
							
							<table class="table table-striped table-dark">
								
								<tbody>
									<tr>
									<th scope="row">Kelompok Keahlian</th>
									<td><?= $lec['Kel_Keahlian']; ?></td>
									</tr>
									<tr>
									<th scope="row">Sekolah Fakultas</th>
									<td><?= $lec['Sekolah_Fakultas']; ?></td>
									</tr>
									<tr>
									<th scope="row">Jabatan Fungsional</th>
									<td><?= $lec['Jabatan_Fungsional']; ?></td>
									</tr>
								</tbody>
							</table>

							
							</div>
						</div>
						
						<div class="jumbotron jumbotron-fluid">
							<div class="container text-center">
							<h3 class="display-4">Education</h3>
							</div>
							<div class="container">
							<h3 class="display-4">S1</h3>
							<p><?= $lec['s1']; ?></p>
							<h3 class="display-4">S2</h3>
							<p><?= $lec['s2']; ?></p>
							<h3 class="display-4">S3</h3>
							<p><?= $lec['s3']; ?></p>
							</div>
						</div>
						
						<div class="jumbotron jumbotron-fluid">
							<div class="container text-center">
							<h3 class="display-4">Project</h3>
							</div>
						</div>

						<div class="jumbotron jumbotron-fluid">
							<div class="container text-center">
							<h3 class="display-4">Publication</h3>
							</div>
						</div>

						<div class="jumbotron jumbotron-fluid">
							<div class="container text-center">
							<h3 class="display-4">HKI</h3>
							</div>
						</div>
					
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-4">
				<div>
					<table class="table table-hover">
					<thead>
						<tr>
						<th scope="col">Data Lector</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php $i = 1; ?>
							<?php foreach ($tbl_lecturer as $lec) : ?>
								
						<td <?php if ($in==$lec["id"]) : ?> class ="active" <?php endif ?> ><a href="<?php echo base_url().'lecturer/detail/'?><?= $lec["id"]; ?>"><?= $lec['nama']; ?></td>
						</tr>
								
							<?php $i++; ?>
							<?php endforeach; ?>
						
					</tbody>
					</table>
					
				</div>
			</div>
			</div>
		</div>
		
	</div>



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
	<!-- Easy PieChart -->
	<script src="<?php echo base_url().'theme/js/jquery.easypiechart.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url().'theme/js/jquery.stellar.min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

	</body>
</html>
