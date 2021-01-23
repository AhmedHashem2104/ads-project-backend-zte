
<?php $__env->startSection('content'); ?>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2><?php echo e($lang == 'en' ? 'Contact' : 'تواصل معنا'); ?></h2>
           <ol class="breadcrumb" style="<?php echo e($lang == 'ar' ? 'direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>">
            <li><a href="<?php echo e($lang == 'en' ? '/en/home' : '/ar/home'); ?>"><?php echo e($lang == 'en' ? 'Home' : 'الرئيسية'); ?></a></li>
            <li class="active"><?php echo e($lang == 'en' ? 'Contact' : 'تواصل معنا'); ?></li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2><?php echo e($lang == 'en' ? 'Get in Touch' : 'ابقى على تواصل'); ?></h2>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form class="contactform" id="sendMail" style="<?php echo e($lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'); ?>">
                    <p class="comment-form-author">
                      <label for="author"><?php echo e($lang == 'en' ? 'Name' : 'الاسم بالكامل'); ?> <span class="required">*</span></label>
                      <input type="text" required="required" name="name">
                    </p>
                    <p class="comment-form-email">
                      <label for="email"><?php echo e($lang == 'en' ? 'Email' : 'البريد الإلكترونى'); ?> <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" name="email">
                    </p>
                    <p class="comment-form-url">
                      <label for="phone"><?php echo e($lang == 'en' ? 'Phone' : 'رقم الهاتف'); ?> <span class="required">*</span></label>
                      <input type="text" required="required" name="phone">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject"><?php echo e($lang == 'en' ? 'Subject' : 'عنوان الموضوع'); ?> <span class="required">*</span></label>
                      <input type="text" required="required" name="subject">
                    </p>
                    <p class="comment-form-comment">
                      <label for="message"><?php echo e($lang == 'en' ? 'Message' : 'اترك رسالتك'); ?> <span class="required">*</span></label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="message"></textarea>
                    </p>
                    <p class="form-submit">
                      <input type="submit" value="<?php echo e($lang == 'en' ? 'Send Message' : 'أرسل رسالة'); ?>" class="mu-post-btn" name="submit">
                    </p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                        <iframe src="<?php echo $info['location']; ?>" style="width:100%;border-style:none;"></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
      <div id="success" class="alert alert-success"></div>
      <div id="fail" class="alert alert-danger"></div>
   </div>
 </section>
 <!-- End contact  -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Qodeex-ZTE-PHP-Like-AlGawhar\views/contact.blade.php ENDPATH**/ ?>