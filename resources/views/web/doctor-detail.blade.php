@extends('web.layouts._master')

@section('title')
    Doctor details
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

    <section class="doctor-details section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="image">
                                    <img src="assets/images/doctors/detail-img.jpg" alt="#">
                                </div>
                                <div class="doctor-left-bar">
                                    <div class="single-bar">
                                        <h4>Specialty</h4>
                                        <p>Respiratory medicine (lung)</p>
                                    </div>
                                    <div class="single-bar">
                                        <h4>Conditions</h4>
                                        <p>Cystic fibrosis (children)</p>
                                    </div>
                                    <div class="single-bar">
                                        <h4>Memberships</h4>
                                        <ul class="list">
                                            <li><a href="#">British Cardiovascular Society</a></li>
                                            <li><a href="#">European Society of Cardiology</a></li>
                                            <li><a href="#">Fellow Royal Society of Medicine</a></li>
                                        </ul>
                                    </div>
                                    <div class="single-bar">
                                        <h4>Doctor Schedule</h4>
                                        <ul class="opening-hour">
                                            <li>
                                                <span class="day"><i class="lni lni-timer"></i> Mon - Tue</span>
                                                <span class="time">08:30 - 18:30</span>
                                            </li>
                                            <li>
                                                <span class="day"><i class="lni lni-timer"></i> Wed- Thu</span>
                                                <span class="time">08:30 - 18:30</span>
                                            </li>
                                            <li>
                                                <span class="day"><i class="lni lni-timer"></i> Friday</span>
                                                <span class="time">08:30 - 18:30</span>
                                            </li>
                                            <li>
                                                <span class="day"><i class="lni lni-timer"></i> Saturday</span>
                                                <span class="time">08:30 - 18:30</span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-8 col-md-8 col-12">

                                <div class="content">
                                    <h3 class="name">Dr.Alice Williams
                                        <span>Your Community Safety Net For Over 50 Years.</span>
                                    </h3>
                                    <ul class="list-info">
                                        <li><span>Profession:</span> Neurologist</li>
                                        <li><span>Experience:</span> 10 Years</li>
                                        <li><span>Phone:</span> (+88) 123 456 789</li>
                                        <li><span>Email:</span> <a href="https://demo.graygrids.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="096a66677d686a7d497e6065656068647a276a6664">[email&#160;protected]</a></li>
                                        <li><span>Address:</span> 594 E. Whitemarsh Street Mchenry, IL 60050</li>
                                        <li>
                                            <ul class="social">
                                                <li><span>Follow On:</span></li>
                                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                                <li><a href="#"><i class="lni lni-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="lni lni-pinterest"></i></a>
                                                </li>
                                                <li><a href="#"><i class="lni lni-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h4>Biography</h4>
                                    <p>Professor Joshua Clark studied at Havard and qualified in medicine at Harvard
                                        Medical School in 1987. He then worked at various New York hospitals for the
                                        next five years, including Seattle, and Washington. He also held positions with
                                        the Medical Research Council, NY Heart Foundation and the Wellcome Trust.</p>
                                    <p>He worked as a thoracic and general surgeon in the north of NY and was appointed
                                        as a senior researcher in the Medical Research Institute of the New York Academy
                                        of Medical Sciences, with the main clinical focus of oesophageal surgery. He
                                        continued in this post until his move to the Seattle in the early 1992. </p>
                                    <h4>Education</h4>
                                    <ul class="normal-list-info">
                                        <li>BSc degree in Neurosciences (1994) at University College London</li>
                                        <li>Royal College of Physicians; MRCP (UK) 2000</li>
                                        <li>PHD Imperial College London School of Medicine in 2004</li>
                                    </ul>
                                    <h4>Research interests</h4>
                                    <p>Professor Joshua Clark studied at Havard and qualified in medicine at Harvard
                                        Medical School in 1987. He then worked at various New York hospitals for the
                                        next five years, including Seattle, Washington. He also held positions with the
                                        Medical Research Council, NY Heart Foundation</p>
                                    <h4>Awards & Honours</h4>
                                    <ul class="normal-list-info">
                                        <li>1988 British Thoracic Society Fisons Travel Fellowship</li>
                                        <li>1991 British Medical Association HC Roscoe Fellowship</li>
                                        <li>1997 Royal College of Physicians Graham Bull Prize in Clinical Science</li>
                                        <li>2005 CF Trust John Panchaud Medal</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
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
