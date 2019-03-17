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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

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
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">our services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/terms">Terms & Conditions</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="content">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active">
                <img src="{{ asset('images/carousel1.jpg')  }}" alt="...">
                <div class="gradient"></div>
                <div class="carousel-caption">
                    <h1>Relax. We’ll fix it.</h1>
                    <h2>Chinplumbing team will be there in a snap to fix your plumbing issues.</h2>
                    {{--<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h5>--}}
                    {{--<a class="btn btn-primary" href="#" role="button">get started</a>--}}
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <img src="{{ asset('images/carousel2.jpg')  }}" alt="...">
                <div class="gradient"></div>
                <div class="carousel-caption">
                    <h1>ENSURE YOUR HOME OR OFFICE IS COMFORTABLE</h1>
                    <h2>Chin plumbing can help!</h2>
                    <h5>Do you feel overwhelmed when your plumbing
                        systems aren't working properly? Chin Plumbing is prepared to help you restore order to your home or office.</h5>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <img src="{{ asset('images/carousel3.jpg')  }}" alt="...">
                <div class="gradient"></div>
                <div class="carousel-caption">
                    <h1>YOUR LOCAL PLUMBERS</h1>
                    <h2>Do you have plumbing leaks, broken sump pump, clogged drain or water heater problems? Call us.</h2>
                    <h5>We are a local family-owned plumbing company providing professional plumbing services.</h5>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 heading">
                <div class="icon">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-sm-12 heading">
                <h3>All you need to know about chin plumbing services</h3>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-4 col1">
                <div class="row">
                    <div class="col-sm-2 box1">
                        <i class="fa fa-tint" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-10 inner-content">
                        <h3>Basic Plumbing Repairs</h3>
                        <p> We service both residential and commercial businesses and we offer emergency services to the entire California.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col2">
                <div class="row">
                    <div class="col-sm-2 box1">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-10 inner-content">
                        <h3>Plumbing Remodels and New Construction</h3>
                        <p>Chin Plumbing Services does complete plumbing
                            remodels for your home or business.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col3">
                <div class="row">
                    <div class="col-sm-2 box1">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-10 inner-content">
                        <h3>Hot Water Heaters</h3>
                        <p>We offer many great models and services for all your hot water needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 heading">
                <h3>About our team</h3>
            </div>
        </div>

        <div class="row aos-animate" data-aos="fade-up">
            <div class="col-sm-12\">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="about-text-main">
                            Thank you for visiting the web-page for Chin Plumbing Company, Inc. Our office is located in 1344 Hobart Blvd Unit 141, CA. Our roots run deep in the California, where many of our employees were born and raised. We were fortunate enough to have great mentors that not only helped hone my plumbing skills, but also helped me to learn to be a business man.

                            Employee safety and retention are a main priority for our company.
                            We feel the satisfaction of the employees reflect on the work performed.
                            The houses we plumb are our next door neighbors so QUALITY matters! Our initials are on the front door so all work done is a
                            direct reflection of me. All of our employees are treated as extended family and it is a joy to see the family grow each year.
                            All of our employees undergo regular training for safe practices which we incorporate into several team building events held throughout the year.

                            We feel our best advertising is word of mouth, which comes from great relationships.
                            We encourage all employees to be respectful not only with words,
                            but with their actions.
                            We strive to be better than any other plumber no matter if it’s new residential tract plumbing, service, fire sprinklers or repipes.
                            We try to be active in our community and support many fundraisers throughout the year.
                            Our vendors are a valuable partner where we work diligently to obtain the best pricing and product availability.
                            Our goal is to deliver the best, quality service at a fair price.

                            Thank You,
                            Thanan Chintana
                            President, Chin Plumbing Company, Inc.
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section class="Subscribe" data-aos="fade-up">
    <div class="container">
        <!-- Grid row-->
        <div class="row main">
            <!-- Grid column -->
            <div class="col-lg-6 col-sm-6 col1">
                <div class="heading">
                    @if(request()->cookie('email') || isset($email))
                        <h3>Subscibed to</h3>
                    @else
                        <h3>Subscribe to Newsletter</h3>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col1">
                <form method="POST">
                    @if(request()->cookie('email'))
                        <div class="input-group">
                            <input disabled="disabled" name="email" id="email" type="email" value="{{request()->cookie('email')}}" required>
                        </div>
                    @elseif(isset($email))
                        <div class="input-group">
                            <input disabled="disabled" name="email" id="email" type="email" value="{{$email}}" required>
                        </div>
                    @else
                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                        <div class="input-group">
                            <input name="email" id="email" type="email" placeholder="Enter your email id" required>
                            <button class="btn btn-info" type="submit">Subscribe</button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

@include('elements.footer')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<!-- Custom JavaScript -->
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script>
    $('.carousel').carousel({
        interval: 4000
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
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
</body>
</html>