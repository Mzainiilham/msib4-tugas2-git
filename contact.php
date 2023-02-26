
<?php include'header.php'; ?>
 <title>Contact M.Zaini Ilham</title>

<div class="social-body">
			<ul>
				<li class="facebook"><a href="https://api.whatsapp.com/send?phone=085933527397"><i class="fa fa-whatsapp"></i></a></li>
				<li class="instagram"><a href="https://www.instagram.com/zainiilham_/"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>

<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="contact-info">
							<h4>Tentang Saya</h4>
							<p> Saya mahasiswa STMIK SZ NW ANJANI Jurusan Teknik Informatika semester 6 Dan saat ini saya ikut di Program kampus merdeka MSIB STUDIINDEPENDE PT GITS INDONESIA</p>

								<?php
		            				$qry = mysqli_query($konek,"SELECT * FROM tbl_profil limit 1");
		                			while ($data=mysqli_fetch_assoc($qry)) {
		                		?>
						
							<?php } ?>
							<span><i class="fa fa-phone-square"></i>+6285933527397</span>
							<span><i class="fa fa-map-marker"></i>STMIK SZ NW ANJANI –LOMBOK TIMUR</span>
							<span><i class="fa fa-globe"></i><a href="index.php">ZAINI</a></span>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12 ">
						<div class="form-head">
							<form class="form" action="#">
								<div class="form-group">
									<input name="name" type="text" placeholder="enter name">
								</div>
								<div class="form-group">
									<input name="email" type="email" placeholder="enter email">
								</div>
								<div class="form-group">
									<textarea name="message" placeholder="enter message"></textarea>
								</div>
								<div class="form-group">
									<div class="button">
										<button type="submit" class="btn primary">KIRIM PESAN</button>

										<p> Sorry Belum Bisa Berfungsi</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php include'footer.php'; ?>