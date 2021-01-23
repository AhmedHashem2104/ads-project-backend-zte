
<?php $__env->startSection('content'); ?>

<section id="mu-slider">
  <!-- Start single slider item -->


  <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="slido" style="width:100%;<?php echo e($lang == 'ar' ? 'flex-direction: row-reverse;' : ''); ?>">


      <div class="slido" style="background-image: url('https://dashboard.qodeex.com/editor/imgs/sliders/<?php echo e($slider['image']); ?>');
height:700px;
   width: 100%;background-repeat:no-repeat;background-size:100% 100%;"></div>

    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <!-- Start single slider item -->
</section>
<!-- End Slider -->
<!-- Start service  -->
<section>
  <div class="container">
    <div class="row" style="margin-bottom:20px;">

      <div class="mu-title" style="margin-top:40px;margin-bottom:40px;">
            <h2><?php echo e($lang == 'en' ? 'Services' : 'خدمات'); ?></h2>
          </div>
        <!-- Start single service -->
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 shadow-feature2" style="margin-top:5px;margin-bottom:5px;<?php echo e($lang == 'ar' ? 'float:right;' : ''); ?>">
          <img src="https://dashboard.qodeex.com/editor/imgs/services/<?php echo e($service['image']); ?>" style="width:100%;height:100%;">
          <h4 style="font-weight:bold;height:40px;<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;' : ''); ?>"><?php echo e($service['service_name_'.$lang]); ?></h4>
          <?php echo $service['short_desc_'.$lang]; ?>

          <a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/service/<?php echo e($service['service_id']); ?>" class="btn btn-success" style="color:#ff5733;background-color:white;border-color:orange;margin-bottom:10px;border-radius:20px;"><?php echo e($lang == 'en' ? 'Read More' : 'قراءة المزيد'); ?></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Start single service -->
    </div>
  </div>
</section>
<!-- End service  -->

<!-- Start about us -->

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
                <img src="https://dashboard.qodeex.com/editor/imgs/statistics/<?php echo e($statistic['icon']); ?>" style="width:55px;height:55px;">
                <h4 class="counter"><?php echo e($statistic['qty']); ?></h4>
                <p><?php echo e($statistic['statistic_name_'.$lang]); ?></p>
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

            <?php $__currentLoopData = $ours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $our): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-4 col-xs-12" style="margin-bottom:10px;<?php echo e($lang == 'ar' ? 'float:right;' : ''); ?>">
              <div class="mu-latest-course-single shadow-feature3" style="border-radius:5%;">

                <img style="width:100%;border-radius:5% 5% 0% 0%;" src="https://dashboard.qodeex.com/editor/imgs/ours/<?php echo e($our['image']); ?>" alt="img">

                <div class="mu-latest-course-single-content" style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>">
                  <h4 style="font-weight:bold;"><?php echo e($our['our_name_'.$lang]); ?></h4>
                  <div><?php echo $our['short_desc_'.$lang]; ?></div>
                  <div class="mu-latest-course-single-contbottom">
                  <a class="mu-course-details btn btn-primary" style="color:white;background-color:#ff5733;border-color:#ff5733;" href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/our/<?php echo e($our['our_id']); ?>"><?php echo e($lang == 'en' ? 'Details' : 'تفاصيل'); ?></a>
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
                    <img src="https://dashboard.qodeex.com/editor/imgs/teamworks/<?php echo e($team['image']); ?>" alt="teacher img">
                    
                  </figure>
                  <div class="mu-ourteacher-single-content" style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>">
                    <h4 style="font-weight:bold;"><?php echo e($team['emp_name_'.$lang]); ?></h4>
                    <h5><?php echo e($team['long_desc_'.$lang]); ?></h5>
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
                  <a href="<?php echo e($client['password']); ?>" target="_blank">
                    <p><?php echo e($client['password']); ?></p>
                  </a>
                </blockquote>
              </div>
              <div class="mu-testimonial-img">
                <img src="https://dashboard.qodeex.com/editor/imgs/clients/<?php echo e($client['logo']); ?>" alt="img">
              </div>
              <div class="mu-testimonial-info">
                <h4><b><?php echo e($client['client_name_'.$lang]); ?></b></h4>
                <span style="color:white;font-weight:bold;"><?php echo e($lang == 'en' ? $client['sector'] : $client['username']); ?></span>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Qodeex-ZTE-PHP-Like-AlGawhar\views/index.blade.php ENDPATH**/ ?>