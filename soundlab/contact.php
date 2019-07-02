<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="./img/sound.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SoundLabAI</title>

        <!-- Icon css link -->
        <link href="font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="settings.css" rel="stylesheet">
        <link href="layers.css" rel="stylesheet">
        <link href="navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="owl.carousel.min.css" rel="stylesheet">
        
        <link href="style.css" rel="stylesheet">
        <link href="responsive.css" rel="stylesheet">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

body{
	background:#ffffff;
}
.navbar-default{
	background: transparent;
}
.navbar-default .navbar-toggle {
   margin-top: 30px;
}
#map {
    height: 400px;  /* The height is 400 pixels */
    width: 100%;  /* The width is the width of the web page */
}
@media (min-width: 2000px)
.navbar-right {
    float: right!important;
    margin-right: -15px;
    margin-top: 70px;
}
@media (min-width: 2000px)
.navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
    border-right: 1px solid #d6d6d6;
}
</style>
<script language="javascript">

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase()) || email.includes("@localhost");
}

function checkform(form2)
{   
    var fields = ["adsoyad1", "mailiniz1", "konu1",  "mesaj1"]
    var i, l = fields.length;
    var fieldname;
    for (i = 0; i < l; i++) {
        fieldname = fields[i];
        if(fieldname=="mailiniz1" && !validateEmail(form2[fieldname].value)){
            alert("Lütfen "+form2[fieldname].id+" dogru belirtiniz !");  
            form2[fieldname].focus();
            return false;              
        }
        if (form2[fieldname].value === "") {                    
            alert("Lütfen "+form2[fieldname].id+" belirtiniz !");                         
            form2[fieldname].focus();
            return false;           
        }
    }    
    return true;
}
</script>
<!-- Hotjar Tracking Code for www.soundlabai.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1171554,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
			    <nav class="navbar-default">
	               <div class="container">
		              <div class="navbar-header">
			               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				               <span class="sr-only">MENU</span>
				               <span class="icon-bar"></span>
				               <span class="icon-bar"></span>
				               <span class="icon-bar"></span>
			               </button>
			              <a class="navbar-brand"><img src="img/sound.png" class="img-responsive" /></a>
		             </div>
			    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div id="navbar" class="navbar-collapse collapse">                
                    <ul class="nav navbar-nav navbar-right">

                     <!--target="_blank" linkin yeni sayfada açılmasını sağlar-->
						 <li><a href="index.php">ANASAYFA</a></li>
						 <li><a href="aboutus.php">HAKKIMIZDA</a></li>
						 <li><a href="apps.php">UYGULAMALAR</a></li>
						 <li><a href="download.php">DOWNLOAD</a></li>
						 <li><a href="contact.php">İLETİŞİM</a></li>	
                    </ul>
                </div>
            </nav>
		</div>
						 <a class="dilSec" href="contact.php" style="color:red">TR ||</a>
                         <a class="dilSec" href="contact1.php"style="color:red">ENG</a>
	</nav>
  </header>
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
			<!--================Map Area =================-->
        <section class="world_map_area p_100">
            <div class="container">
                <div class="world_map_inner">
                    <center>

                    <iframe width="80%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=32.72638320922852%2C39.879312808069955%2C32.82217025756837%2C39.91895278833726&amp;layer=mapnik&amp;marker=39.89913566445716%2C32.77427673339844" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=39.8991&amp;mlon=32.7743#map=14/39.8991/32.7743">Open in osm</a></small>                      
                    </center>
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->
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
