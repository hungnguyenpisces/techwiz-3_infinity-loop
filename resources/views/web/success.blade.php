@extends('web.layouts._master')

@section('title')
@endsection

@section('extraCss')
    <!-- extra css -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">



    <!-- end extra css -->
@endsection

@section('content')
    {{-----content-----}}
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
                            <a href="#" class="btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-----end content-----}}
@endsection

@section('extraJs')
    <!-- extraJs -->
    <script>
        window.onload = function () {
            window.setTimeout(fadeout, 500);
        }

        function fadeout() {
            document.querySelector('.preloader').style.opacity = '0';
            document.querySelector('.preloader').style.display = 'none';
        }
    </script>



    <!-- end extraJs -->
@endsection
