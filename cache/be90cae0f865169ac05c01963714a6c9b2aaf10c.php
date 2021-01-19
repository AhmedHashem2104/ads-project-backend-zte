<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
  <meta name="description" content="<?php echo e(json_decode($info['description'])->$lang); ?>">
  <meta name="keywords" content="<?php echo e(json_decode($info['keywords'])->$lang); ?>">
  <meta name="author" content="Ahmed Hashem">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($lang == 'en' ? 'Home - ' :' الرئيسية - '); ?><?php echo e(json_decode($info['title'])->$lang); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/public/icon.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="/views/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/views/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="/views/assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="/views/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="/views/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="/views/assets/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel="stylesheet" type="text/css" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .shadow-feature{
            /*border:2px solid black;*/
            border-radius:5%;
            margin:5px;
        }
        .shadow-feature:hover{
            box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.2), 4px 6px 20px 4px rgba(0, 0, 0, 0.19);
        }
        
        .shadow-feature2{
            /*border:2px solid black;*/
            border-radius:5%;
        }
        .shadow-feature2:hover{
            box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.2), 4px 6px 20px 4px rgba(0, 0, 0, 0.19);
        }
        
        .shadow-feature3{
            /*border:2px solid black;*/
            border-radius:5%;
        }
        .shadow-feature3:hover{
            box-shadow: 4px 4px 8px 4px rgba(255, 255, 255, 0.2), 4px 6px 20px 4px rgba(255, 255, 255, 0.19);
        }
        @media  screen and (max-width: 600px) {
  #mobile-view {
    display: none;
  }
}
*{
    font-weight:bold !important;
font-family: 'Cairo';
    
}
    </style>
</head>

<body>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header  -->
    <header id="mu-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-header-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-left">
                                    <div class="mu-top-email">
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:<?php echo e($info['phone']); ?>"><span><?php echo e($info['email']); ?></span></a>
                                    </div>
                                    <div class="mu-top-phone">
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:<?php echo e($info['phone']); ?>"><span><?php echo e($info['phone']); ?></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-right">
                                    <nav>
                                        <ul class="mu-top-social-nav">
                                            <li><a target="_blank" href="<?php echo e($info['facebook']); ?>"><span class="fa fa-facebook"></span></a></li>
                                            <li><a target="_blank" href="<?php echo e($info['twitter']); ?>"><span class="fa fa-twitter"></span></a></li>
                                            <li><a target="_blank" href="<?php echo e($info['instagram']); ?>"><span class="fa fa-instagram"></span></a></li>
                                            <li><a target="_blank" href="<?php echo e($info['linkedin']); ?>"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a target="_blank" href="<?php echo e($info['github']); ?>"><span class="fa fa-github"></span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header  -->
    <!-- Start menu -->

        <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/home"><img style="width:100px;margin-top:-5px;display:flex;" src="/public/uploads/<?php echo e($info['logo']); ?>"></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="/views/assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active" style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>"><a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/home"><?php echo e($lang == 'en' ? 'Home' : 'الرئيسية'); ?></a></li>
            <li class="dropdown" style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e($lang == 'en' ? ' Services ' : ' الخدمات '); ?><span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>"><a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/service/<?php echo e(json_decode($experience['page'])->$lang); ?>"><img src="/public/<?php echo e($experience['icon']); ?>" style="width:30px;"> <?php echo e(json_decode($experience['title'])->$lang); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </li>
            <li style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>"><a href="<?php echo e($lang == 'en' ? '/en/blogs' : '/ar/blogs'); ?>"><?php echo e($lang == 'en' ? 'Blogs' : 'المقالات'); ?></a></li>
            <li style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>"><a href="<?php echo e($lang == 'en' ? '/en/contact-us' : '/ar/contact-us'); ?>"><?php echo e($lang == 'en' ? 'Contact Us' : 'تواصل معنا'); ?></a></li>
            <?php if($lang == 'en'): ?>
                <li style="font-weight:bold;"><a href="/ar/home">عربى</a></li>
            <?php elseif($lang == 'ar'): ?>
                <li style="text-align:right;direction:rtl;font-weight:bold;"><a href="/en/home">English</a></li>
            <?php endif; ?>
            
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu -->



    <?php echo $__env->yieldContent('content'); ?>



    <!-- Start footer -->
    <footer id="mu-footer">
        <!-- start footer top -->
        
        <!-- end footer top -->
        <!-- start footer bottom -->
        <div class="mu-footer-bottom">
            <div class="container">
                <div class="mu-footer-bottom-area">
                    <p style="font-size:18px;">&copy;<?php echo e($lang == 'en' ? ' All Right Reserved. Designed & Developed by ' : ' كل الحقوق محفوظة. صمم وطور بواسطة  '); ?><a href="https://qodeex.com/<?php echo e($lang); ?>/home" target="_blank" rel="nofollow" style="color: #ff5733;"><?php echo e($lang == 'en' ? 'Qodeex for software and training' : 'كودكس للبرمجيات والتدريب'); ?></a></p>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
    </footer>
    <!-- End footer -->

    <!-- jQuery library -->
    <script src="/views/assets/js/jquery.min.js"></script>
    <script>
        $('#success').hide();
        $('#fail').hide();
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/views/assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="/views/assets/js/slick.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="/views/assets/js/waypoints.js"></script>
    <script type="text/javascript" src="/views/assets/js/jquery.counterup.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="/views/assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="/views/assets/js/jquery.fancybox.pack.js"></script>
    <!-- Custom js -->
    <script src="/views/assets/js/custom.js"></script>
    <script>
        $(document).ready(function(){
            $('#sendMail').submit(function(e){
                e.preventDefault();
                $.ajax('/sendMail', {
    dataType:'json',
    type: 'POST',  // http method
    data: $("form").serialize(),  // data to submit
    success: function (data) {
        $('#sendMail')[0].reset();
        $('#fail').hide();
        $('#success').text(data.message);
        $('#success').show();
    },
    error: function (data) {
        $('#success').hide();
        $('#fail').text(data.responseJSON[0].message);
        $('#fail').show();
    }
});
            })
        })
    </script>
</body>

</html><?php /**PATH /home/qodeex/zte.qodeex.com/views/layouts/app.blade.php ENDPATH**/ ?>