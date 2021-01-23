@extends('layouts.app')
@section('content')

<section id="mu-slider">
  <!-- Start single slider item -->


  @foreach ($sliders as $slider)
    <div class="slido" style="width:100%;{{$lang == 'ar' ? 'flex-direction: row-reverse;' : ''}}">


      <div class="slido" style="background-image: url('https://dashboard.qodeex.com/editor/imgs/sliders/{{$slider['image']}}');
height:700px;
   width: 100%;background-repeat:no-repeat;background-size:100% 100%;"></div>

    </div>
  @endforeach

  <!-- Start single slider item -->
</section>
<!-- End Slider -->
<!-- Start service  -->
<section>
  <div class="container">
    <div class="row" style="margin-bottom:20px;">

      <div class="mu-title" style="margin-top:40px;margin-bottom:40px;">
            <h2>{{ $lang == 'en' ? 'Services' : 'خدمات' }}</h2>
          </div>
        <!-- Start single service -->
        @foreach ($services as $service)
        <div class="col-lg-4 shadow-feature2" style="margin-top:5px;margin-bottom:5px;{{$lang == 'ar' ? 'float:right;' : ''}}">
          <img src="https://dashboard.qodeex.com/editor/imgs/services/{{$service['image']}}" style="width:100%;height:100%;">
          <h4 style="font-weight:bold;height:40px;{{$lang == 'ar' ? 'text-align:right;direction:rtl;' : ''}}">{{$service['service_name_'.$lang]}}</h4>
          {!!$service['short_desc_'.$lang]!!}
          <a href="{{$lang == 'en' ? '/en' : '/ar'}}/service/{{$service['service_id']}}" class="btn btn-success" style="color:#ff5733;background-color:white;border-color:orange;margin-bottom:10px;border-radius:20px;">{{$lang == 'en' ? 'Read More' : 'قراءة المزيد'}}</a>
        </div>
        @endforeach
        <!-- Start single service -->
    </div>
  </div>
</section>
<!-- End service  -->

<!-- Start about us -->
{{-- <section id="mu-about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-about-us-area">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="mu-about-us-left">
                <!-- Start Title -->
                <div class="mu-title">
                  <h2 style="{{$lang == 'ar' ? 'text-align:right;direction:rtl;' : ''}}">{{$about['our_name_'.$lang]}}</h2>
                </div>
                <!-- End Title -->
                {!! $about['long_desc_'.$lang] !!}

              </div>
            </div>
            <div class="col-lg-6 col-md-6">

              <img src="https://dashboard.qodeex.com/editor/imgs/ours/{{$about['image']}}" style="width:100%;" class="col-lg-12" alt="img">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
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
                <img src="https://dashboard.qodeex.com/editor/imgs/statistics/{{$statistic['icon']}}" style="width:55px;height:55px;">
                <h4 class="counter">{{$statistic['qty']}}</h4>
                <p>{{$statistic['statistic_name_'.$lang]}}</p>
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

            @foreach ($ours as $our)
            <div class="col-lg-4 col-md-4 col-xs-12" style="margin-bottom:10px;{{$lang == 'ar' ? 'float:right;' : ''}}">
              <div class="mu-latest-course-single shadow-feature3" style="border-radius:5%;">

                <img style="width:100%;border-radius:5% 5% 0% 0%;" src="https://dashboard.qodeex.com/editor/imgs/ours/{{$our['image']}}" alt="img">

                <div class="mu-latest-course-single-content" style="{{$lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'}}">
                  <h4 style="font-weight:bold;">{{$our['our_name_'.$lang]}}</h4>
                  <div>{!! $our['short_desc_'.$lang] !!}</div>
                  <div class="mu-latest-course-single-contbottom">
                  <a class="mu-course-details btn btn-primary" style="color:white;background-color:#ff5733;border-color:#ff5733;" href="{{$lang == 'en' ? '/en' : '/ar'}}/our/{{$our['our_id']}}">{{$lang == 'en' ? 'Details' : 'تفاصيل'}}</a>
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
              <div class="col-lg-3 col-md-3  col-sm-6" style="{{$lang == 'ar' ? 'float:right;' : ''}}">
                <div class="mu-our-teacher-single">
                  <figure class="mu-our-teacher-img">
                    <img src="https://dashboard.qodeex.com/editor/imgs/teamworks/{{$team['image']}}" alt="teacher img">
                    {{-- <div class="mu-our-teacher-social">
                      <a target="_blank" href="{{$team['facebook']}}"><span class="fa fa-facebook"></span></a>
                      <a target="_blank" href="{{$team['linkedin']}}"><span class="fa fa-linkedin"></span></a>
                    </div> --}}
                  </figure>
                  <div class="mu-ourteacher-single-content" style="{{$lang == 'ar' ? 'text-align:right;direction:rtl;font-weight:bold;' : 'font-weight:bold;'}}">
                    <h4 style="font-weight:bold;">{{$team['emp_name_'.$lang]}}</h4>
                    <h5>{{$team['long_desc_'.$lang]}}</h5>
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
                  <a href="{{$client['password']}}" target="_blank">
                    <p>{{$client['password']}}</p>
                  </a>
                </blockquote>
              </div>
              <div class="mu-testimonial-img">
                <img src="https://dashboard.qodeex.com/editor/imgs/clients/{{$client['logo']}}" alt="img">
              </div>
              <div class="mu-testimonial-info">
                <h4><b>{{$client['client_name_'.$lang]}}</b></h4>
                <span style="color:white;font-weight:bold;">{{$lang == 'en' ? $client['sector'] : $client['username']}}</span>
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

@endsection