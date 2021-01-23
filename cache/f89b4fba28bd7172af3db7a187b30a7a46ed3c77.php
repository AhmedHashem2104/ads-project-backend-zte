<?php $__env->startSection('content'); ?>
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area"  style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;' : ''); ?>">
           <h2><?php echo e($lang == 'en' ? 'Blog' : 'مقالة'); ?></h2>
           <ol class="breadcrumb">
            <li><a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/home"><?php echo e($lang == 'en' ? 'Home' : 'الرئيسية'); ?></a></li>
            <li class="active"><?php echo e($lang == 'en' ? 'Blog' : 'مقالة'); ?></li>
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
                          <a style="display:flex;justify-content:center;align-items:center;"><img style="width:80%;margin:auto;" alt="img" src="https://dashboard.qodeex.com/uploads/<?php echo e($blog['img']); ?>"></a>
                          
                            <h3 style="<?php echo e($lang == 'ar' ? 'direction:rtl;text-align:right;' : ''); ?>"><a><?php echo e(json_decode($blog['title'])->$lang); ?></a></h3>
                          
                        </figure>

                        <div class="mu-blog-description" style="<?php echo e($lang == 'ar' ? 'direction:rtl;text-align:right;' : ''); ?>">
                          <?php echo json_decode($blog['description'])->$lang; ?>

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
                      <a class="mu-blog-next" href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/blogs"><?php echo e($lang == 'en' ? 'Blogs' : 'مقالات'); ?><span class="fa fa-angle-right"></span></a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qodeex/zte.qodeex.com/views/blogOne.blade.php ENDPATH**/ ?>