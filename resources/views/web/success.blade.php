@extends('web.layouts._master')
@section('content')
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <div class="maill-success">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="success-content">
                        <i class="lni lni-thumbs-up"></i>
                        <h1>Congratulations!</h1>
                        <h2>Your Mail Sent Successfully</h2>
                        <p>Thanks for contacting with us, We will get back to you asap.</p>
                        <div class="button">
                            <a href="index.html" class="btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

