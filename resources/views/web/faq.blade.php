@extends('web.layouts._master')

@section('title')
@endsection

@section('extraCss')
<!-- extra css -->

<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
    .faq-container {
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .hr-line {
        width: 60%;
        margin: auto;
    }

    /* Style the buttons that are used to open and close the faq-page body */
    .faq-page {
        /* background-color: #eee; */
        color: #444;
        cursor: pointer;
        padding: 30px 20px;
        width: 60%;
        border: none;
        outline: none;
        transition: 0.4s;
        margin: auto;
        text-align: left;
        transition: 0.4s;
    }

    .faq-body {
        margin: auto;
        text-align: left;
        width: 60%;
        padding: auto;
    }


    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active,
    .faq-page:hover {
        color: white;
        background-color: #88c250;
    }

    /* Style the faq-page panel. Note: hidden by default */
    .faq-body {
        padding: 0 18px;
        background-color: #f5f5f5;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-out;
    }

    .faq-page:after {
        content:'\02795';
        /* Unicode character for "plus" sign (+) */
        font-size: 20px;
        color: white;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content:"\2796";
        /* Unicode character for "minus" sign (-) */
    }
</style>

<!-- end extra css -->
@endsection

@section('content')
{{-----content-----}}
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">How can we help you</h1>
                </div>
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>FAQs</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="faq-container">
    @foreach($faq as $fq)
    <div class="faq-one">
        <!-- faq question -->
        <h5 class="faq-page">{{$fq->question}}</h5>
        <!-- faq answer -->
        <div class="faq-body">
            <p>{{$fq->answer}}</p>
        </div>
    </div>
    <hr class="hr-line">
    @endforeach
</section>


{{-----end content-----}}
@endsection

@section('extraJs')
<!-- extraJs -->
<script>
    var faq = document.getElementsByClassName("faq-page");
    var i;

    for (i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var body = this.nextElementSibling;
            if (body.style.display === "block") {
                body.style.display = "none";
            } else {
                body.style.display = "block";
            }
        });
    }

    var acc = document.getElementsByClassName("faq-page");
    var j;

    for (j = 0; j < acc.length; j++) {
        acc[j].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>


<!-- end extraJs -->
@endsection