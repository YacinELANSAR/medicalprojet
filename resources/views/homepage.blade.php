<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="stylesheet" href="style.css">
  <title>Doctor Reservation</title>

  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- style for input comment -->
  
  <!-- end style for input comment -->
  <!-- Favicons -->
  <link rel="stylesheet" href="{{asset('style2.css')}}">
  <link href="{{ asset('import/assets/img/favicon.png')}}" rel="icon">
<link href="{{ asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('import/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ asset('import/assets/css/style.css')}}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
  <style>
  #commentForm {
    max-width: 600px;
    margin: 0 auto;
  }
</style>
<style>
    .fs-2 {
        font-size: 24px; /* Taille de la police */
    }

    .comment-icon {
      position: relative;
      right: 60px;
        width: 80px; 
        height: 80px; 
        color: #87a8ae;
    }
</style>

</head>

<body>

  
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top mb-lg-5">
    <div class="container d-flex align-items-center">
      
      <h1  class="logo me-auto"><a href="index.html">Doctor Reservation</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="logo me-auto"><img src="{{ asset('import/assets/img/logo.png')}}" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="btn btn-success text-white" href="">Patient area</a></li>
          <a href="{{ route('login.show') }}" class="btn btn-success text-white">Doctor area</a>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->
      
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="font-size: 30px;">Welcome to Doctor Reservation</h1>
      <h2>Hassle-free doctor appointments anytime, anywhere</h2>
     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Doctor Reservation?</h3>
              <p class="text-center">
                Choose our doctor reservation platform for effortless and efficient healthcare scheduling. Save valuable time by instantly securing appointments online, ensuring prompt access to medical professionals. Our user-friendly system offers convenience and control, allowing you to manage your healthcare appointments with ease. Trust in the reliability of our platform and experience peace of mind knowing that your medical reservations are in capable hands. Simplify your healthcare journey with our hassle-free and trustworthy doctor reservation service.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="img/online.png" alt="none" width="112px" height="92px">
                    <h4>Simple Health Booking</h4>
                    <p>Choose us for easy doctor appointments</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="img/medical.png" alt="none" width="112px" height="92px" style="margin-bottom: 16px;">
                    <h4>Easy Doctor Appointments</h4>
                    <p>Simplify healthcare scheduling with us</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="img/doctor.png" alt="none" width="112px" height="92px" style="margin-bottom: 16px;">
                    <h4>Convenient Medical Appointments</h4>
                    <p>Make healthcare easy with us</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3 style="text-align: center;">Your Health, Your Choice</h3>
            <p style="text-align: center;">We understand that everyone's healthcare needs are unique. That's why Doctor Reservation offers a diverse range of healthcare professionals, allowing you to choose the doctor that best fits your requirements.</p>
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-bullseye"></i></div>
              <h4 class="title"><a href="">Our Mission</a></h4>
              <p class="description">At Doctor Reservation, our mission is to transform the way people access healthcare. We believe in making the process of scheduling appointments with doctors seamless, convenient, and user-friendly.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
              <h4 class="title"><a href="">Privacy and Security</a></h4>
              <p class="description">our privacy is our priority. Doctor Reservation employs robust security measures to ensure your personal and medical information is kept confidential. Trust is the foundation of our platform</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-comment-dots"></i></div>
              <h4 class="title"><a href="">Feedback and Improvement</a></h4>
              <p class="description">We value your feedback! Doctor Reservation is committed to continuous improvement. Learn how user suggestions have played a crucial role in enhancing our platform for the benefit of our community.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    
    <!-- ======= Appointment Section ======= -->
   

      

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="fst-italic">Cardiology is the branch of medicine that focuses on the study, diagnosis, and treatment of disorders related to the heart and the circulatory system.</p>
                    <p>Cardiologists, medical professionals specializing in cardiology, assess and manage various conditions such as heart diseases, heart failure, coronary artery disease, valvular heart diseases, and arrhythmias (abnormal heart rhythms).</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{ asset('import/assets/img/departments-1.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                   
                    <p class="fst-italic">Neurology is a medical specialty that focuses on the study, diagnosis, and treatment of disorders affecting the nervous system. The nervous system comprises the brain, spinal cord, nerves, and muscles, and neurologists are specialized physicians who deal with conditions that impact these components.</p>
                    <p>Neurological disorders can range from common conditions like headaches and sleep disorders to more complex and serious conditions such as epilepsy, stroke, multiple sclerosis, and neurodegenerative diseases like Alzheimer's and Parkinson's.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{ asset('import/assets/img/departments-2.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                   
                    <p class="fst-italic">
Hepatology is the branch of medicine that focuses on the study, diagnosis, and treatment of disorders related to the liver, gallbladder, biliary tree, and pancreas. Hepatologists are medical professionals who specialize in this field and deal with a wide range of conditions affecting the liver, including viral hepatitis, alcoholic liver disease, fatty liver disease, liver cirrhosis, and liver tumors.</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{ asset('import/assets/img/departments-3.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                
                    <p class="fst-italic">Pediatrics is the branch of medicine that specializes in the care of infants, children, and adolescents. Pediatricians are medical professionals who focus on the physical, emotional, and social well-being of young individuals, from birth through adolescence. The field of pediatrics encompasses a wide range of healthcare aspects, including preventive care, diagnosis, and treatment of various medical conditions specific to children.</p>
                    <p>Pediatricians address a diverse array of health issues, such as childhood infections, growth and development concerns, immunizations, and behavioral problems. They play a crucial role in monitoring and promoting the overall health of children, ensuring that they reach their developmental milestones and transition into adulthood with optimal health.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{ asset('import/assets/img/departments-4.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                  
                    <p class="fst-italic">Eye care, also known as ophthalmic or optometric care, is a branch of healthcare that focuses on the diagnosis, treatment, and prevention of conditions related to the eyes and vision. Eye care professionals include ophthalmologists, optometrists, and opticians, each with specific roles in maintaining and improving eye health.</p>
                    <p>Eye care involves routine eye exams to assess vision and detect potential issues early, as well as the management of various eye conditions such as refractive errors (nearsightedness, farsightedness, astigmatism), cataracts, glaucoma, and macular degeneration. Additionally, eye care professionals play a crucial role in promoting eye health, providing advice on proper eye protection, and addressing issues related to eye strain or fatigue, especially in the era of digital screens. Regular eye care is essential for maintaining good vision and overall eye health throughout one's life.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{ asset('import/assets/img/departments-5.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('import/assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('import/assets/img/doctors/doctors-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('import/assets/img/doctors/doctors-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('import/assets/img/doctors/doctors-4.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

          @foreach ($commentaires as $comment)
          <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <div class="fs-2 mb-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-fill comment-icon" viewBox="0 0 16 16">
        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15"></path>
    </svg><h3>date:{{ $comment->date }}</h3>
</div>

                  <h3>{{ $comment->nom_complet }}</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $comment->commentaire }}
                  </p>
                </div>
              </div>
            </div>
            @endforeach   

           

          </div>
          <div class="swiper-pagination"></div>
                  <!--commentaire-->
         <br><br>
         <button type="submit" class="btn" id="showFormButton" onclick="comment()">Ajouter Commentaire</button><br><br>
   
    

   <div id="commentForm" class="hidden-form">
   
   <div class="container">
    <form action="{{ route('commentaires.store') }}" method="post">
      @csrf
      <div class="mb-3">
      <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                </svg>
            </span>
            <input type="text" class="form-control" placeholder="Entrer votre nom" aria-label="Input group example" aria-describedby="basic-addon1" name="nom">
        </div>
      </div>
      <div class="mb-3">
      <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"></path>
                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"></path>
                </svg>
            </span>
            <input type="email" class="form-control" placeholder="Entrer votre email" aria-label="Input group example" aria-describedby="basic-addon1" name="email">
        </div>
      </div>
      <div class="mb-3">
      <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                    <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15"></path>
                </svg>
            </span>
            <textarea class="form-control" placeholder="Entrer votre commentaire" name="comment" aria-label="Input group example" aria-describedby="basic-addon1"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Commenter</button>
    </form>
  </div>
</div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    
    <!-- ======= Contact Section ======= -->
   

  </main><!-- End #main -->
 
 <!-- start footer  -->
 <footer>
 <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
    
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    
      <small>Copyright &copy; Doctor reservation</small>
    </div>
  </footer>
 <!-- end footer  -->
 
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('import/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('import/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('import/assets/vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->
<script src="{{ asset('import/assets/js/main.js') }}"></script>

<!-- start succes logout -->
@if (Session::has('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'voit plus tard ',
            text: '{{ Session::get('success')}}',
            confirmButtonColor: '#0A758A'
        });
    </script>
@endif
<!-- end succes logout -->
</body>

</html>