@extends('frontend.layout')

@section('content')

@section('page-intro')
    
@show
    
  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url({{asset('/storage/image/'.$intro[0]->image)}})">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
        <h1 class="intro-title mb-4">{{$intro[0]->intro_title}}</h1>
          <p class="intro-subtitle"><span class="text-slider-items">{{$intro[0]->intro_subtitle}}</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                      <img src="{{asset('/storage/image/'.$about[0]->image)}}" class="img-fluid rounded b-shadow-a" alt="User Image">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>{{$about[0]->name}}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{$about[0]->profile}}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{$about[0]->email}}</span></p>
                        <p><span class="title-s">Phone: </span> <span>{{$about[0]->phone}}</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    @foreach ($skill as $item)
                  <span>{{$item->title}}</span> <span class="pull-right">{{$item->progress.'%'}}</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: {{$item->progress.'%'}}" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endforeach
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    {!! $about[0]->about_detail !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="fa fa-television" aria-hidden="true"></i></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-camera"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Photography</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-paintbrush"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">450</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">15</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">550</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">36</p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Lorem impsum dolor</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-2.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Loreda Cuno Nere</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-3.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Mavrito Lana Dere</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-4.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-4.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Bindo Laro Cado</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-5.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-5.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Studio Lena Mado</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-6.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-6.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Studio Big Bang</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Xavi Alonso</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Marta Socrate</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Travel</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                        expedita aperiam aliquid at.
                        Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                        mollitia inventore?
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                        <li><span class="ion-ios-telephone"></span> (617) 557-0089</li>
                        <li><span class="ion-email"></span> contact@example.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

@endsection
