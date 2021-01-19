@extends('layouts.app')
@section('content')
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area"  style="{{$lang == 'ar' ? 'text-align:right;direction:rtl;' : ''}}">
           <h2>{{$lang == 'en' ? 'Blogs' : 'مقالات'}}</h2>
           <ol class="breadcrumb">
            <li><a href="{{$lang == 'en' ? '/en' : '/ar'}}/home">{{$lang == 'en' ? 'Home' : 'الرئيسية'}}</a></li>
            <li class="active">{{$lang == 'en' ? 'Blogs' : 'مقالات'}}</li>
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
            <h2>{{$lang == 'en' ? 'Blogs' : 'مقالات'}}</h2>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top"  style="{{$lang == 'ar' ? 'direction:rtl;' : ''}}">
              <ul>
                <li class="filter active" data-filter="all">{{$lang == 'en' ? 'All' : 'الكل'}}</li>
                @foreach ($types as $type)
                  <li class="filter" data-filter="{{json_decode($type['type'])->$lang}}">{{json_decode($type['type'])->$lang}}</li>
                @endforeach
              </ul>
            </div>
            <!-- End gallery menu -->
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">
                @foreach ($blogs as $blog)
                    <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix {{json_decode($blog['type'])->$lang}}">
                  <div class="mu-single-gallery">
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a><img alt="img" src="https://dashboard.qodeex.com/uploads/{{$blog['img']}}"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4 style="{{$lang == 'ar' ? 'text-align:right;' : ''}}">{{json_decode($blog['title'])->$lang}}</h4>
                          <a href="https://dashboard.qodeex.com/uploads/{{$blog['img']}}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="{{$lang == 'en' ? '/en' : '/ar'}}/blog/{{json_decode($blog['slug'])->$lang}}" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                @endforeach
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

@endsection