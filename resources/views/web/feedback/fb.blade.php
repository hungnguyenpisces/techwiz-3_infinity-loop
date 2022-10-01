<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Feedback done!.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png" />


    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="/assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">
          You are using an <strong>outdated</strong> browser. Please
          <a href="https://browsehappy.com/">upgrade your browser</a> to improve
          your experience and security.
        </p>
      <![endif]-->

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
                        <h1>Feedback sent!</h1>
                        <!-- messages -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <p>Thank you for your feedback. We always open to listen to your opinion!</p>
                        <div class="button">
                            <a href="/" class="btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/tiny-slider.js"></script>
    <script src="/assets/js/glightbox.min.js"></script>
    <script>
        window.onload = function() {
            window.setTimeout(fadeout, 500);
        }

        function fadeout() {
            document.querySelector('.preloader').style.opacity = '0';
            document.querySelector('.preloader').style.display = 'none';
        }
    </script>
</body>

</html>