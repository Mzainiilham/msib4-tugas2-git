
<?php include'header.php' ?>
 <title>my-portopolio</title>
		<section id="slider" class="slider" style="background-image:url('img/20230224_100844.jpg')">
			<div class="container">
				<div class="bs-primary">
					<div class="col-md-7 col-sm-12 col-xs-12">
						<div class="text">
							<h1>Welcome To My Portopolio</h1>
							<div class="container">
							<h1>M.ZAINI ILHAM</h1>
							<div class="button">
								<a href="tentang.php" class="btn primary "><i class="fa fa-briefcase"></i>SAYA</a>
								<a href="contact.php" class="btn"><i class="fa fa-phone"></i>CONTAK SAYA</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about" class="about">
			<div class="container">
				<div class="row">
					<div class="about-content">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="section-title">
								<h2>About <span>Me</span></h2>
							</div>
						</div>

						<?php
            				$qry = mysqli_query($konek,"SELECT * FROM tbl_profil limit 1");
                			while ($data=mysqli_fetch_assoc($qry)) {
                		?>
						<div class="col-md-6  col-sm-6 col-xs-12">
							<div class="single-about">
							<p> Saya mahasiswa STMIK SZ NW ANJANI Jurusan Teknik Informatika semester 6 Dan saat ini saya ikut di Program kampus merdeka MSIB STUDIINDEPENDE PT GITS INDONESIA</p>
							<p> Saya juga aktif di beberapa organisasi kampus seperti, HMPSTI,BEM,KSR-PMI Dan HIMMAH NW</p>
							
								<div class="cv">
									<a target="_blank"href="dokumen/CV Zaini ilham.pdf">Download CV</a>
								</div>
								<!-- <div class="social">
									<ul>
										<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div> -->
							</div>
						</div>
						<?php } ?>


						<?php
            				$qry = mysqli_query($konek,"SELECT * FROM tbl_bulan limit 1");
                			while ($data=mysqli_fetch_assoc($qry)) {
                		?>

						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="image">
								<img src="img/Lovething_17.jpg" alt="#">
							</div>
						</div>
					<?php } ?>

						<?php
            				$qry = mysqli_query($konek,"SELECT * FROM tbl_profil limit 1");
                			while ($data=mysqli_fetch_assoc($qry)) {
                		?>	
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="skill-content">
									</section>
		<section id="story" class="story section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h2>MY<span>SKILL</span></h2>
						</div>
										<h3>Bahasa Python</h3>
										<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  										<div class="progress-bar" style="width: 70%">70%</div>
											</div>	
											<h3>Microsoft Office</h3>
											<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  										<div class="progress-bar" style="width: 90%">90%</div>
											</div>	
											<h3>Desain Grafis</h3>
											<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  										<div class="progress-bar" style="width: 85%">85%</div>
											</div>	
											<h3>Soft Skill</h3>
											<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  										<div class="progress-bar" style="width: 80%">80%</div>
											</div>	
											<h3>Soft Skill</h3>
											<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  										<div class="progress-bar" style="width: 80%">80%</div>
											</div>	
						<?php } ?>

								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="skill-main">

								<?php
		            				$qry = mysqli_query($konek,"SELECT * FROM tbl_jadwal_solat limit 20");
		                			while ($data=mysqli_fetch_assoc($qry)) {
		                		?>
										<div class="single-skill">
											<div class="skill-title">
											
											</div>
										</div>
								<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="story" class="story section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h2>PE<span>NDIDIKAN</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="story-content">
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">2010</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h3>2010-2015</h3>
									<p>MI.NW KEMBANG ARE</p>
								</div>
							</div>
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">2015</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
									<h3>2015–2017</h3>
									<p>MTS.NW KEMBANG ARE</p>
								</div>
							</div>
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">2017</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
									<h3>2017–2020</h3>
									<p>MA.NW PENGKELAK MAS</p>
								</div>
							</div>
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2020</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
									<h3>2020–2024</h3>
									<p>STMIK SZ NW ANJANI LOMOK TIMUR</p>
								</div>
							</div>

							</div>


						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="story" class="story section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h2>MA<span>HASISWA</span></h2>
							<h2>STMIK<span> SZ NW ANJANI LOTIM</span></h2>
						</div>
				
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php include'footer.php' ?>