@extends('layouts.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome to BengalHR</h1>
      <h2>Elevating Businesses with Exceptional HR and Precision Payroll Solutions</h2>
        <div class="position-relative">
            <img src="{{$image['homeimg1']}}" style="height: 280px; weight: 280px;" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100" class="img-fluid shadow scale-3d">
            <img src="{{$image['homeimg2']}}" style="height: 280px; weight: 280px;" alt="Hero Imgs2" data-aos="zoom-out" data-aos-delay="100" class="img-fluid shadow scale-3d">
        </div>
      
      <a href="#contact" class="btn-get-started scrollto">Get Started</a>
      {{--<div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>--}}
    </div>
  </section><!-- End Hero Section -->

  
  <main id="main">

<!-- ======= Get Started Section ======= -->
{{--<section id="get-started" class="padd-section text-center">

  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">

      <h2>simple systeme fordiscount </h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="feature-block">

          <img src="assets/img/svg/cloud.svg" alt="img">
          <h4>introducing whatsapp</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <a href="#">read more</a>

        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="feature-block">

          <img src="assets/img/svg/planet.svg" alt="img">
          <h4>user friendly interface</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <a href="#">read more</a>

        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="feature-block">

          <img src="assets/img/svg/asteroid.svg" alt="img">
          <h4>build the app everyone love</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <a href="#">read more</a>

        </div>
      </div>

    </div>
  </div>

</section>--}}<!-- End Get Started Section -->

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
            <li><p>{{$about['describtion']}}</p></li>
            @foreach($aboutcontent as $item)
            <li>
              <i class="vi bi-chevron-right"></i><b>{{$item['title']}}</b>
              <p>{{$item['describtion']}}</p>
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
      <p class="separator">Discovering Incredible New Features That Push Boundaries</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      @foreach($features as $item)
      <div class="col-md-6 col-lg-3">
        
        <div class="feature-block">
          
          <img src="{{$item['image']}}" alt="img">
          <h4>{{$item['name']}}</h4>
          <p>{{$item['feature']}}</p>
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
      <p class="separator">Explore the Software</p>
    </div>
    
   
    <div class="screens-slider swiper">
    <div class="swiper-wrapper align-items-center">
        @foreach($slider as $item)
        <div class="swiper-slide">
            <img src="{{ $item['image'] }}" class="img-fluid" style="height: auto; width: auto;" alt="" data-aos="zoom-in" data-aos-delay="100">
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>

    
  </div>

</section><!-- End Screenshots Section -->

<!-- ======= Video Section ======= -->
{{--<section id="video" class="text-center">
  <div class="overlay">
    <div class="container-fluid container-full" data-aos="zoom-in">

      <div class="row">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q&feature=emb_title" class="glightbox play-btn"></a>
      </div>

    </div>
  </div>
</section>--}}<!-- End Video Section -->

<!-- ======= Team Section ======= -->
{{--<section id="team" class="padd-section text-center">

  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">

      <h2>Developers</h2>
      <p class="separator"></p>
    </div>

    <div class="row">
    @foreach($team as $member)
      <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="team-block bottom">
          <img src="{{ $member['image'] }}" class="img-responsive" alt="img">
          <div class="team-content">
            <ul class="list-unstyled">
              <li><a href="{{ $member['facebook'] }}"><i class="bi bi-facebook"></i></a></li>
              <li><a href="{{ $member['email'] }}"><i class="bi bi-google"></i></a></li>
              <li><a href="{{ $member['linkedin'] }}"><i class="bi bi-linkedin"></i></a></li>
            </ul>
            <h4>{{ $member['member'] }}</h4>
            <span>{{ $member['role'] }}</span>
            
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>--}}<!-- End Team Section -->

<!-- ======= Testimonials Section ======= -->
{{--<section id="testimonials" class="padd-section text-center">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">

      <div class="col-md-8">

        <div class="testimonials-content">
          <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

              <div class="carousel-item  active">
                <div class="top-top">

                  <h2>Our Users Speack volumes us</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries.</p>
                  <h4>Kimberly Tran<span>manager</span></h4>

                </div>
              </div>

              <div class="carousel-item ">
                <div class="top-top">

                  <h2>Our Users Speack volumes us</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries.</p>
                  <h4>Henderson<span>manager</span></h4>

                </div>
              </div>

              <div class="carousel-item ">
                <div class="top-top">

                  <h2>Our Users Speack volumes us</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries.</p>
                  <h4>David Spark<span>manager</span></h4>

                </div>
              </div>

            </div>

            <div class="btm-btm">

              <ul class="list-unstyled carousel-indicators">
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
              </ul>

            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>--}}<!-- End Testimonials Section -->

<!-- ======= Pricing Section ======= -->
{{--<section id="pricing" class="padd-section text-cente">

  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">

      <h2>Meet With Price</h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-md-6 col-lg-3">
        <div class="block-pricing">
          <div class="pricing-table">
            <h4>basic</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="block-pricing">
          <div class="pricing-table">
            <h4>PERSONAL</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="block-pricing">
          <div class="pricing-table">
            <h4>BUSINESS</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="block-pricing">
          <div class="pricing-table">
            <h4>profeesional</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>--}}<!-- End Pricing Section -->

<!-- ======= Blog Section ======= -->
{{--<section id="blog" class="padd-sectio">

  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">

      <h2>Latest posts</h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-md-6 col-lg-4">
        <div class="block-blog text-left">
          <a href="#"><img src="assets/img/blog/blog-image-1.jpg" alt="img"></a>
          <div class="content-blog">
            <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
            <span>05, juin 2017</span>
            <a class="float-end readmore" href="#">read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="block-blog text-left">
          <a href="#"><img src="assets/img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
          <div class="content-blog">
            <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
            <span>05, juin 2017</span>
            <a class="float-end readmore" href="#">read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="block-blog text-left">
          <a href="#"><img src="assets/img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
          <div class="content-blog">
            <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
            <span>05, juin 2017</span>
            <a class="float-end readmore" href="#">read more</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>--}}<!-- End Blog Section -->

<!-- ======= Newsletter Section ======= -->
{{--<section id="newsletter" class="newsletter text-center">
  <div class="overlay padd-section">
    <div class="container" data-aos="zoom-in">

      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-6">
          <form class="d-flex" method="POST" action="#">
            <input type="email" class="form-control " placeholder="Email Adress" name="email">
            <button type="submit" class="btn btn-default"><i class="bi bi-location-arrow"></i>Subscribe</button>
          </form>
        </div>
      </div>

      <ul class="list-unstyled">
        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
      </ul>

    </div>
  </div>
</section>--}}<!-- End Newsletter Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="padd-section">

  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">
      <h2><b>Apply Here For Demo</b></h2>
      <p class="separator">Discover the perfect fit with BengalHR</p>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <i class="bi bi-geo-alt"></i>
            <p>{{ $contact['area'] }}<br>{{ $contact['city'] }}, {{ $contact['street'] }}, {{ $contact['house'] }}</p>
          </div>
          
          <div>
            <i class="bi bi-globe"></i>
            <p><a href="https://bengalsoftware.com/">{{ $contact['website'] }}</a></p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <p><a href="mailto:{{$contact['email']}}">{{$contact['email']}}</a></p>
          </div>

          <div>
            <i class="bi bi-phone"></i>
            <p>{{$contact['phone']}}</p>
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
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="company" id="companyname" placeholder="Your Company Name">
            </div>
            <div class="form-group mt-3">
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Contact">
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="address" id="address" placeholder="Your Address">
            </div>
            
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            </div>
            
            <div class="text-center"><button type="submit">Submit</button></div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->



@endsection

