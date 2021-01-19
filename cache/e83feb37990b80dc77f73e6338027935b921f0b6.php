<?php $__env->startSection('content'); ?>
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area"  style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;' : ''); ?>">
           <h2><?php echo e($lang == 'en' ? 'Blogs' : 'مقالات'); ?></h2>
           <ol class="breadcrumb">
            <li><a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/home"><?php echo e($lang == 'en' ? 'Home' : 'الرئيسية'); ?></a></li>
            <li class="active"><?php echo e($lang == 'en' ? 'Blogs' : 'مقالات'); ?></li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <!-- Start gallery  -->
 <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
          <!-- start title -->
          <div class="mu-title">
            <h2><?php echo e($lang == 'en' ? 'Blogs' : 'مقالات'); ?></h2>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"  style="<?php echo e($lang == 'ar' ? 'direction:rtl;' : ''); ?>">
              <ul>
                <li class="filter active" data-filter="all"><?php echo e($lang == 'en' ? 'All' : 'الكل'); ?></li>
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="filter" data-filter="<?php echo e(json_decode($type['type'])->$lang); ?>"><?php echo e(json_decode($type['type'])->$lang); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
            <!-- End gallery menu -->
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix <?php echo e(json_decode($blog['type'])->$lang); ?>">
                  <div class="mu-single-gallery">
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a><img alt="img" src="https://dashboard.qodeex.com/uploads/<?php echo e($blog['img']); ?>"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4 style="<?php echo e($lang == 'ar' ? 'text-align:right;' : ''); ?>"><?php echo e(json_decode($blog['title'])->$lang); ?></h4>
                          <a href="https://dashboard.qodeex.com/uploads/<?php echo e($blog['img']); ?>" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="<?php echo e($lang == 'en' ? '/en' : '/ar'); ?>/blog/<?php echo e(json_decode($blog['slug'])->$lang); ?>" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
          <!-- end gallery content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End gallery  -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qodeex/zte.qodeex.com/views/blogs.blade.php ENDPATH**/ ?>