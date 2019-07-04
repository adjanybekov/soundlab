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
                    <h2>DNNtoCPP class</h2>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single_blog_inner">
                            <div class="s_blog_main">
                                <div class="blog_text">
                                    <a href="#"><h4>SoundLabAI DNNtoCPPclass:</h4></a><br/>
                                    <p>SoundLabAI DNNtoCPPclass Derin Sinir Ağları (Deep Neural Network (DNN)) modellerinin uygulamalar içinde kolayca kullanılmasını sağalayan genel bir C++ sınıfıdır.
									TensorFlow, Keras, Caffe gibi araçlarla geliştirdiğiniz DNN modellerinizi uygulamalarınız içinde kullanmak istediğinizde DNNtoCPPclass’ı kullanabilirsiniz.
									DNNtoCPPclass tüm DNN modellerinizi kullanmanızı sağlayan genel bir sınıftır. Sınıfın "loadparameters" metodunu çağırdınızda sınıf DNN modelinize dönüşmüş olur.</p>
                                </div>
					            <div class="blog_img">
								    <center>
                                    <img class="img-fluid" src="img/DNN.png"  alt="">
									</center>
                                </div>
							    <div class="blog_text">
                                    <p>DNNtoCPPclass’ı Şekil’de görülen DNN modeli gibi tüm modelleri uygulamak için kullanabilirsiniz.
 									   Gizli katmanlarda aktivasyon fonksiyonu olarak "ReLU", çıkış katmanında "sigmoid" kullanılmıştır. 
									   Girişte öznitelikleri tutan bir vektör verilince çıkışta 0-1 arasında test ettiğiniz sınıfla ilgili olasılık değerini alırsınız.
                                       DNNtoCPPclass’ı indirdiğinizde kullanımıyla ilgili bir kullanıcı klavuzu bulacaksınız.
                                       DNNtoCPPclass ticari olmayan uygulamalar ve geliştirme ortamları için ücretsizdir. 
									   Ticari uygulamalarda kullanmak için SoundLabAI’dan lisans satın almanız gerekir.
                                       Uygulamada özelleştirmeler isterseniz iletişim sayfasından bağlantıya geçebilirsiniz.
                                     </p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-lg-6">
                    
                        <form  class="contact_us_form row" name="form2" method="post" action="download_gonder_local.php"  onsubmit="return checkform(document.form2);">
                            <div class="form-group col-lg-6">
                            <span class="icyaziii">
                                <input type="text" class="form-control" id="Ad-Soyad" name="adsoyad1" placeholder="Ad - Soyad">
                                 *</span>
                            </div>
                            <div class="form-group col-lg-6">
                            <span class="icyaziii">
                                <input type="text" class="form-control" id="Email" name="mailiniz1" placeholder="Email">
                                 *</span>
                            </div>
                            <div class="form-group col-lg-12">
                            <span class="icyaziii">
                                <input type="text" class="form-control" id="Konu" name="konu1" placeholder="Indirme nedeni">
                                 </span>
                            </div>                            
                            <center><td>
                                <img class="img-fluid" src="img/zip.png"  alt="">
                                <input type='submit' name='submit' value='Download' /></td></center>                        
                        </form><br/><br/><br/>
                    </div>
                                
                            </div>  							
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
		
		
		
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