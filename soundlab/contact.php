<!DOCTYPE html>
<html lang="en">
    <?php include("includes/head.php") ?>
    <body>
        
        <?php include("includes/header.php") ?>
        <!--================End Header Menu Area =================-->
		        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>İletişim</h2>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
		        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
					
                        <form  class="contact_us_form row" name="form2" method="post" action="gonder_local.php"  onsubmit="return checkform(document.form2);">
                            <div class="form-group col-lg-6">
							<span class="icyaziii">
                                <input type="text"  class="form-control" id="Ad-Soyad" name="adsoyad1" placeholder="Ad - Soyad">
								 *</span>
                                
                            </div>
                            <div class="form-group col-lg-6">
							<span class="icyaziii">
                                <input type="text" class="form-control" id="Email" name="mailiniz1" placeholder="Email">
								 *</span>
                                
                            </div>
                            <div class="form-group col-lg-12">
							<span class="icyaziii">
                                <input type="text" class="form-control" id="Konu" name="konu1" placeholder="Konu*">
								 *</span>
                                
                            </div>
                            <div class="form-group col-lg-12">
							<span class="icyaziii">
                                <textarea class="form-control" name="mesaj1" id="Mesaj" rows="2" placeholder="Mesaj"></textarea>
								 *</span>                            
                            </div>
                            <center><td><input type="submit" value="Gönder" name="submit"><td>&nbsp;</td><input type="reset" name="Reset1" value="Formu Temizle"></td></center>                        
                        </form><br/><br/><br/>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
							<img src="img/icon/title-icon.png" alt="">
                                <h3>                    
						<div class="bd-callout">
                        <p>Adres : SoundLabAI Ltd. ODTÜ Teknokent Kuluçka Merkezi Çankaya/Ankara</p><br/>
                        <p>Telefon : 0536 382 8541  </p><br/>
						<p>E-Mail : info@soundlabai.com</p>
                        </div></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php include("includes/map.php") ?>
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
