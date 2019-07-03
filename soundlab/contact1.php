
<!DOCTYPE html>
<html lang="en">
    <?php include("includes/head.php") ?>
    <body>
        
        <?php include("includes/header1.php") ?>
		        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
		        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
					
                        <form  class="contact_us_form row" name="form1" method="post" action="gonder.php" onsubmit="return checkform(this);">
                            <div class="form-group col-lg-6">
							<span class="icyaziii">
                                <input type="text"  class="form-control" id="adsoyad" name="adsoyad" placeholder="Name">
								 *</span>
                            </div>
                            <div class="form-group col-lg-6">
							<span class="icyaziii">
                                <input type="text" class="form-control" id="mailiniz" name="mailiniz" placeholder="Email">
								 *</span>
                            </div>
                            <div class="form-group col-lg-12">
							<span class="icyaziii">
                                <input type="text" class="form-control" id="konu" name="konu" placeholder="Subject*">
								*</span>
                            </div>
                            <div class="form-group col-lg-12">
							<span class="icyaziii">
                                <textarea class="form-control" name="mesaj" id="mesaj" rows="2" placeholder="Message"></textarea>
								*</span>
                            </div>
                                <center><td><input type="submit" value="Send" name="Submit"><td>&nbsp;</td><input type="reset" name="Reset" value="Clean Form"></td></center>
                        </form><br/><br/><br/><br/>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h3>                     
						<div class="bd-callout">
                        <p>Address : SoundLabAI Ltd. METU Technopark Kuluçka Merkezi Çankaya/Ankara</p><br/>
                        <p>Phone :  0536 382 8541 </p><br/>
						<p>E-Mail : info@soundlabai.com</p>
                        </div></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 <<?php include("includes/map.php") ?>
        </section>  
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="jquery.themepunch.tools.min.js"></script>
        <script src="jquery.themepunch.revolution.min.js"></script>
        <script src="revolution.extension.actions.min.js"></script>
        <script src="revolution.extension.video.min.js"></script>
        <script src="revolution.extension.slideanims.min.js"></script>
        <script src="revolution.extension.layeranimation.min.js"></script>
        <script src="revolution.extension.navigation.min.js"></script>
        <script src="revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="jquery.waypoints.min.js"></script>
        <script src="jquery.counterup.min.js"></script> 
        <script src="apear.js"></script>
        <script src="countto.js"></script>
        <script src="owl.carousel.min.js"></script>
        <script src="jquery.magnific-popup.min.js"></script>
        <script src="smoothscroll.js"></script>
        
        <script src="theme.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121173964-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-121173964-1');
</script>

    </body>
</html>
