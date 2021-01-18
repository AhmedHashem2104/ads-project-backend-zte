@extends('layouts.app')
@section('content')
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>{{$lang == 'en' ? 'Blog' : 'مقالة'}}</h2>
           <ol class="breadcrumb">
            <li><a href="/home">{{$lang == 'en' ? 'Home' : 'الرئيسية'}}</a></li>
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
                          <figcaption class="mu-blog-caption">
                            <h3><a>{{json_decode($blog['title'])->$lang}}</a></h3>
                          </figcaption>
                        </figure>

                        <div class="mu-blog-description">
                          {{json_decode($blog['description'])->$lang}}
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
