@extends('web.layouts._master')

@section('content')


    <section class="hero-area ">
        <div class="shapes">
            <img src="assets/images/hero/05.svg" class="shape1" alt="#">
            <img src="assets/images/hero/01.svg" class="shape2" alt="#">
        </div>
        <div class="hero-slider">

            <div class="single-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="hero-text">

                                <div class="section-heading">
                                    <h2 class="wow fadeInLeft" data-wow-delay=".3s">Find A Doctor & <br>Book Appointment
                                    </h2>
                                    <p class="wow fadeInLeft" data-wow-delay=".5s">Since the first days of operation of
                                        Infinity-Loop, our teaming has been focused on
                                        building a high-qualities medicals service by Infinity-Loop.</p>
                                    <div class="button wow fadeInLeft" data-wow-delay=".7s">
                                        <a href="#" class="btn">Book Appointment</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="hero-image wow fadeInRight" data-wow-delay=".5s">
                                <img src="assets/images/hero/02.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="single-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="hero-text wow fadeInLeft" data-wow-delay=".3s">

                                <div class="section-heading">
                                    <h2>We only give <br> Best care to your eyes</h2>
                                    <p>Since the first days of operation of Infinity-Loop, our teaming has been focused
                                        on
                                        building a high-qualities medicals service by Infinity-Loop.</p>
                                    <div class="button">
                                        <a href="#" class="btn">Book Appointment</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="hero-image">
                                <img src="assets/images/hero/slider-2.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="single-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="hero-text wow fadeInLeft" data-wow-delay=".3s">

                                <div class="section-heading">
                                    <h2>Superior solutions that <br> help you to shine.</h2>
                                    <p>Since the first days of operation of Infinity-Loop, our teaming has been focused
                                        on
                                        building a high-qualities medicals service by Infinity-Loop.</p>
                                    <div class="button">
                                        <a href="#" class="btn">Book Appointment</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="hero-image">
                                <img src="assets/images/hero/slider-3.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="appointment">
        <div class="container">

            <div class="appointment-form">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="appointment-title">
                            <span>Appointment</span>
                            <h2>Book An Appointment</h2>
                            <p>Please feel welcome to contact our friendly reception staff with any general or medical
                                enquiry. Our doctors will receive or return any urgent calls.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 p-0">
                        <div class="appointment-input">
                            <label for="name"><i class="lni lni-user"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 p-0">
                        <div class="appointment-input">
                            <label for="email"><i class="lni lni-envelope"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 p-0">
                        <div class="appointment-input">
                            <label for="department"><i class="lni lni-notepad"></i></label>
                            <select name="department" id="department">
                                <option value="none" selected disabled>Department</option>
                                <option value="none">Musculoskeletal</option>
                                <option value="none">Neurology</option>
                                <option value="none">Gastroenterology</option>
                                <option value="none">Heart</option>
                                <option value="none">Otorhinolaryngology</option>
                                <option value="none">Dermatology</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 custom-padding">
                        <div class="appointment-btn button">
                            <button class="btn">Get Appointment</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="about-us section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="content-left wow fadeInLeft" data-wow-delay=".3s">
                        <img src="assets/images/about/about.png" alt="#">
                        <a href="#"
                           class="glightbox video"><i class="lni lni-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">

                    <div class="content-right wow fadeInRight" data-wow-delay=".5s">
                        <span class="sub-heading">About</span>
                        <h2>Thousands of specialities for any
                            type diagnostic.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi aliquip ex ea commodo consequat.</p>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <ul class="list">
                                    <li><i class="lni lni-checkbox"></i>Conducts eye health checkups</li>
                                    <li><i class="lni lni-checkbox"></i>Best lasik treatment</li>
                                    <li><i class="lni lni-checkbox"></i>Treats minor illnesses</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-12">
                                <ul class="list">
                                    <li><i class="lni lni-checkbox"></i>Special eye exam</li>
                                    <li><i class="lni lni-checkbox"></i>Contact lens service</li>
                                    <li><i class="lni lni-checkbox"></i>Special Retina exam</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button">
                            <a href="#" class="btn">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="departments section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Departments</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Specialities available at Infinity-Loop</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="cardiology-tab" data-bs-toggle="tab"
                                    data-bs-target="#cardiology" type="button" role="tab" aria-controls="cardiology"
                                    aria-selected="true"><i class="lni lni-heart"></i> Cardiology</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="stomatology-tab" data-bs-toggle="tab"
                                    data-bs-target="#stomatology" type="button" role="tab" aria-controls="stomatology"
                                    aria-selected="false"><i class="lni lni-syringe"></i> Stomatology</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="radiology-tab" data-bs-toggle="tab" data-bs-target="#radiology"
                                    type="button" role="tab" aria-controls="radiology" aria-selected="false"><i
                                    class="lni lni-first-aid"></i> Radiology</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="neurology-tab" data-bs-toggle="tab" data-bs-target="#neurology"
                                    type="button" role="tab" aria-controls="neurology" aria-selected="false"><i
                                    class="lni lni-pulse"></i> Neurology</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ophthalmology-tab" data-bs-toggle="tab"
                                    data-bs-target="#ophthalmology" type="button" role="tab" aria-controls="ophthalmology"
                                    aria-selected="false"><i class="lni lni-sthethoscope"></i> Ophthalmology</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="cardiology" role="tabpanel"
                             aria-labelledby="cardiology-tab">
                            <div class="department-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="image">
                                            <img src="assets/images/departments/image1.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="text">
                                            <h3>Cardiology</h3>
                                            <ul class="list">
                                                <li><i class="lni lni-checkbox"></i>Get the oars in the water and start
                                                    rowing</li>
                                                <li><i class="lni lni-checkbox"></i>Introspection is the trick.
                                                </li>
                                                <li><i class="lni lni-checkbox"></i>Most people believe that success is
                                                    difficult.
                                                </li>
                                            </ul>
                                            <p>For those of you who are serious about having more, doing more, giving
                                                more and being more, success is achievable with some understanding of
                                                what to do, some discipline around planning and execution of those plans
                                                and belief that you can achieve your desires.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non leo
                                                nunc. Vivamus lacinia massa nec sem sagittis.</p>
                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn">View Speciality</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="stomatology" role="tabpanel" aria-labelledby="stomatology-tab">
                            <div class="department-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="image">
                                            <img src="assets/images/departments/image2.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="text">
                                            <h3>Stomatology</h3>
                                            <ul class="list">
                                                <li><i class="lni lni-checkbox"></i>Get the oars in the water and start
                                                    rowing</li>
                                                <li><i class="lni lni-checkbox"></i>Introspection is the trick.
                                                </li>
                                                <li><i class="lni lni-checkbox"></i>Most people believe that success is
                                                    difficult.
                                                </li>
                                            </ul>
                                            <p>For those of you who are serious about having more, doing more, giving
                                                more and being more, success is achievable with some understanding of
                                                what to do, some discipline around planning and execution of those plans
                                                and belief that you can achieve your desires.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non leo
                                                nunc. Vivamus lacinia massa nec sem sagittis.</p>
                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn">View Speciality</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="radiology" role="tabpanel" aria-labelledby="radiology-tab">
                            <div class="department-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="image">
                                            <img src="assets/images/departments/image3.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="text">
                                            <h3>Radiology</h3>
                                            <ul class="list">
                                                <li><i class="lni lni-checkbox"></i>Get the oars in the water and start
                                                    rowing</li>
                                                <li><i class="lni lni-checkbox"></i>Introspection is the trick.
                                                </li>
                                                <li><i class="lni lni-checkbox"></i>Most people believe that success is
                                                    difficult.
                                                </li>
                                            </ul>
                                            <p>For those of you who are serious about having more, doing more, giving
                                                more and being more, success is achievable with some understanding of
                                                what to do, some discipline around planning and execution of those plans
                                                and belief that you can achieve your desires.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non leo
                                                nunc. Vivamus lacinia massa nec sem sagittis.</p>
                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn">View Speciality</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="neurology" role="tabpanel" aria-labelledby="neurology-tab">
                            <div class="department-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="image">
                                            <img src="assets/images/departments/image4.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="text">
                                            <h3>Neurology</h3>
                                            <ul class="list">
                                                <li><i class="lni lni-checkbox"></i>Get the oars in the water and start
                                                    rowing</li>
                                                <li><i class="lni lni-checkbox"></i>Introspection is the trick.
                                                </li>
                                                <li><i class="lni lni-checkbox"></i>Most people believe that success is
                                                    difficult.
                                                </li>
                                            </ul>
                                            <p>For those of you who are serious about having more, doing more, giving
                                                more and being more, success is achievable with some understanding of
                                                what to do, some discipline around planning and execution of those plans
                                                and belief that you can achieve your desires.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non leo
                                                nunc. Vivamus lacinia massa nec sem sagittis.</p>
                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn">View Speciality</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ophthalmology" role="tabpanel"
                             aria-labelledby="ophthalmology-tab">
                            <div class="department-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="image">
                                            <img src="assets/images/departments/image5.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="text">
                                            <h3>Ophthalmology</h3>
                                            <ul class="list">
                                                <li><i class="lni lni-checkbox"></i>Get the oars in the water and start
                                                    rowing</li>
                                                <li><i class="lni lni-checkbox"></i>Introspection is the trick.
                                                </li>
                                                <li><i class="lni lni-checkbox"></i>Most people believe that success is
                                                    difficult.
                                                </li>
                                            </ul>
                                            <p>For those of you who are serious about having more, doing more, giving
                                                more and being more, success is achievable with some understanding of
                                                what to do, some discipline around planning and execution of those plans
                                                and belief that you can achieve your desires.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non leo
                                                nunc. Vivamus lacinia massa nec sem sagittis.</p>
                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn">View Speciality</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                        <i class="lni lni-apartment"></i>
                        <h3 class="counter"><span id="secondo1" class="countup" cup-end="1250">1250</span></h3>
                        <p>Hospital Rooms</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                        <i class="lni lni-sthethoscope"></i>
                        <h3 class="counter"><span id="secondo2" class="countup" cup-end="350">350</span></h3>
                        <p>Specialist Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-emoji-smile"></i>
                        <h3 class="counter"><span id="secondo3" class="countup" cup-end="2500">2500</span></h3>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-certificate"></i>
                        <h3 class="counter"><span id="secondo3" class="countup" cup-end="35">35</span></h3>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Services</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Services Provided By Infinity-Loop</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 custom-padding-right">

                                <div class="single-list custom-border-right custom-border-bottom wow fadeInUp"
                                     data-wow-delay=".2s">
                                    <img class="shape1" src="assets/images/service/shape1.svg" alt="#">
                                    <img class="shape2" src="assets/images/service/shape2.svg" alt="#">
                                    <i class="lni lni-ambulance"></i>
                                    <h4><a href="#">Fast Ambulance</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered.</p>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-12 custom-padding-left custom-padding-right ">

                                <div class="single-list custom-border-right custom-border-bottom wow fadeInUp"
                                     data-wow-delay=".4s">
                                    <img class="shape1" src="assets/images/service/shape1.svg" alt="#">
                                    <img class="shape2" src="assets/images/service/shape2.svg" alt="#">
                                    <i class="lni lni-sthethoscope"></i>
                                    <h4><a href="#">Dental Specialist</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered.</p>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-12 custom-padding-left">

                                <div class="single-list custom-border-bottom wow fadeInUp" data-wow-delay=".6s">
                                    <img class="shape1" src="assets/images/service/shape1.svg" alt="#">
                                    <img class="shape2" src="assets/images/service/shape2.svg" alt="#">
                                    <i class="lni lni-microscope"></i>
                                    <h4><a href="#">Modern Laboratory</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered.</p>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-12 custom-padding-right">

                                <div class="single-list custom-border-right wow fadeInUp" data-wow-delay=".2s">
                                    <img class="shape1" src="assets/images/service/shape1.svg" alt="#">
                                    <img class="shape2" src="assets/images/service/shape2.svg" alt="#">
                                    <i class="lni lni-users"></i>
                                    <h4><a href="#">Children Center</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered.</p>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-12 custom-padding-left custom-padding-right">

                                <div class="single-list custom-border-right wow fadeInUp" data-wow-delay=".4s">
                                    <img class="shape1" src="assets/images/service/shape1.svg" alt="#">
                                    <img class="shape2" src="assets/images/service/shape2.svg" alt="#">
                                    <i class="lni lni-heart"></i>
                                    <h4><a href="#">Heart Surgery</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered.</p>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-12 custom-padding-left">

                                <div class="single-list wow fadeInUp" data-wow-delay=".6s">
                                    <img class="shape1" src="assets/images/service/shape1.svg" alt="#">
                                    <img class="shape2" src="assets/images/service/shape2.svg" alt="#">
                                    <i class="lni lni-hand"></i>
                                    <h4><a href="#">Care Advice</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="portfolio-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Projects</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Here is Some of our <br>Latest Cases</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-btn-wrapper wow fadeInUp" data-wow-delay=".4s">
                        <button class="portfolio-btn active" data-filter="*">Show All</button>
                        <button class="portfolio-btn" data-filter=".cardiology">Cardiology</button>
                        <button class="portfolio-btn" data-filter=".diabetes">Diabetes</button>
                        <button class="portfolio-btn" data-filter=".pediatric">Pediatric</button>
                        <button class="portfolio-btn" data-filter=".neurosurgery">Neurosurgery</button>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-lg-4 col-md-6 grid-item diabetes">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/pf1.jpg" alt="#">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="pf-content">
                                <a href="#" class="detail-btn"><i class="lni lni-link"></i></a>
                                <span class="category">Cardiac Surgery</span>
                                <h4><a href="#">Qualified Physicians</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item diabetes">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/pf2.jpg" alt="#">
                        </div>
                        <div class="pf-content">
                            <a href="#" class="detail-btn"><i class="lni lni-link"></i></a>
                            <span class="category">Cloud Services</span>
                            <h4><a href="#">Personalized Medication</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item pediatric">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/pf3.jpg" alt="#">
                        </div>
                        <div class="pf-content">
                            <a href="#" class="detail-btn"><i class="lni lni-link"></i></a>
                            <span class="category">Dietetics</span>
                            <h4><a href="#">Excellence And Safety</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cardiology">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/pf4.jpg" alt="#">
                        </div>
                        <div class="pf-content">
                            <a href="#" class="detail-btn"><i class="lni lni-link"></i></a>
                            <span class="category">Eye Surgery</span>
                            <h4><a href="portfolio-details.html">Dry Eye Surgery</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item pediatric">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/pf5.jpg" alt="#">
                        </div>
                        <div class="pf-content">
                            <a href="#" class="detail-btn"><i class="lni lni-link"></i></a>
                            <span class="category">Surgical</span>
                            <h4><a href="#">Surgical Procedure</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item neurosurgery">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/pf6.jpg" alt="#">
                        </div>
                        <div class="pf-content">
                            <a href="#" class="detail-btn"><i class="lni lni-link"></i></a>
                            <span class="category">Eye Surgery</span>
                            <h4><a href="#">Dry Eye Surgery</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-table section">
        <div class="container">

        </div>
    </section>


    <section class="testimonials section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <h3>testimonials</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">What People Say</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="text">
                            <div class="quote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections."</p>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi1.jpg" alt="#">
                            <h4 class="name">
                                Jane Anderson
                                <span class="deg">Cancer client</span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="text">
                            <div class="quote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections."</p>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi2.jpg" alt="#">
                            <h4 class="name">
                                Paul Flavius
                                <span class="deg">Heather</span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="text">
                            <div class="quote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections."</p>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi3.jpg" alt="#">
                            <h4 class="name">
                                Harry Russel
                                <span class="deg">Surgery client</span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="text">
                            <div class="quote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections."</p>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi4.jpg" alt="#">
                            <h4 class="name">
                                Alice Williams
                                <span class="deg">Mother</span>
                            </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="doctors section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Doctors</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Outstanding Team Is Active To Help You!</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <img src="assets/images/doctors/doctor1.jpg" alt="#">
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>Cardiologist</h5>
                            <h3><a href="#">Dr.Felica Queen</a></h3>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".4s">
                        <div class="image">
                            <img src="assets/images/doctors/doctor2.jpg" alt="#">
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>Neurologist</h5>
                            <h3><a href="#">Dr.Alice Williams</a></h3>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".6s">
                        <div class="image">
                            <img src="assets/images/doctors/doctor3.jpg" alt="#">
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>Physician Assistant</h5>
                            <h3><a href="#">Dr.Paul Flavius</a></h3>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".8s">
                        <div class="image">
                            <img src="assets/images/doctors/doctor4.jpg" alt="#">
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5>Physician Assistant</h5>
                            <h3><a href="#">Dr.Michael Bean</a></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="how-works">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 p-0">

                    <div class="single-work first">
                        <div class="main-icon">
                            <i class="lni lni-agenda"></i>
                        </div>
                        <h3>Best Monitoring System</h3>
                        <p>Despite advances in technology and understanding of biological systems, drug discovery is
                            still a lengthy, expensive.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 p-0">

                    <div class="single-work middle">
                        <div class="main-icon">
                            <i class="lni lni-hospital"></i>
                        </div>
                        <h3>Advanced Operating Room</h3>
                        <p>Despite advances in technology and understanding of biological systems, drug discovery is
                            still a lengthy, expensive.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 p-0">

                    <div class="single-work last">
                        <div class="main-icon">
                            <i class="lni lni-sthethoscope"></i>
                        </div>
                        <h3>Only Best Doctors</h3>
                        <p>Despite advances in technology and understanding of biological systems, drug discovery is
                            still a lengthy, expensive.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="latest-news-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Blogs</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">latest news</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">

                    <div class="single-news wow fadeInUp" data-wow-delay=".2s">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12 pr-0">
                                <div class="image">
                                    <a href="#"><img src="assets/images/blog/blog1.jpg"
                                                     alt="#"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12  pl-0">
                                <div class="content">
                                    <h2 class="title"><a href="#">These blood markers may higher
                                            risk of disease</a></h2>
                                    <p>The price is something not defined as financial. It could be time.</p>
                                    <ul class="meta-info">
                                        <li>
                                            <a href="javascript:void(0)"><img src="assets/images/blog/comment1.jpg"
                                                                              alt="#"> Alice
                                                Williams</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">08 Mar 2023 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="single-news wow fadeInUp" data-wow-delay=".2s">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12 pr-0">
                                <div class="image">
                                    <a href="#"><img src="assets/images/blog/blog2.jpg"
                                                     alt="#"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12  pl-0">
                                <div class="content">
                                    <h2 class="title"><a href="#">Brushing your teeth may keep
                                            your heart healthy</a></h2>
                                    <p>The price is something not defined as financial. It could be time.</p>
                                    <ul class="meta-info">
                                        <li>
                                            <a href="javascript:void(0)"><img src="assets/images/blog/comment2.jpg"
                                                                              alt="#"> Alrado
                                                Deyam</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">10 Feb 2023 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-12">

                    <div class="single-news style2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="row">
                            <div class="col-12">
                                <div class="image">
                                    <a href="#"><img src="assets/images/blog/blog3.jpg"
                                                     alt="#"></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content">
                                    <h2 class="title"><a href="#">Using anthrax to fight cancer
                                            effectively</a></h2>
                                    <p>The price is something not necessarily defined as financial. It could be time,
                                        effort and sacrifice.</p>
                                    <ul class="meta-info">
                                        <li>
                                            <a href="javascript:void(0)"><img src="assets/images/blog/comment3.jpg"
                                                                              alt="#"> Zenifer
                                                Suie</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">02 Jan 2023</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
