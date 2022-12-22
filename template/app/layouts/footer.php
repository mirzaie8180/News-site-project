
    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>اخبار پربازدید</h4>
                    <?php foreach ($popularPosts as $popularPost) { ?>
                        
                    
                    <ul>
                        <li><a href="<?= url('show-post/' . $popularPost['id']) ?>"><?= $popularPost['title'] ?></a></li>

                    </ul>
                    <?php }?>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>لینک سریع</h4>
                    <ul>
                        <li><a href="https://microsoft.com" target="_blank">درباره ما</a></li>
                        <li><a href="tel:+989309428180">تماس با ما</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>شبکه های ارتباطی</h4>
                    <ul class="instafeed d-flex flex-wrap"> 
                    <li><a href="https://www.instagram.com/mirzaie8180" target="blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://github.com/mirzaie8180" target="blank"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://telegram.com/mirzaie8180" target="blank"><i class="fa fa-telegram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">

                <div class="col-lg-4 col-md-12 footer-social">

                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
    <script src="<?= asset('/public/app/js/vendor/jquery-2.2.4.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?= asset('/public/app/js/vendor/bootstrap.min.js') ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="<?= asset('/public/app/js/easing.min.js') ?>"></script>
    <script src="<?= asset('/public/app/js/hoverIntent.js') ?>"></script>
    <script src="<?= asset('/public/app/js/superfish.min.js') ?>"></script>
    <script src="<?= asset('/public/app/js/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="<?= asset('/public/app/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= asset('/public/app/js/mn-accordion.js') ?>"></script>
    <script src="<?= asset('/public/app/js/jquery-ui.js') ?>"></script>
    <script src="<?= asset('/public/app/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= asset('/public/app/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('/public/app/js/mail-script.js') ?>"></script>
    <script src="<?= asset('/public/app/js/main.js') ?>"></script>
</body>

</html>