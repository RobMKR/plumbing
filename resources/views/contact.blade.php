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
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">our services</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/contact">Contact
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/terms">Terms & Conditions</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@include('elements.header')

<!-- Contact section Start -->
<div id="contact">
    <div class="container">
        <h2>Contact us</h2>
        @if($email)
            <div class="col-md-12">
                Thanks for email. Our customer service will contact you as soon as possible!
            </div>
        @else
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="800">
                    <p>
                        We are local plumbers that specialize in plumbing repairs, clogged drains, water heater repairs, toilet and bath plumbing.
                        Please let us know how we can be of service to you with your plumbing needs.
                        We are available 24/7 so whether you need leaky pipe fixed, a clogged drain cleared or any general plumbing repair, we can help.
                        Fill out the form below to book your plumbing repair online and we will contact you immediately to confirm the appointment.

                        Your privacy is very important to us!
                        We will never share your information with any third party whatsoever for any reason, ever!
                        Disclosure regarding Plumbing Specials: **Specials are not to be combined with any other offer.
                        We reserve the right to cancel any promotion at anytime without notice.**
                        All our specials are Valid only during normal business hours and expire on their mentioned dates. It is possible that Some restrictions apply.

                        Contact Service Chin Plumbing anytime.
                        We have 24 Hour, 7 day a week Emergency Plumbing Availability!
                        All plumbing calls and form submissions will be returned within the hour.
                    </p>

                    <div>Service Chin Plumbing</div>
                    <div>1344 Hobart Blvd Unit 141</div>
                    <div>CA 90027</div>

                    <div>Call: (626) 360-8061</div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row" data-aos="fade-up" data-aos-duration="800">


                    <div class="col-md-12">
                        <form action="/contact" method="POST">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-md-12">
                                    <textarea type="text" class="form-control" placeholder="Your Message" rows="6" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary px-4">send</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<!-- Contact section End -->


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