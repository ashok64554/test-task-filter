<?php 

ob_start();
@session_start();
include "header.php";
include("do.php");
?> 

<!--banner start-->
<section class="hero-area">
	<div class="hero-slides owl-carousel">

		<div class="single-hero-slide d-flex align-items-center justify-content-center">

			<div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>

			<div class="hero-slides-content text-center">
				<h2 data-animation="fadeInUp" data-delay="100ms">Find Your Passion <span>Find Your Passion</span></h2>
				<!--<p data-animation="fadeInUp" data-delay="300ms">Music Theme</p>-->
			</div>

			<h4 class="big-text">Find Your Passion </h4>
		</div>

		<div class="single-hero-slide d-flex align-items-center justify-content-center">

			<div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>

			<div class="hero-slides-content text-center">
				<h2 data-animation="fadeInUp" data-delay="1000ms">Online Music Class<br><a href="#" class="btn musica-btn" data-toggle="modal" data-target="#exampleModal">Join Us</a></h2>
				<!--<p data-animation="fadeInUp" data-delay="300ms">Music Template</p>-->
			</div>
		</div>

		<div class="single-hero-slide d-flex align-items-center justify-content-center">

			<div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-3.jpg);"></div>

			<div class="hero-slides-content text-center">
				<h2 data-animation="fadeInUp" data-delay="100ms">Provides the best training for all 
					<span>provides the best training for all </span></h2>
					<!--<p data-animation="fadeInUp" data-delay="300ms">performing arts under one roof.</p>-->
				</div>

				<h2 class="big-text" >provides the best training for all  </h2>
			</div>

			<div class="single-hero-slide d-flex align-items-center justify-content-center">

				<div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>

				<div class="hero-slides-content text-center">
					<h2 data-animation="fadeInUp" data-delay="1000ms">Online Music Class<br><a href="#" class="btn musica-btn" data-toggle="modal" data-target="#exampleModal">Join Us</a></h2>
					<!--<p data-animation="fadeInUp" data-delay="300ms">Music Template</p>-->
				</div>
			</div>

		</div>

		<div class="bg-gradients"></div>

		<div class="slide-down" id="scrollDown">
			<h6>Slide Down</h6>
			<!--<div class="line"></div>-->
		</div>
	</section>
	<!--banner end-->


	<!--Our Course-->
	<div class="music-player-area section-padding-100" id="about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="section-heading">
						<?php 
						
						if(isset($_SESSION['msg']))
						{
							echo '<center><div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							<strong> You are registered successfully! </strong></div></center>';
							$_SESSION['msg']="";
							
							?>
							<?php 
							unset($_SESSION['msg']);
						} 
							
							
							?>
						<h2 style="color:black;">Online Classes</h2>
						<!-- <h6>Students get a chance to perform live on stage.</h6> -->
					</div>
					<div class="music-player-slides owl-carousel">

						<div class="single-music-player">
							<img src="img/bg-img/mp1.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Western Dance</h4>
									<a href="Join Now.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="wstrn.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/mp2.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">kathak</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="kathak.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/mp3.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Guitar</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="guitar.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/mp4.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Vocal Music</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="vcl_sngng.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/kbrd.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Keyboard</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="keybrd.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/drum.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Drums</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="drums.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/fine_art.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Fine Arts</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="fine_arts.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/tabla.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Tabla</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="tabla.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/vocal.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Vocal Music</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="vcl_sngng.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/piano.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Western Piano</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="wstrn_pino.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/zumba.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Zumba & Aerobics</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="zumba_arbcs.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>

						<div class="single-music-player">
							<img src="img/bg-img/summer.jpg" alt="">
							<div class="music-info d-flex justify-content-between">
								<div class="music-text">
									<h4 style="color: white;">Summer Camp</h4>
									<a href="register.php" class="btn musica-btn m-2">Join Now..</a>
								</div>
								<a href="smmr_cmp.php"><i class="fa fa-arrow-circle-o-right" style="font-size: 50px; color: white;"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--our courses end-->

	<!--about start-->
	<div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-4.jpg);" >
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-heading">
						<h2>About Us</h2>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-12 col-lg-6">
					<div class="about-thumbnail mb-100">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/IVqddyBjOKo?rel=0;&amp;autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=IVqddyBjOKo" frameborder="0" allowfullscreen="" style="height: 299px;border:solid 4px #88215f;box-shadow: 0 0 #fdfbfb;box-shadow: 0 0 14px #fffcfc;"></iframe>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="about-content mb-100">
						<br>
						<h4 style="text-align: justify;font-family:monospace;">Krazy2music is now one of the most renowned music schools in Gurugram. Our mission is to impart quality musical education and to promote Indian music.</h4>
						<p style="text-align: justify;font-family:inherit;">Music is a powerful medium as it facilitates communication which goes beyond words, enables meanings to be shared and promotes the development of an individual.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--about end-->

	<!--Recent Posts-->
	<div class="featured-shows-area section-padding-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-heading dark">
						<h2>Recent posts</h2>
						<h6>It's Interesting</h6>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="featured-shows-slides owl-carousel">
						<?php
						/*for session created in database...*/
						$qryy="select year from tbl_event_master group by year desc";
						$yrr=mysqli_query($conn,$qryy);
						$yrss=mysqli_fetch_assoc($yrr);
						$cyear=$yrss['year'];

						$sql="select * from tbl_event_master where year='$cyear' order by id desc limit 0,3";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{			  
							$p_date=date_create($row['date']);
							$edate=date_format($p_date,"d-M-Y");

							?>

							<div class="single-featured-shows">
								<img src="ced/admin/<?php echo $row['file'];?>" alt="">

								<div class="featured-shows-content">
									<div class="shows-text">
										<a href="#">
											<h4><?php echo $row['title'];?></h4>
											<p><?=$edate?></p>
										</a>
									</div>
									<div class="bg-gradients"></div>
								</div>
							</div>

						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Recent Posts end-->

	<!--Countdown start-->
	<div class="upcoming-shows-area">
		<div class="container">
			<div class="col-12"  style="padding:20px;">
				<div class="musica-cool-facts-area">
					<div class="row">

						<div class="col-12 col-sm-6 col-lg-3 ">
							<div class="single-cool-fact text-center align-items-end mb-20">
								<div class="scf-icon m-auto">
									<i class="fa fa-graduation-cap" style="font-size: 40px;color:#d86743;"></i>
								</div> <br>
								<div class="scf-text">
									<h2><span class="counter">27</span></h2>
									<p style="text-align: center;"><b>Professional </br>Teacher</b></p>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-6 col-lg-3">
							<div class="single-cool-fact text-center align-items-end mb-20">
								<div class="scf-icon m-auto">
									<i class="fa fa-group" style="font-size: 40px;color:#d86743;"></i>
								</div><br>
								<div class="scf-text">
									<h2><span class="counter">54</span></h2>
									<p style="text-align: center;"><b>Learning <br> Groups</b></p>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-6 col-lg-3">
							<div class="single-cool-fact text-center align-items-end mb-20">
								<div class="scf-icon m-auto">
									<i class="fa fa-child" style="font-size: 40px;color:#d86743;"></i>
								</div><br>
								<div class="scf-text">
									<h2><span class="counter">590</span></h2>
									<p style="text-align: center;"><b>Happy<br> Students</b></p>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-6 col-lg-3">
							<div class="single-cool-fact text-center align-items-end mb-20">
								<div class="scf-icon m-auto">
									<i class="fa fa-microphone" style="font-size: 40px;color:#d86743;"></i>
								</div><br>
								<div class="scf-text">
									<h2><span class="counter">8</span></h2>
									<p style="text-align: center;"><b>Music <br> Classes</b></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--countdown end-->

	<!--Affiliations Start-->
	<div id="certificate" class="discography-area section-padding-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-heading dark">
						<h2>Affiliations and Exams</h2>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">

					<div class="discography-slides owl-carousel">

						<div class="single-discography">
							<a href="http://www.pracheenkalakendra.org/" target="blank"><img src="img/bg-img/pracheenkalakendra.png" alt=""></a>
						</div>

						<div class="single-discography">
							<a href="https://www.rslawards.com/" target="blank"><img src="img/bg-img/rockschool.png" alt=""></a>
						</div>

						<div class="single-discography">
							<a href="https://www.prayagsangeetsamiti.co.in/" target="blank"><img src="img/bg-img/prayagsangeetsamiti.png" alt=""></a>
						</div>

						<div class="single-discography">
							<a href="https://www.trinitycollege.com/" target="blank"><img src="img/bg-img/trinity.png" alt=""></a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Affiliations end-->

	<!--Our Media-->
	<div class="musica-music-artists-area d-flex flex-wrap clearfix">

		<div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">

			<div class="music-search-content">
				<h2 style="font-size:40px;">Our Media</h2>
				<h4>See What Our Students Can Do</h4>
				<br>
				<a href="https://www.youtube.com/embed/6czXoU1__hg" target="blank" style="font-size: 50px;color: white;" class="example-1"><i class="fa fa-play-circle-o"></i></a>
			</div>
		</div>

		<div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/class.jpg);">

			<div class="music-search-content">
				<h2 style="font-size:40px;">Opening Offer</h2>
				<h4>Feel Free Trial Class</h4>
				<br>

				<!-- Button trigger modal -->

				<a href="#"class="btn musica-btn" data-toggle="modal" data-target="#exampleModal" >Get Started</a>
			</div>

		</div>


	</div>

</div>
</div>
</div>
<!--Our media End-->

<?php include "footer.php" ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#08addc;text-align: center;">
				<h4 class="modal-title" id="exampleModalLabel" style="color:white;">STILL NOT SURE WHAT TO DO?</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p style="text-align: center;font-size: 14px;">We are glad that you preferred to contact us. Please fill our short form and one of our friendly team members will contact you back.</p>

				<form id="form" action="enquiry_action.php" method="post">
					<div class="container">
						<div class="row">	

							<div class="col-md-6">
								<div class="form-group">
									<label style="font-size:18px;"><b>Course</b></label>
									<select class="form-control" name="course" required>
										<option value="">--Select Courses--</option>
										<option value="Dance - Kathak">Dance - Kathak</option>
										<option value="Dance - Western">Dance - Western</option>
										<option value="Zumba & Aerobics">Zumba & Aerobics</option>
										<option value="Vocal - Indian Classical">Vocal - Indian Classical</option>
										<option value="Vocal - Western">Vocal - Western</option>
										<option value="Guitar">Guitar</option>
										<option value="Drums">Drums</option>
										<option value="Keyboard">Keyboard</option>
										<option value="Tabla">Tabla</option>
										<option value="Fine Arts">Fine Arts</option>
										<option value="Western Piano">Western Piano</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="font-size:18px;"><b>Name</b></label>
									<input type="text" class="form-control" name="name" placeholder="Enter full Name" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="font-size:18px;"><b>Email</b></label>
									<input type="email" class="form-control" name="email" placeholder="Enter email id" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label style="font-size:18px;"><b>Mobile</b></label>
									<input  type="text" class="form-control" maxlength="10" onKeyPress="return isNumberKey(event)" name="mobile" required="">
								</div>
							</div>



							<input type="hidden" name="form_status" value="Trial Class">
							<div class="col-md-12" style="text-align: center;">
								<div class="form-group">
									<input class="btn btn-primary" value="Submit" type="submit">
								</div>
							</div>

						</div>
					</div>
				</form>

			</div>
			<div class="modal-footer">

			</div>
		</div>
	</div>
</div>

<script>
	function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;

		return true;
	}
</script>