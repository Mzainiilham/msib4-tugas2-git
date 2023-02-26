
<?php include'header.php'; ?>

 <title>Profil Zaini Ilham</title>
 							<div class="col-md-4 col-sm-4 col-xs-12">	
							<div class="image-container">
								<img src="img/20230226_3306.png" alt="#">
							</div>
						</div>
		<section id="story" class="story section">
			<div class="container">
				<div class="row"> 
					<div class="col-xs-12">
						<div class="section-title">
							<h2>DATA<span> PRIBADI</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="story-content">
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">1.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>Nama : M. ZAINI ILHAM</h4>
								</div>
							</div>
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">2.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>Agama : Islam</h4>
								</div>
							</div>

							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">3.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>Jenis Kelamin : Laki-Laki</h4>
								</div>
							</div>
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">4.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>Status Perkawinan : Belum Kawin</h4>
								</div>
							</div>

							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">5.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>Pendidikan Terakhir : S1 STMIK SZ NW ANJANI</h4>
								</div>
							</div>
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">6.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>Alamat : Sakra Barat,Kembang Are Sampai</h4>
								</div>
							</div>

							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">7.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>No. HandPhone : 085933527397</h4>
								</div>
							</div>
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">8.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>Email : zainiilham858@gmail.com</h4>
								</div>
							</div>
							</div>
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">8.</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h4>Hobi : Tidur</h4>
								</div>
							</div>
									<?php
			            				$qry = mysqli_query($konek,"SELECT * FROM tbl_profil limit 1");
			                			while ($data=mysqli_fetch_assoc($qry)) {
                					?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




<?php include'footer.php'; ?>
