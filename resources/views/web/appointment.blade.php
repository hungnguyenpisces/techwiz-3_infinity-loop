@extends('web.layouts._master')

@section('title')
@endsection

@section('extraCss')
    <!-- extra css -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- end extra css -->
@endsection

@section('content')
    {{-----content-----}}
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Appointment</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="#">Home</a></li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="appointment page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <form action="" method="">
                        <div class="appointment-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="appointment-title">
                                        <h2>Book An Appointment</h2>
                                        <p>Please feel welcome to contact our friendly reception staff with any general or
                                            medical
                                            enquiry. Our doctors will receive or return any urgent calls.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="name"><i class="lni lni-user"></i></label>
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="email"><i class="lni lni-envelope"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="number"><i class="lni lni-phone-set"></i></label>
                                        <input type="text" name="number" id="number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
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
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="doctor"><i class="lni lni-sthethoscope"></i></label>
                                        <select name="doctor" id="doctor">
                                            <option value="none" selected disabled>Hospital</option>
                                            <option value="none">#</option>
                                            <option value="none">#</option>
                                            <option value="none">#</option>
                                            <option value="none">#</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <label for="date"><i class="lni lni-user"></i></label>
                                        <input type="date" name="date" id="date">
                                    </div>
                                </div>
                                <div class="col-12 p-0">
                                    <div class="appointment-input">
                                        <textarea placeholder="Write Your Message Here....."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-btn button">
                                        <button class="btn">Get Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>



                </div>
            </div>
        </div>
    </section>


    {{-----end content-----}}
@endsection

@section('extraJs')
    <!-- extraJs -->


    <!-- end extraJs -->
@endsection
