<?php
$copy1 = array("English"=>"Copyright", "Dari"=>"Copyright", "Pushto"=>"د چاپ حق");
$copy2 = array("English"=>"2023, All Right Reserved", "Dari"=>"2023, All Right Reserved", "Pushto"=>"2023، ټول حقونه خوندي دي");
$nameO = array("English"=>"Sadaf", "Dari"=>"Sadaf", "Pushto"=>"صدف");



?>


<footer class="footer-section" style=" margin-top: 80px; ">

<div class="container">
    <div class="footer-cta pt-5 pb-5">
        
        <div class="row">
            <div class="wrapper">
                <a href="#"><div class="bg-ico" id="facebook"><i class="fab fa-facebook social  facebook fa-3x"></i></div></a>
                <a href="#"><div class="bg-ico" id="instagram"><i class="fab fa-instagram social  instagram fa-3x"></i></div></a>
            </div>
        </div>
    </div>

    <div class="pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Location</h4>
                                <span>124 4th Ave S Kent, WA 98031</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-clock"></i>
                            <div class="cta-text">
                                <h4>Hours</h4>
                                <span>Monday-Saturday</span>
                                <span class="d-block">8:00 AM - 5:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Contact us</h4>
                                <span>fauzia.ameeri@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
</div>




<div class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                <div class="copyright-text">
                    <p><?php echo $copy1[$language] ?> &copy; <?php echo $copy2[$language] ?> <a href=""><?php echo $nameO[$language] ?></a></p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                <div class="footer-menu">
                    <ul>
                        <li><a href="index.php"><?php echo $home[$language] ?></a></li>
                        <li><a href="contact.php"><?php echo $contact[$language] ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>








</footer>