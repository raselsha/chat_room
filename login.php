   

    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/all.min.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/animate.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/flaticon.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/odometer.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/nice-select.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/main.css">
    <link rel="stylesheet" href="control/login/Nirvana3/assets/css/responsive.css">

    
      
    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo"><a href="#" title="home">
                                    <img id="main_logo" alt="logo" src="<?php echo getLogo('logo'); ?>"/>
                                    </a></div>
              <ul class="menu">
                    <li>
                        <a href="#" class="active" title="home">Home</a>
                        </li>
                    <li>
                        <a href="terms.php" title="terms">Terms</a>
                    </li>
                    <li>
                        <a href="privacy.php" title="privacy">Privacy</a>
                    </li>
                                          </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
        <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <img class="img1 wow fadeInLeft" src="control/login/Nirvana3/assets/images/banner/aimg1.png" alt="img1">
        <img class="img2 wow fadeInRight" src="control/login/Nirvana3/assets/images/banner/aimg2.png" alt="img2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="join-now-box wow fadeInUp">
                        <div class="single-option" style="border-bottom: unset;padding: 10px 22px;margin-left: 10px;margin-right: 10px;">
                            <div class="field" style="width: 100%;">
                        		<p class="title"><?php echo $lang['name_email']; ?></p>
                        		<input id="user_username" type="text" maxlength="50" placeholder="username">
                        	</div>
                        </div>
                        <div class="single-option" style="border-bottom: unset;padding: 10px 22px;margin-left: 10px;margin-right: 10px;margin-top: -20px;">
                            <div class="field" style="width: 100%;">
                        		<p class="title"><?php echo $lang['password']; ?></p>
                        		<input id="user_password" maxlength="30" type="password" placeholder="password">
                        	</div>
                        </div>
                        <div class="joun-button" style="margin-top: 10px;">
                            <button onclick="sendLogin();" type="button" class="custom-button">
                                <i class="fas fa-sign-in-alt" aria-hidden="true"></i> Login</button>
                            <br>
                            <div class="register-button" style="margin:5px;padding: 10px 20px;text-align: center;">
                                <button type="button" onclick="getRegistration();" class="custom-button" style="margin:2px;padding:10px 20px;border-radius:5px;">
                                    <i class="fa fa-user-plus"></i> Signup </button>
					<?php if(allowGuest()){ ?>
					<div class="clear"></div>
					<button onclick="getGuestLogin();" class="custom-button"><?php echo $lang['guest_login']; ?></button>
					<?php } ?>
                			</div>
                            <?php if(boomUseSocial() && !embedMode()){ ?>
							<div class="intro_social_container">
    							<div class="intro_social_content">
    							    <?php if(boomSocial('facebook_login')){ ?>
        						<img onclick="window.location.href='login/facebook_login.php'" class="intro_social_btn bclick" src="<?php echo $data['domain']; ?>/default_images/social/facebook.svg" alt=”facebook”/>
        						<?php } ?>
        						<?php if(boomSocial('google_login')){ ?>
        						<img onclick="window.location.href='login/google_login.php'" class="intro_social_btn bclick" src="<?php echo $data['domain']; ?>/default_images/social/google.svg" alt=”google”/>
        						<?php } ?>
        						<?php if(boomSocial('twitter_login')){ ?>
        						<img onclick="window.location.href='login/twitter_login.php'" class="intro_social_btn bclick" src="<?php echo $data['domain']; ?>/default_images/social/twitter.svg" alt=”twitter”/>
        						<?php } ?>
        						</div>
        					</div>
				        	<?php } ?>
				        	<br>
				        	<li class="bclick2" onclick="getRecovery();">
				        	    <i class="fa fa-key"></i> Forgot password?</li>
                            <br>
                            <div id="last_embed">
            					<?php echo embedActive(5); ?>
            				</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

 

    <!-- ==========Start-Flirting-Section========== -->
    <section class="flirting-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content">
                        <div class="section-header">
                            <h1 class="sub-title extra-padding wow fadeInUp">
                               cmx Chat Room - Meet New cmx Friends Around The World
                            </h1>
                            <h2 class="title extra-padding wow fadeInUp">
                               Meet new friends world wide
                            </h2>
                            <p>
                                <?php echo $page['page_description']; ?>
                            </p>
                            <br>
                            <p>
Connect to our cmx chat room for free and make friendship throughout the world by meeting plenty of diverse men and women through our chat and our awesome app which we are absolutely free without any kind of subscription. Find joy and happiness throughout our chat                            </p>
                        </div>
                        
                        <a href="https://play.google.com/store/apps/" class="custom-button" title="app"><i class="fa fa-play-circle"></i> Play Store</a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="img">
                        <img class="bg-shape" src="control/login/Nirvana3/assets/images/flirting/circle.png" alt="circle">
                        <img src="control/login/Nirvana3/assets/images/flirting/illutration.png" alt="illutration">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Start-Flirting-Section========== -->
    <!-- ==========How it work Section========== -->
    <section class="how-it-work-section">
        <img class="shape1" src="control/login/Nirvana3/assets/images/h-it-w/circle-shape.png" alt="shape">
        <img class="shape2" src="control/login/Nirvana3/assets/images/h-it-w/bird.png" alt="bird">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content">
                        <div class="section-header">
                            <h2 class="title wow fadeInUp">cmx CHAT - FREE cmx CHAT ROOM</h2>

<p class="text wow fadeInUp">
                               Welcome to cmx chat. We are absolutely free cmx chat room. Meet millions of cmx people around the world and make friends and connect with them. Lots of funs and entertainment are given in our chat room like online video streaming fm players etc. to ensure users satisfaction and  never feel bored while chatting. Are you still thinking about our chat? Come on register a free account with easy and flexible registration method and make plenty of friends around the world </p>
                            <h4 class="sub-title wow fadeInUp">
                             Chat with cmx Girls and boys

                            </h4>
                            <p class="text wow fadeInUp">
                               Meeting plenty of cmx girls and boys through our cmx chat room. Create memories through your valuable presence over our cmx chat</p>
                             <h3 class="title wow fadeInUp">
                            Why cmxchat ?
                            </h3>
                             <p class="text wow fadeInUp">
                              Have a pleasant and memorable moments through our cmx chat room by using awesome smiles, emojis, YouTube, Fm songs, music players etc. that brings your mind refreshing and keeps you stress free and we provide a peaceful environment through our features that we have in our chat room. Feel the enthusiasm through our chat come on friends                            </p>
                        </div>
                    </div>
                </div>
            </div>
          
    </section>
    <!-- ==========How it work Section========== -->

    

 
<style>.theme_color,.bclick {
    color: #ffffff;
}
.bclick2 {
    cursor: pointer;
}
.mozscroll{
    scrollbar-width: thin;
}



::-webkit-scrollbar { width: 6px !important; height: 3px!important;;}
::-webkit-scrollbar-button {  background-color: transparent!important;; }
::-webkit-scrollbar-track {  background-color: #f2f2f2!important;;}
::-webkit-scrollbar-track-piece { background-color: transparent!important;;}
::-webkit-scrollbar-thumb { height: 50px!important; 
background-color: #eb3580!important;; 
    background-image: linear-gradient(#f7a0f5, #51bac3);
border-radius: 3px!important;;}
::-webkit-scrollbar-corner { background-color: transparent!important;;}
::-webkit-resizer { background-color: transparent!important;;}</style>
    <!-- ==========Newslater-Section========== -->
<?php if(boomCookieLaw()){ ?>
<div class="cookie_wrap">
	<div class="cookie_text">
		<p><?php echo str_replace('%data%', '<span onclick="openSamePage(\'privacy.php\');" class="bclick link_like">' . $lang['privacy'] . '</span>', $lang['cookie_law']); ?></p>
	</div>
	<div class="cookie_button">
		<button onclick="hideCookieBar();" class="ok_btn reg_button"><?php echo $lang['ok']; ?></button>
	</div>
</div>
<?php } ?>
     <footer class="footer-section">
        
                <p class="title wow fadeInUp"><?php boomFooterMenu(); ?></p> 
    </footer> 
    <!-- ==========Newslater-Section========== -->

    <script src="control/login/Nirvana3/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="control/login/Nirvana3/assets/js/plugins.js"></script>
    <script src="control/login/Nirvana3/assets/js/bootstrap.min.js"></script>
    <script src="control/login/Nirvana3/assets/js/heandline.js"></script>
    <script src="control/login/Nirvana3/assets/js/isotope.pkgd.min.js"></script>
    <script src="control/login/Nirvana3/assets/js/magnific-popup.min.js"></script>
    <script src="control/login/Nirvana3/assets/js/owl.carousel.min.js"></script>
    <script src="control/login/Nirvana3/assets/js/wow.min.js"></script>
    <script src="control/login/Nirvana3/assets/js/countdown.min.js"></script>
    <script src="control/login/Nirvana3/assets/js/odometer.min.js"></script>
    <script src="control/login/Nirvana3/assets/js/viewport.jquery.js"></script>
    <script src="control/login/Nirvana3/assets/js/nice-select.js"></script>
    <script src="control/login/Nirvana3/assets/js/main.js"></script>
  <script data-cfasync="false" src="js/function_login.js<?php echo $bbfv; ?>"></script>
<script data-cfasync="false" src="js/function_active.js<?php echo $bbfv; ?>"></script>