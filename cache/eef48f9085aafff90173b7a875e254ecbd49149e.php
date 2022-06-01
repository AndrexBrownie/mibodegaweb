<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index-431:41-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MiBodega - <?php echo $__env->yieldContent('title'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= URL . 'images/favicon.png'?>">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo e(URL); ?>css/responsive.css">
        <!-- Modernizr js -->
        <script src="<?php echo e(URL); ?>js/vendor/modernizr-2.8.3.min.js"></script>
        
        <?php echo $__env->yieldContent('styles'); ?>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
           <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Header Area End Here -->
            <!-- Begin Slider With Banner Area -->
          
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Static Top Area -->
          
            <!-- Static Top Area End Here -->
            <!-- product-area start -->
          
            <!-- product-area end -->
            <!-- Begin Li's Static Banner Area -->
         
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
         
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
         
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
         
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Group Featured Product Area -->
         
            <!-- Group Featured Product Area End Here -->
            <!-- Begin Footer Area -->

            
            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            <?php echo $__env->make('layouts.partials.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="<?php echo e(URL); ?>js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="<?php echo e(URL); ?>js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="<?php echo e(URL); ?>js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="<?php echo e(URL); ?>js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="<?php echo e(URL); ?>js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="<?php echo e(URL); ?>js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="<?php echo e(URL); ?>js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="<?php echo e(URL); ?>js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="<?php echo e(URL); ?>js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="<?php echo e(URL); ?>js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="<?php echo e(URL); ?>js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="<?php echo e(URL); ?>js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="<?php echo e(URL); ?>js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="<?php echo e(URL); ?>js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="<?php echo e(URL); ?>js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="<?php echo e(URL); ?>js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="<?php echo e(URL); ?>js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="<?php echo e(URL); ?>js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="<?php echo e(URL); ?>js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="<?php echo e(URL); ?>js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="<?php echo e(URL); ?>js/main.js"></script>
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>

<!-- index-431:47-->
</html>
<?php /**PATH C:\xampp\htdocs\miBodegaWeb\app\views/layouts/template.blade.php ENDPATH**/ ?>