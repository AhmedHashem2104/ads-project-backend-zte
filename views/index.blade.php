@extends('layouts.app')
@section('content')

  <section id="mu-slider">
    <!-- Start single slider item -->

    @foreach ($sliders as $slider)

        <div style="display:flex;align-items:center;height:500px;">

          <img src="/public/uploads/{{$slider['img']}}" style="width: 50%;height:70%;margin-right:5px;" alt="img">

      <div>
        <h2>{{json_decode($slider['title'])->$lang}}</h2>
        {{-- <p>{{$slider['brief']}}</p> --}}
        <a href="{{$lang == 'en' ? '/en' : '/ar'}}/contact-us" class="btn btn-primary" style="background-color:#ff5733;width:200px;height:50px;text-align:center;font-size:25px;border-color:white;">{{$lang == 'en' ? 'Contact Us' : 'تواصل معنا'}}</a>
      </div>
    </div>
    @endforeach
    <!-- Start single slider item -->
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            @foreach ($categories as $category)
                <div class="mu-service-single">
              <span><img src="/public/uploads/{{$category['img']}}" style="width:100px;height:100px;"></span>
              <h3 style="font-weight:bold;">{{json_decode($category['title'])->$lang}}</h3>
              <p style="font-weight:bold;">{{json_decode($category['description'])->$lang}}</p>
              <a href="{{$lang == 'en' ? '/en' : '/ar'}}/service/{{json_decode($category['page'])->$lang}}" class="btn btn-warning" style="color:#ff5733;background-color:white;border-color:white;">{{$lang == 'en' ? 'Read More' : 'قراءة المزيد'}}</a>
            </div>
            @endforeach
            <!-- Start single service -->
          </div>
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
                    <h2>{{json_decode($about['title'])->$lang}}</h2>
                  </div>
                  <!-- End Title -->
                  {!! json_decode($about['description'])->$lang !!}


                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">

                    <img src="/public/uploads/{{$about['img']}}" style="width:100%;" class="col-lg-12" alt="img">

                </div>
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


             @foreach ($statistics as $statistic)
                  <div class="col-md-4">
                <div class="mu-abtus-counter-single no-border">
                    <span class="{{$statistic['icon']}}"></span>
                  <h4 class="counter">{{$statistic['qty']}}</h4>
                  <p>{{json_decode($statistic['title'])->$lang}}</p>
                </div>
              </div>
             @endforeach


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
              <h2 style="color:black;">{{$lang == 'en' ? 'Our works' : 'أعمالنا السابقة'}}</h2>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->

            <div id="mu-latest-course-slide" class="mu-latest-courses-content">



@foreach ($features as $feature)
     <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a target="_blank" href="{{$feature['link']}}"><img src="/public/uploads/{{$feature['img']}}" alt="img"></a>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a target="_blank" href="{{$feature['link']}}">{{json_decode($feature['title'])->$lang}}</a></h4>
                    <p style="height:100px;">{{json_decode($feature['description'])->$lang}}</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details btn btn-primary" style="color:white;background-color:#ff5733 !important;border-color:white;font-size:18px;"  target="_blank" href="{{$feature['link']}}">{{$lang == 'en' ? 'Visit Website' : 'زيارة الموقع'}}</a>
                    </div>
                  </div>
                </div>
              </div>

@endforeach



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
              <h2>{{ $lang == 'en' ? 'About' : 'عنا' }}</h2>
              <h2 style="font-size:35px;">{{$lang == 'en' ? 'Get to know us' : 'تعرف علينا'}}</h2>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">

         @foreach ($abouts as $abo)
                  <div class="col-lg-4 col-md-4 col-xs-12" style="margin-bottom:10px;">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <img style="width: 100%;height:auto;" src="/public/uploads/{{$abo['img']}}" alt="img">
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4>{{json_decode($abo['title'])->$lang}}</h4>
                    <div style="height:100px;">{!! json_decode($abo['description'])->$lang !!}</div>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details btn btn-primary" style="color:white;background-color:#ff5733;border-color:#ff5733;" href="#">{{$lang == 'en' ? 'Details' : 'تفاصيل'}}</a>
                    </div>
                  </div>
                </div>
              </div>
         @endforeach

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
              <h2>{{$lang == 'en' ? 'Our Team' : 'فريق العمل'}}</h2>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                      <img src="/public/uploads/{{$team['img']}}" alt="teacher img">
                      <div class="mu-our-teacher-social">
                        <a target="_blank" href="{{$team['facebook']}}"><span class="fa fa-facebook"></span></a>
                        <a target="_blank" href="{{$team['linkedin']}}"><span class="fa fa-linkedin"></span></a>
                      </div>
                    </figure>
                    <div class="mu-ourteacher-single-content">
                      <h4>{{json_decode($team['name'])->$lang}}</h4>
                      <span>{{json_decode($team['job'])->$lang}}</span>
                    </div>
                  </div>
                </div>
                @endforeach

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
              <h2 style="color:white;">{{$lang == 'en' ? 'Our Clients' : 'عملائنا' }}</h2>
              <br>
            </div>
            <!-- End Title -->
            <div id="mu-testimonial-slide" class="mu-testimonial-content">

              @foreach ($clients as $client)
                  <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>{{$client['comment']}}</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="/public/uploads/{{$client['img']}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4><b>{{$client['name']}}</b></h4>
                  <span style="color:white;font-weight:bold;">{{$client['job']}}</span>
                </div>
              </div>
              @endforeach

              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

  <!-- Start from blog -->
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>{{$lang == 'en' ? 'Our Partners' : 'شركائنا'}}</h2>
            </div>
            <!-- end title -->
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">

                @foreach ($partners as $partner)
                     <div class="col-md-2 col-sm-2">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                     <img style="width: 100%;" src="/public/uploads/{{$partner['logo']}}" alt="img">
                    </figure>
                  </article>
                </div>
                @endforeach



              </div>
            </div>
            <!-- end from blog content   -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog -->
@endsection