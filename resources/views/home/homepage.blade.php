@extends('layouts.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome to BengalHR</h1>
      <h2 style="font-family: Encode Sans, Sans-serif;">Elevating Businesses with Exceptional HR and Precision Payroll Solutions</h2>
        <div class="position-relative">
            <img src="{{$image['homeimg1']}}" style="height: 280px; weight: 280px;" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100" class="img-fluid shadow scale-3d">
            <img src="{{$image['homeimg2']}}" style="height: 280px; weight: 280px;" alt="Hero Imgs2" data-aos="zoom-out" data-aos-delay="100" class="img-fluid shadow scale-3d">
        </div>
      
      <a href="#contact" class="btn-get-started scrollto">Get Started</a>
      
    </div>
  </section><!-- End Hero Section -->

  
  <main id="main">



<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us padd-section">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">

      <div class="col-md-5 col-lg-5">
        <img src="https://img.freepik.com/free-vector/about-us-concept-illustration_114360-639.jpg" style="height: 800px; weight: 800px;" alt="About" data-aos="zoom-in" data-aos-delay="100">
      </div>

      <div class="col-md-7 col-lg-5">
        <div class="about-content" data-aos="fade-left" data-aos-delay="100">

          <h2><b>{{$about['title']}}</b></h2>
          <p></p>

          <ul class="list-unstyled">
            <li><p style="font-family: Encode Sans, Sans-serif;">{{$about['describtion']}}</p></li>
            @foreach($aboutcontent as $item)
            <li>
              <i class="vi bi-chevron-right"></i><b style="font-family: Encode Sans, Sans-serif; font-size:16px">{{$item['title']}}</b>
              <p style="font-family: Encode Sans, Sans-serif;">{{$item['describtion']}}</p>
            </li>
            @endforeach
          </ul>

        </div>
      </div>

    </div>
  </div>
</section><!-- End About Us Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="padd-section text-center">

  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">
      <h2><b>Amazing Features.</b></h2>
      <p class="separator" style="font-family: Encode Sans, Sans-serif;" >Discovering Incredible New Features That Push Boundaries</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      @foreach($features as $item)
      <div class="col-md-6 col-lg-3">
        
        <div class="feature-block">
          
          <img src="{{$item['image']}}" alt="img">
          <h4>{{$item['name']}}</h4>
          <p style="font-family: Encode Sans, Sans-serif;">{{$item['feature']}}</p>
        </div>
       
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Features Section -->

<!-- ======= Screenshots Section ======= -->
<section id="screenshots" class="padd-section text-center">

  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">
      <h2><b>Software Gallery</b></h2>
      <p class="separator" style="font-family: Encode Sans, Sans-serif;">Explore the Software</p>
    </div>
    
   
    <div class="screens-slider swiper">
    <div class="swiper-wrapper align-items-center">
        @foreach($slider as $item)
        <div class="swiper-slide">
            <img src="{{ $item['image'] }}" class="img-fluid" style="height: auto; width: auto;" alt="" data-aos="zoom-in" data-aos-delay="100">
        </div>
        @endforeach
    </div>
    {{--<div class="swiper-pagination"></div>--}}
</div>

    
  </div>

</section><!-- End Screenshots Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="padd-section">

  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">
      <h2><b>Apply Here For Demo</b></h2>
      <p class="separator" style="font-family: Encode Sans, Sans-serif;">Discover the perfect fit with BengalHR</p>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <i class="bi bi-geo-alt"></i>
            <p style="font-family: Encode Sans, Sans-serif;">{{ $contact['area'] }}<br>{{ $contact['city'] }}, {{ $contact['street'] }}, {{ $contact['house'] }}</p>
          </div>
          
          <div>
            <i class="bi bi-globe"></i>
            <p style="font-family: Encode Sans, Sans-serif;"><a href="https://bengalsoftware.com/">{{ $contact['website'] }}</a></p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <p style="font-family: Encode Sans, Sans-serif;"><a href="mailto:{{$contact['email']}}">{{$contact['email']}}</a></p>
          </div>

          <div>
            <i class="bi bi-phone"></i>
            <p style="font-family: Encode Sans, Sans-serif;">{{$contact['phone']}}</p>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/bengalsoft" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/company/bengalsoftware/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <form action="{{route('form.submit')}}" method="POST" class="form">
          @csrf
            <div class="form-group">
              <input type="text" style="background-color:#f5f0ff; font-family: Encode Sans, Sans-serif;" name="name" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="form-group mt-3">
              <input type="email" style="background-color:#f5f0ff; font-family: Encode Sans, Sans-serif;" class="form-control" name="email" id="email" placeholder="Your Email">
            </div>
            <div class="form-group mt-3">
              <input type="text" style="background-color:#f5f0ff; font-family: Encode Sans, Sans-serif;" class="form-control" name="company" id="companyname" placeholder="Your Company Name">
            </div>
            <div class="form-group mt-3">
              <input type="number" style="background-color:#f5f0ff; font-family: Encode Sans, Sans-serif;" class="form-control" name="phone" id="phone" placeholder="Your Contact">
            </div>
            <div class="form-group mt-3">
              <input type="text" style="background-color:#f5f0ff; font-family: Encode Sans, Sans-serif;" class="form-control" name="address" id="address" placeholder="Your Address">
            </div>
            
            <div class="form-group mt-3">
              <textarea class="form-control" style="background-color:#f5f0ff; font-family: Encode Sans, Sans-serif;" name="message" rows="5" placeholder="Message"></textarea>
            </div>
            
            <div class="text-center mt-2"><button type="submit">Submit</button></div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->



@endsection

