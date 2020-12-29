@extends('Frontend.master')
@section('content')

<div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('{{asset('/')}}Frontend/assets/images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">We Teach, What You Want to Learn.</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">“One of the most important areas we can develop as professionals is competence in accessing and sharing knowledge.”</p>
                </div>

                <!-- Sign Up Form -->

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="#" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Sign Up</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Addresss">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Courses Add Here -->

    <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Courses</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{asset('/')}}Frontend/assets/images/img_3.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <div class="meta"><span class="icon-clock-o"></span>3 Month | 25 Classes</div>
                <h3><a href="#">Laravel 8 From Scratch</a></h3>
                <p>A web application framework with expressive & elegant syntax.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-money"></span> 8,000 BDT </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{asset('/')}}Frontend/assets/images/img_5.jpg" alt="Image" class="img-fluid"></a>
              </figure>

              <div class="course-inner-text py-4 px-4">
                <div class="meta"><span class="icon-clock-o"></span>4 Month | 30 Classes</div>
                <h3><a href="#">Graphic Design</a></h3>
                <p>Graphic design is a visual content to communicate messages.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-money"></span> 6,000 BDT </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{asset('/')}}Frontend/assets/images/img_2.jpg" alt="Image" class="img-fluid"></a>
              </figure>

              <div class="course-inner-text py-4 px-4">
                <div class="meta"><span class="icon-clock-o"></span>4 Month | 32 Classes</div>
                <h3><a href="#">Internship Program</a></h3>
                <p>It's a period of work experience offered by an organization.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-money"></span> 10,000 BDT </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{asset('/')}}Frontend/assets/images/img_4.jpg" alt="Image" class="img-fluid"></a>
              </figure>

              <div class="course-inner-text py-4 px-4">
                <div class="meta"><span class="icon-clock-o"></span>3 Month | 30 Classes</div>
                <h3><a href="#">Web Design & Development</a></h3>
                <p>Web design is the production and maintenance of websites.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-money"></span> 8,000 BDT </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{asset('/')}}Frontend/assets/images/img_6.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <div class="meta"><span class="icon-clock-o"></span>3 Month | 30 Classes</div>
                <h3><a href="#">Industrial Training</a></h3>
                <p>Open mutual benefits that helps nurture student growth.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-money"></span> 12,000 BDT </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="{{asset('/')}}Frontend/assets/images/img_1.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <div class="meta"><span class="icon-clock-o"></span>3 Month | 30 Classes</div>
                <h3><a href="#">Software Quality Assurance</a></h3>
                <p>Ensuring the functionality and usability of software products.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-money"></span> 12,000 BDT </div>
              </div>
            </div>

          </div>

         

        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Who We Are</h2>
            <p>We are KODEEO. We create useful Software and Mobile app as well as we provide custom development services. We give professional training to the student to the future growth of the industry.</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('/')}}Frontend/assets/images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">It's not only a software company. It's a learning platform.</h2>
            <p class="mb-4">We give professional training to the student to the future growth of the industry.</p>
          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('/')}}Frontend/assets/images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">From Scratch to Advance.</h2>
            <p class="mb-4">We provide training from Basic to Advanced. So, a person can easily cope up with the activities.</p>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('/')}}Frontend/assets/images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Learning is Fun</h2>
            <p class="mb-4">Fun has a positive effect on motivation levels, determining what we learn and how much we retain. Let's learn togather.</p>

          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Teachers</h2>
            
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="{{asset('/')}}Frontend/assets/images/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Benjamin Stone</h3>
                <p class="position">Full Stack Web Developer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="{{asset('/')}}Frontend/assets/images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Katleen Stone</h3>
                <p class="position">Frontend Developer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="{{asset('/')}}Frontend/assets/images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Sadie White</h3>
                <p class="position">UI/UX Designer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="{{asset('/')}}Frontend/assets/images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Jerome Jensen</h3>
            <h3 class="position">Founder & CEO</h3>
            <blockquote>
              <p>&ldquo; Our software company is mainly based on to value your thoughts and bring your requirements to a true form and also we intend with our learning platform ensuring that you have the right knowledge to show up your true worth. &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="{{asset('/')}}Frontend/assets/images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="{{asset('/')}}Frontend/assets/images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Trained 3500+ Students</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Provided 10+ University Students Industrial Training</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Ensure Professional Development</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Top Professional Training</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Best Teaching Assistance Courses</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Expert & Experienced Trainer</h3></div>
              </div>

            </div>


          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="{{asset('/')}}Frontend/assets/images/person_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    



    <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">


            <center>
            <h2 class="section-title mb-3">Contact Us</h2>

            <p><b>CALL US:</b> 01854969657, <b>OFFICE:</b> kawla Bazar, Uttara, Dhaka-1229</p>
            <p><b>EMAIL:</b> info@kodeeo.com, <b>WEB:</b> www.kodeeo.com</p>
            </center>


          
            
          </div>
        </div>
      </div>
    </div>

    @stop