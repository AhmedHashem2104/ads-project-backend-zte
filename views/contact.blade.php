@extends('layouts.app')
@section('content')
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>{{$lang == 'en' ? 'Contact' : 'تواصل معنا'}}</h2>
           <ol class="breadcrumb">
            <li><a href="{{$lang == 'en' ? '/en/home' : '/ar/home'}}">{{$lang == 'en' ? 'Home' : 'الرئيسية'}}</a></li>
            <li class="active">{{$lang == 'en' ? 'Contact' : 'تواصل معنا'}}</li>
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
            <h2>{{$lang == 'en' ? 'Get in Touch' : 'ابقى على تواصل'}}</h2>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form class="contactform" id="sendMail">
                    <p class="comment-form-author">
                      <label for="author">{{$lang == 'en' ? 'Name' : 'الاسم بالكامل'}} <span class="required">*</span></label>
                      <input type="text" required="required" name="name">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">{{$lang == 'en' ? 'Email' : 'البريد الإلكترونى'}} <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" name="email">
                    </p>
                    <p class="comment-form-url">
                      <label for="phone">{{$lang == 'en' ? 'Phone' : 'رقم الهاتف'}} <span class="required">*</span></label>
                      <input type="text" required="required" name="phone">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">{{$lang == 'en' ? 'Subject' : 'عنوان الموضوع'}} <span class="required">*</span></label>
                      <input type="text" required="required" name="subject">
                    </p>
                    <p class="comment-form-comment">
                      <label for="message">{{$lang == 'en' ? 'Message' : 'اترك رسالتك'}} <span class="required">*</span></label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="message"></textarea>
                    </p>
                    <p class="form-submit">
                      <input type="submit" value="{{$lang == 'en' ? 'Send Message' : 'أرسل رسالة'}}" class="mu-post-btn" name="submit">
                    </p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                        {!! $info['map'] !!}
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
 @endsection