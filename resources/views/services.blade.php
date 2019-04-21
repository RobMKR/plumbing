<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Jumper</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" type="image/png" href="images/favico.png">

</head>
<body>
<!-- Navigation -->
<nav id="myHeader" class="header navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="images/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/services">our services
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/terms">Terms</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

@include('elements.header')

<!-- Services Section Start -->
<section class="services">
    <!--Accordion wrapper-->
    <div class="container">
        <div class="accordion accordion-1" id="accordionEx23" role="tablist">
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96">
                    <h2 class="text-uppercase mb-0 py-1">
                        <a data-toggle="collapse" href="#collapse96" aria-expanded="true" aria-controls="collapse96">
                            Basic Plumbing Repairs <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                        </a>
                    </h2>
                </div>
                <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96" data-parent="#accordionEx23">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner-content"  data-aos="fade-up" data-aos-delay="300">
                                    <img src="images/serv1.jpg" alt="about-bg" class="thumbnail image">
                                    <p>Plumbing repairs come in all shapes and sizes, many times it is something simple that a professional
                                        is able to handle within an hour. If you are experiencing anything from slow drains
                                        to overflowing toilets, give Chin Plumbing Services a call today.
                                        We service both residential and commercial businesses and we offer emergency services to the entire California.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading97">
                    <h2 class="text-uppercase mb-0 py-1">
                        <a class="collapsed" data-toggle="collapse" href="#collapse97" aria-expanded="false" aria-controls="collapse97">
                            Plumbing Remodels and New Construction<i class="fa fa-angle-down rotate-icon fa-2x"></i>
                        </a>
                    </h2>
                </div>
                <div id="collapse97" class="collapse" role="tabpanel" aria-labelledby="heading97" data-parent="#accordionEx23">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner-content"  data-aos="fade-up" data-aos-delay="300">
                                    <img src="images/serv2.jpg" alt="about-bg" class="thumbnail image">
                                    <p>Maybe you are looking for a new look?
                                        Or maybe you are building from the bottom up!
                                        Chin Plumbing Services does complete plumbing
                                        remodels for your home or business. We also are able to install all new plumbing for a new home or business.
                                        Give us a call today if you are in need of remodels or new construction. We offer fair rates as well as thorough service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
                    <h2 class="text-uppercase mb-0 py-1">
                        <a class="collapsed" data-toggle="collapse" href="#collapse98" aria-expanded="false" aria-controls="collapse98">
                            Hot Water Heaters <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                        </a>
                    </h2>
                </div>
                <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98" data-parent="#accordionEx23">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner-content">
                                    <img src="images/serv3.jpg" alt="about-bg" class="thumbnail image">
                                    <p>Is your water suddenly running cold or not as hot as it used to be?
                                        If so you may need a hot water heater repair or replacement.
                                        Chin Plumbing Services offers both to residents and businesses.
                                        Many times you just need a basic hot water heater repair,
                                        other times you may want a replacement. We offer many great models and services for all your hot water needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading99135deg, rgba(4, 0, 58, 0.5) 0%,rgb(54, 79, 125) 100%">
                    <h2 class="text-uppercase mb-0 py-1">
                        <a class="collapsed" data-toggle="collapse" href="#collapse99" aria-expanded="false" aria-controls="collapse99">
                            Drain Cleaning <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                        </a>
                    </h2>
                </div>
                <div id="collapse99" class="collapse" role="tabpanel" aria-labelledby="heading99" data-parent="#accordionEx23">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner-content">
                                    <img src="images/serv4.jpg" alt="about-bg" class="thumbnail image">
                                    <p>We can clear all the drains in your house at once or simply unclog a slow-draining sink or bathtub.  We believe that no drain is unstoppable.Here is how it works:

                                        We insert a tiny, fiber optic video camera into your drain.  This allows us total vision into your sewer and water lines.
                                        We examine your entire sewer and water system to look for any potential problems you may have. By utilizing a drain camera system, we can locate very hard to find problems that a human eye cannot detect.
                                        When our True Technician locates the issue, we give you information & guidance, which will allow you to make the best choice for your home, whether that is to repair or replace.
                                        If a plunger isn't unclogging your drain anymore, give us a call.  We have the tools and the experience to get it clear.  Do not wait, as a drain will not unclog itself!  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Accordion wrapper-->
    </div>
</section>

@include('elements.footer')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Custom JavaScript -->
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script>
    $('.carousel').carousel({
        interval: 2000
    })

    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
</body>
</html>