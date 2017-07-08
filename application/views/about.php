<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
	<link href="<?php echo base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />		
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?php echo base_url()?>Welcome/index"><h1><span>Com</span>pany</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo base_url()?>Welcome/index">Home</a></li>
								<li role="presentation"><a href="<?php echo base_url()?>Welcome/about" class="active">About Us</a></li>
								<li role="presentation"><a href="<?php echo base_url()?>Welcome/program">Program</a></li>								
								<li role="presentation"><a href="<?php echo base_url()?>Welcome/registration">Registration</a></li>
								<li role="presentation"><a href="<?php echo base_url()?>Welcome/contact.html">Contact</a></li>							
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="<?php echo base_url()?>Welcome/index">Home</a></li>
				<li>About Us</li>			
			</div>		
		</div>	
	</div>
	
	<div class="aboutus">
		<div class="container">
			<h3>Our Profil</h3>
			<hr>
			<div class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="col-md-3 wow fadeInDown">
					<img src="<?php echo base_url()?>assets/images/Logo.PNG" width="200px" class="img-responsive">
				</div>
				<div class="col-md-9 wow fadeInDown">
					<h4>GUIDING YOU TO BRIGHT FUTURE</h4>
					<p>Education Solution Center (ESC) hadir di tengah-tengah masyarakat Bandung, Cimahi, Jatinangor, dan sekitarnya sebagai bentuk peduli terhadap peningkatan pola pembelajaran siswa yang aktif, kreatif, efektif, dan menyenangkan dalam upaya mencerdakan anak bangsa. ESC merupakan pusat bimbingan belajar privat yang mengedepankan pelayanan prima dengan mendatangkan tutor langsung ke rumah siswa, sehingga memudahkan orang tua dalam memantau perkembangan akademik anak. Lembaga pendidikan ESC dilengkapi dengan fasilitas tutor terbaik dan terpecaya yang berasal dari mahasiswa/i/alumni PTN terbaik (ITB, UNPAD, dan UPI) dan PTS terbaik di Kota Bandung yang berkompeten, berkualitas, dan berpengalaman yang sudah terseleksi. </p>
				</div>
				<div class="col-md-12 wow fadeInDown">
					<p>Visi:<br/>Menjadi pusat lembaga bimbingan belajar privat terdepan dan terpercaya dalam upaya membantu mencerdaskan anak bangsa dengan mengedapankan kualitas layanan prima.</p>
					<p>Misi:<br/>
					1.	Menyelenggarakan program les privat sesuai kemampuan dan kebutuhan siswa.<br/>
					2.	Menyediakan tutor les privat yang berkompeten, berkualitas, dan berpengalaman dibidangnya.<br/>
					3.	Memfasilitasi siswa mengenali bakat dan minat untuk mencapai impian.<br/>
					4.	Menjadikan tutor sebagai sahabat belajar yang membantu siswa menggapai sekolah impian. <br/> 
					5.	Menyelenggarakan kegiatan peduli sosial berbasis pendidikan bersama komunitas/lembaga sosial yang sudah bekerjasama dengan ESC.<br/>
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="our-team">
		<div class="container">
			<h3>Our Team</h3>	
			<div class="text-center">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img src="<?php echo base_url()?>assets/images/services/1.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<img src="<?php echo base_url()?>assets/images/services/2.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<img src="<?php echo base_url()?>assets/images/services/3.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; Company Theme. All Rights Reserved.
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url()?>assets/js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.isotope.min.js"></script>  
	<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/functions.js"></script>
	
</body>
</html>