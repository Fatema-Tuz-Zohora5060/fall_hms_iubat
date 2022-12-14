@extends('frontend.master')
@section('content')

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{route('user.login')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Enter your email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary rounded-2 py-3 px-lg-2 d-none d-lg-block">Submit</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<!--registration Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{route('frontend.registration')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="enter your name">
          </div>


          <label for="exampleInputEmail1">Enter your email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






<!-- Header Start -->
<div class="container-fluid header bg-primary p-0 mb-5">
  <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
    <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
      <h1 class="display-4 text-white mb-5">Good Health Is The Root Of All Heppiness</h1>
      <div class="row g-4">
        <div class="col-sm-4">
          <div class="border-start border-light ps-4">
            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
            <p class="text-light mb-0">Expert Doctors</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="border-start border-light ps-4">
            <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
            <p class="text-light mb-0">Medical Stuff</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="border-start border-light ps-4">
            <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
            <p class="text-light mb-0">Total Patients</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
      <div class="owl-carousel header-carousel">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{url('/frontend/img/carousel-1.jpg')}}" alt="">
          <div class="owl-carousel-text">
            <h1 class="display-1 text-white mb-0">Cardiology</h1>
          </div>
        </div>
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{url('/frontend/img/carousel-2.jpg')}}" alt="">
          <div class="owl-carousel-text">
            <h1 class="display-1 text-white mb-0">Neurology</h1>
          </div>
        </div>
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{url('/frontend/img/carousel-3.jpg')}}" alt="">
          <div class="owl-carousel-text">
            <h1 class="display-1 text-white mb-0">Pulmonary</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Header End -->


<!-- About Start -->

<!-- About End -->


<!-- Service Start -->

<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
  <div class="container feature px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="p-lg-5 ps-lg-0">
          <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
          <h1 class="text-white mb-4">Why Choose Us</h1>
          <p class="text-white mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
          <div class="row g-4">
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                  <i class="fa fa-user-md text-primary"></i>
                </div>
                <div class="ms-4">
                  <p class="text-white mb-2">Experience</p>
                  <h5 class="text-white mb-0">Doctors</h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                  <i class="fa fa-check text-primary"></i>
                </div>
                <div class="ms-4">
                  <p class="text-white mb-2">Quality</p>
                  <h5 class="text-white mb-0">Services</h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                  <i class="fa fa-comment-medical text-primary"></i>
                </div>
                <div class="ms-4">
                  <p class="text-white mb-2">Positive</p>
                  <h5 class="text-white mb-0">Consultation</h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                  <i class="fa fa-headphones text-primary"></i>
                </div>
                <div class="ms-4">
                  <p class="text-white mb-2">24 Hours</p>
                  <h5 class="text-white mb-0">Support</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="position-absolute img-fluid w-100 h-100" src="{{url('/frontend/img/feature.jpg')}}" style="object-fit: cover;" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature End -->


<!-- Team Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <p class="d-inline-block border rounded-pill py-1 px-4">Doctors</p>
      <h1>Our Experience Doctors</h1>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item position-relative rounded overflow-hidden">
          <div class="overflow-hidden">
            <img class="img-fluid" src="{{url('/frontend/img/team-1.jpg')}}" alt="">
          </div>
          <div class="team-text bg-light text-center p-4">
            <h5>Doctor Name</h5>
            <p class="text-primary">Department</p>
            <div class="team-social text-center">
              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item position-relative rounded overflow-hidden">
          <div class="overflow-hidden">
            <img class="img-fluid" src="{{url('/frontend/img/team-2.jpg')}}" alt="">
          </div>
          <div class="team-text bg-light text-center p-4">
            <h5>Doctor Name</h5>
            <p class="text-primary">Department</p>
            <div class="team-social text-center">
              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item position-relative rounded overflow-hidden">
          <div class="overflow-hidden">
            <img class="img-fluid" src="{{url('/frontend/img/team-3.jpg')}}" alt="">
          </div>
          <div class="team-text bg-light text-center p-4">
            <h5>Doctor Name</h5>
            <p class="text-primary">Department</p>
            <div class="team-social text-center">
              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item position-relative rounded overflow-hidden">
          <div class="overflow-hidden">
            <img class="img-fluid" src="{{url('/frontend/img/team-4.jpg')}}" alt="">
          </div>
          <div class="team-text bg-light text-center p-4">
            <h5>Doctor Name</h5>
            <p class="text-primary">Department</p>
            <div class="team-social text-center">
              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->


<!-- Appointment Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
        <h1 class="mb-4">Make An Appointment To Visit Our Doctor</h1>
        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
        <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
          <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
            <i class="fa fa-phone-alt text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2">Call Us Now</p>
            <h5 class="mb-0">01777575476</h5>
          </div>
        </div>
        <div class="bg-light rounded d-flex align-items-center p-5">
          <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
            <i class="fa fa-envelope-open text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2">Mail Us Now</p>
            <h5 class="mb-0">info@example.com</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="bg-light rounded h-100 d-flex align-items-center p-5">
          <form>
            <div class="row g-3">
              <div class="col-12 col-sm-6">
                <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
              </div>
              <div class="col-12 col-sm-6">
                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
              </div>
              <div class="col-12 col-sm-6">
                <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
              </div>
              <div class="col-12 col-sm-6">
                <select class="form-select border-0" style="height: 55px;">
                  <option selected>Choose Doctor</option>
                  <option value="1">Doctor 1</option>
                  <option value="2">Doctor 2</option>
                  <option value="3">Doctor 3</option>
                </select>
              </div>
              <div class="col-12 col-sm-6">
                <div class="date" id="date" data-target-input="nearest">
                  <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="time" id="time" data-target-input="nearest">
                  <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                </div>
              </div>
              <div class="col-12">
                <textarea class="form-control border-0" rows="5" placeholder="Describe your problem"></textarea>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Appointment End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
      <h1>What Say Our Patients!</h1>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <div class="testimonial-item text-center">
        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{url('/frontend/img/testimonial-1.jpg')}}" style="width: 100px; height: 100px;">
        <div class="testimonial-text rounded text-center p-4">
          <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
          <h5 class="mb-1">Patient Name</h5>
          <span class="fst-italic">Profession</span>
        </div>
      </div>
      <div class="testimonial-item text-center">
        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{url('/frontend/img/testimonial-2.jpg')}}" style="width: 100px; height: 100px;">
        <div class="testimonial-text rounded text-center p-4">
          <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
          <h5 class="mb-1">Patient Name</h5>
          <span class="fst-italic">Profession</span>
        </div>
      </div>
      <div class="testimonial-item text-center">
        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{url('/frontend/img/testimonial-3.jpg')}}" style="width: 100px; height: 100px;">
        <div class="testimonial-text rounded text-center p-4">
          <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
          <h5 class="mb-1">Patient Name</h5>
          <span class="fst-italic">Profession</span>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection