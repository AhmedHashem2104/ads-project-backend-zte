
<?php $__env->startSection('content'); ?>
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2><?php echo e(json_decode($experience['title'])->$lang); ?></h2>
           <ol class="breadcrumb">
            <li><a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/home"><?php echo e($lang == 'en' ? 'Home' : 'الرئيسية'); ?></a></li>
            <li class="active"><?php echo e(json_decode($experience['title'])->$lang); ?></li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-12">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
                          <a href="#"><img alt="img" src="/public/uploads/<?php echo e($slider['img']); ?>"></a>
                          <figcaption class="mu-blog-caption">
                            <h3><a><?php echo e(json_decode($slider['title'])->$lang); ?></a></h3>
                          </figcaption>
                        </figure>

                        <div class="mu-blog-description">
                          <?php echo e(json_decode($slider['brief'])->$lang); ?>

                        </div>
                        <!-- End blog social share -->
                      </article>
                    </div>
                  </div>
                </div>

 <!-- end course content container -->
                <!-- start blog navigation -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-blog-single-navigation">
                      <a class="mu-blog-prev" href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/home"><span class="fa fa-angle-left"></span><?php echo e($lang == 'en' ? 'Back Home' : 'عودة للرئيسية'); ?></a>
                      
                    </div>
                  </div>
                </div>
                <!-- end blog navigation -->
                <!-- start related course item -->

                <!-- end respond form -->
              </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Qodeex ZTE PHP\views/service.blade.php ENDPATH**/ ?>