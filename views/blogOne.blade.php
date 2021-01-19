@extends('layouts.app')
@section('content')
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area"  style="{{$lang == 'ar' ? 'text-align:right;direction:rtl;' : ''}}">
           <h2>{{$lang == 'en' ? 'Blog' : 'مقالة'}}</h2>
           <ol class="breadcrumb">
            <li><a href="{{$lang == 'en' ? '/en' : '/ar'}}/home">{{$lang == 'en' ? 'Home' : 'الرئيسية'}}</a></li>
            <li class="active">{{$lang == 'en' ? 'Blog' : 'مقالة'}}</li>
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
                          <a href="#"><img alt="img" src="https://dashboard.qodeex.com/uploads/{{$blog['img']}}"></a>
                          
                            <h3 style="{{$lang == 'ar' ? 'direction:rtl;text-align:right;' : ''}}"><a>{{json_decode($blog['title'])->$lang}}</a></h3>
                          
                        </figure>

                        <div class="mu-blog-description" style="{{$lang == 'ar' ? 'direction:rtl;text-align:right;' : ''}}">
                          {!!json_decode($blog['description'])->$lang!!}
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
                      <a class="mu-blog-prev" href="{{$lang == 'en' ? '/en' : '/ar'}}/home"><span class="fa fa-angle-left"></span>{{$lang == 'en' ? 'Back Home' : 'عودة للرئيسية'}}</a>
                      <a class="mu-blog-next" href="{{$lang == 'en' ? '/en' : '/ar'}}/blogs">{{$lang == 'en' ? 'Blogs' : 'مقالات' }}<span class="fa fa-angle-right"></span></a>
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
@endsection
