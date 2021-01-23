<?php $__env->startSection('content'); ?>

  <section id="mu-slider">
    <!-- Start single slider item -->


    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
    <div id="slido" style="max-height:650px;width:100%;display:flex;align-items: center;<?php echo e($lang == 'ar' ? 'flex-direction: row-reverse;' : ''); ?>;">
        

          <img src="https://dashboard.qodeex.com/uploads/<?php echo e($slider['img']); ?>" style="width:100%;height:100%;" alt="img">
<!--            <div class="col-lg-6 text-center" id="mobile-view">-->
<!--<h2 style="<?php echo e($lang == 'ar' ? 'text-align:right !important;direction:rtl;' : 'text-align:left !important;'); ?>"><?php echo e(json_decode($slider['title'])->$lang); ?></h2>-->
        <!---->
<!--        <a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/contact-us" class="btn btn-primary" style="background-color:#ff5733;width:200px;height:50px;text-align:center;font-size:25px;border-color:white;"><?php echo e($lang == 'en' ? 'Contact Us' : 'تواصل معنا'); ?></a>-->
    
<!--    </div>-->
        </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Start single slider item -->
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section style="display: inline;
  float: left;
  width: 100%;
  padding: 50px 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

            <!-- Start single service -->
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 shadow-feature2" style="text-align:center;padding-top:5px;">
              <span><img src="https://dashboard.qodeex.com/uploads/<?php echo e($category['img']); ?>" style="width:100px;height:100px;"></span>
              <h4 style="font-weight:bold;"><?php echo e(json_decode($category['title'])->$lang); ?></h4>
              <div style="height:100px;"><?php echo json_decode($category['description'])->$lang; ?></div>
              <a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/service/<?php echo e(json_decode($category['page'])->$lang); ?>" class="btn btn-success" style="color:#ff5733;background-color:white;border-color:orange;margin-bottom:10px;border-radius:20px;"><?php echo e($lang == 'en' ? 'Read More' : 'قراءة المزيد'); ?></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- Start single service -->
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2 style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;' : ''); ?>"><?php echo e(json_decode($about['title'])->$lang); ?></h2>
                  </div>
                  <!-- End Title -->
                  <?php echo json_decode($about['description'])->$lang; ?>



                </div>
              </div>
              <div class="col-lg-6 col-md-6">

                    <img src="https://dashboard.qodeex.com/uploads/<?php echo e($about['img']); ?>" style="width:100%;" class="col-lg-12" alt="img">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">


             <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-4">
                <div class="mu-abtus-counter-single no-border">
                    <span class="<?php echo e($statistic['icon']); ?>"></span>
                  <h4 class="counter"><?php echo e($statistic['qty']); ?></h4>
                  <p><?php echo e(json_decode($statistic['title'])->$lang); ?></p>
                </div>
              </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start features section -->
 <!-- Start latest course section -->
  <section id="mu-latest-courses" style="background-color:white;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2 style="color:black;"><?php echo e($lang == 'en' ? 'Our works' : 'أعمالنا السابقة'); ?></h2>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->

            <div id="mu-latest-course-slide" class="mu-latest-courses-content">



<?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="col-lg-6 col-md-6 col-xs-12 shadow-feature">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a target="_blank" href="<?php echo e($feature['link']); ?>"><img src="https://dashboard.qodeex.com/uploads/<?php echo e($feature['img']); ?>" alt="img"></a>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4 style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>"><a target="_blank" href="<?php echo e($feature['link']); ?>"><?php echo e(json_decode($feature['title'])->$lang); ?></a></h4>
                    <div style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;height:130px;' : 'font-weight:bold;height:130px;'); ?>"><?php echo json_decode($feature['description'])->$lang; ?>

                    </div>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details btn btn-primary" style="color:white;background-color:#ff5733 !important;border-color:white;font-size:18px;"  target="_blank" href="<?php echo e($feature['link']); ?>"><?php echo e($lang == 'en' ? 'Visit Website' : 'زيارة الموقع'); ?></a>
                    </div>
                  </div>
                </div>
              </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->

  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2><?php echo e($lang == 'en' ? 'About' : 'عنا'); ?></h2>
              <h2 style="font-size:35px;"><?php echo e($lang == 'en' ? 'Get to know us' : 'تعرف علينا'); ?></h2>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">

         <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $abo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-lg-4 col-md-4 col-xs-12" style="margin-bottom:10px;">
                <div class="mu-latest-course-single shadow-feature3" style="border-radius:5%;">
                  
                    <img style="width:100%;height:100%;border-radius:5% 5% 0% 0%;" src="https://dashboard.qodeex.com/uploads/<?php echo e($abo['img']); ?>" alt="img">
                 
                  <div class="mu-latest-course-single-content" style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>">
                    <h4 style="font-weight:bold;"><?php echo e(json_decode($abo['title'])->$lang); ?></h4>
                    <div><?php echo json_decode($abo['description'])->$lang; ?></div>
                    <!--<div class="mu-latest-course-single-contbottom">-->
                    <!--  <a class="mu-course-details btn btn-primary" style="color:white;background-color:#ff5733;border-color:#ff5733;" href="#"><?php echo e($lang == 'en' ? 'Details' : 'تفاصيل'); ?></a>-->
                    <!--</div>-->
                  </div>
                </div>
              </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->

  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2><?php echo e($lang == 'en' ? 'Our Team' : 'فريق العمل'); ?></h2>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-3  col-sm-6" style="<?php echo e($lang == 'ar' ? 'float:right;' : ''); ?>">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="https://dashboard.qodeex.com/uploads/<?php echo e($team['img']); ?>" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a target="_blank" href="<?php echo e($team['facebook']); ?>"><span class="fa fa-facebook"></span></a>
                        <a target="_blank" href="<?php echo e($team['linkedin']); ?>"><span class="fa fa-linkedin"></span></a>
                      </div>
                    </figure>
                    <div class="mu-ourteacher-single-content" style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>">
                      <h4 style="font-weight:bold;"><?php echo e(json_decode($team['name'])->$lang); ?></h4>
                      <span><?php echo json_decode($team['job'])->$lang; ?></span>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
            </div>
            <!-- End our teacher content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End our teacher -->

  <!-- Start testimonial -->
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2 style="color:white;"><?php echo e($lang == 'en' ? 'Our Clients' : 'عملائنا'); ?></h2>
              <br>
            </div>
            <!-- End Title -->
            <div id="mu-testimonial-slide" class="mu-testimonial-content">

              <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <a href="<?php echo e($client['link']); ?>" target="_blank"><p><?php echo e($client['link']); ?></p></a>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="https://dashboard.qodeex.com/uploads/<?php echo e($client['img']); ?>" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4><b><?php echo e(json_decode($client['name'])->$lang); ?></b></h4>
                  <span style="color:white;font-weight:bold;"><?php echo e(json_decode($client['job'])->$lang); ?></span>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

  <!-- Start latest course section -->
  <section id="mu-latest-courses" style="background-color:white;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2 style="color:black;"><?php echo e($lang == 'en' ? 'Our Partners' : 'شركائنا'); ?></h2>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->

            <div id="mu-latest-course-slide" class="mu-latest-courses-content">



<?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="col-lg-6 col-md-6 col-xs-12 shadow-feature" style="width:200px;">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a target="_blank" href="<?php echo e($partner['link']); ?>"><img src="https://dashboard.qodeex.com/uploads/<?php echo e($partner['logo']); ?>" alt="img"></a>
                  </figure>
                </div>
              </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qodeex/zte.qodeex.com/views/index.blade.php ENDPATH**/ ?>