<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">QUICK LINKS</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Make Appointment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Department Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Our Case Studies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Our Business Growth</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About Our Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Our Affiliates Program</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">View Our Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Check Our Careers</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">LEGAL</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Legal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Report Abuse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">SUPPORT</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Knowledge Base</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Forums</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">System Status</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row footer-top-wrap">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">GET IN TOUCH</h4>
                                <ul class="get-in-touch-list">
                                    <?php 
                                        $get_info=mysqli_query($con,"SELECT * FROM address");
                                        $get_info= mysqli_fetch_array($get_info)
                                    ?>
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-map-marker-alt mr-2"></span> <?php echo $get_info['address']; ?></li>
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-envelope mr-2"></span> <?php echo $get_info['email']; ?></li>
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span> <?php echo $get_info['phone']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2020. All
                        rights reserved by
                        <a href="https://www.facebook.com/ih75754/" target="_blank">MD. Ibrahim Hossain</a></p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <div class="social-nav text-right">
                        <ul class="list-unstyled social-list mb-0">
                            <li class="list-inline-item tooltip-hover">
                                <a href="https://www.facebook.com/ih75754/" class="rounded"><span class="ti-facebook"></span></a>
                                <div class="tooltip-item">Facebook</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="ti-twitter"></span></a>
                                <div class="tooltip-item">Twitter</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="https://www.linkedin.com/in/md-ibrahim-hossain/" class="rounded"><span class="ti-linkedin"></span></a>
                                <div class="tooltip-item">Linkedin</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="ti-dribbble"></span></a>
                                <div class="tooltip-item">Dribbble</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


<!--jQuery-->
<script src="js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="js/mixitup.min.js"></script>
<!--wow js-->
<script src="js/wow.min.js"></script>
<!--owl carousel js-->
<script src="js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="js/scripts.js"></script>
</body>

<!-- Mirrored from corporx.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2020 07:53:49 GMT -->
</html>