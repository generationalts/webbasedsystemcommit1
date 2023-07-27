<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GTS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/img/logo.jpg') }}" rel="icon">
    <link href="{{ asset('/img/logo.jpg') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- CSS LIBRARIES Files -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-/1pa14OeQ2+zC1FIf0EV63+Z6wqg6ribOtU6MQn9gH8J6LQcNlRi5zrM+VJdREVw"
        crossorigin="anonymous"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"
        integrity="sha512-UJdXHbW+7oVEPnMf+hGtJ1+UiWALFZCQ+lnz1X9vTduPFzRSsOaIFsKl+V7vJiGwBZzz0zR4dqR4gdvz8NG4uQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-DwZFfJ6p00AAwkGiY1EgxvbFStaJy2Uk1DI/ScNLkGqrw6q3U0uz6ry5ylhX9IW0"
        crossorigin="anonymous"></script>

    <!--Main CSS -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/temp.css') }}">

</head>

<body>
    @if (session('success'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3" style="z-index: 9999;">
            <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <span>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none"
                        href="mailto:admin@gts.co.ke">info@generationaltransformerssociety.co.ke</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+2547 1234 5678">+2547 48 406
                        405</a>
                </span>
                <span>
                    <a class="text-light" href="#" target="_blank"><i
                            class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="#" target="_blank"><i
                            class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="#/" target="_blank"><i
                            class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                </span>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center" href="/">
                <span style="color: black;">G.</span>
                <span style="color: red;">T.</span>
                <span style="color: yellow">S.</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto" style="color: #fff;">
                        <li class="nav-item">
                            <a class="nav-link h3" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3" href="{{route ("gts.about") }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3" href="{{route ("gts.activities") }}">Activities</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link h3" href="{{ route('gts.gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="">
                            <a class="navbar-sm-brand text-light text-decoration-none"
                                href="tel:+2547 1234 5678">+2547 1234 5678</a>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Donate
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide container-fluid" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">

                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" style="border-radius: 5%;"
                                src="{{ asset('/img/hero-carousel/josphine childrens home.pn') }}g" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h2 class="h1 text-white">Josphine Childrens Home VISIT</h2>
                                <h5 class="h2">


During the visit, an Interaction session with the children, this  involved playing games doing art and craft, chatting to know one another. Member engaged into a discussion with the stuff to understand the well bieng of the children.
</h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" style="border-radius: 5%;"
                                src="{{ asset('/img/hero-carousel/muranga rescue center.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h2">Murang'a Rescue Center</h2>
                                <h5 class="h2">
                                    During the visit, an interactive session was held with the children at Nyeri Children's Home. The session included engaging in fun games, exploring their creativity through art and craft activities, and fostering a friendly environment where the children could freely chat and get to know one another. Members of our team had insightful discussions with the staff to gain a deeper understanding of the overall well-being and needs of the children.
                                </h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" style="border-radius: 5%;"
                                src="{{ asset('/img/hero-carousel/nyeri visit.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h2 class="h2">Nyeri childrens home</h2>
                                <h5 class="h2">
                                    During the visit, an interactive session was held with the children at Nyeri Children's Home. The session included engaging in fun games, exploring their creativity through art and craft activities, and fostering a friendly environment where the children could freely chat and get to know one another.  Members of our team had insightful discussions with the staff to gain a deeper understanding of the overall well-being and needs of the children.



                                </h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" style="border-radius: 5%;"
                                src="{{ asset('/img/hero-carousel/visit to the aged.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h2 class="h1"> Wmumu Home for aged</h2>
                                <h5 class="h2">
                                    During our visit to the Home for the Aged, we arranged an interactive session with the elderly residents. This session involved organizing games and activities that brought joy and amusement to the residents, allowing them to engage in art and craft projects, and creating an atmosphere for them to have meaningful conversations and get to know one another better. Moreover, our team members took the opportunity to have discussions with the staff to comprehend the overall well-being of the residents and address any concerns they may have had
                                </h5>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Banner Hero -->

    <main id="main">





        <hr>

        <!-- Start Banner Hero -->



            </div>
            <!-- End Banner Hero -->



            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2 class="text-white">GET IN TOUCH</h2>
                    </div>

                    <div class="row gx-lg-0 gy-4">

                        <div class="col-lg-4">

                            <div class="info-container d-flex flex-column align-items-center justify-content-center">

                                <div class="info-item d-flex">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h4>Email:</h4>
                                        <p><a href="mailto:info@generationaltransformerssociety.co.ke">Send Email</a></p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-phone flex-shrink-0"></i>
                                    <div>
                                        <h4>Call:</h4>
                                        <p>+2547 48 406 405</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-clock flex-shrink-0"></i>
                                    <div>
                                        <h4>Call Hours:</h4>
                                        <p>Mon-Sat: 8:00AM - 8:00PM</p>
                                    </div>
                                </div><!-- End Info Item -->
                            </div>

                        </div>

                        <div class="col-lg-8">

                            <form role="form" class="contact-form" method="post" action="/contact">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" style="border-radius: 10px;"
                                            class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" style="border-radius: 10px;"
                                            name="email" id="email" placeholder="Your Email" required>
                                    </div>

                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" style="border-radius: 10px;"
                                        name="contact" id="subject" placeholder="contact" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" style="border-radius: 10px;"
                                        name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" style="border-radius: 10px;" name="message" rows="7" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>


        </div>

            <div class="modal fade" id="exampleModalLong" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="exampleModalLongTitle">Contribute to Generational Transformers Society</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('accounts.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="text-black" for="number">Send Donnations to <b>0748406405</b></label>

                                </div>
                                <div class="form-group">
                                    <label class="text-black" for="name">Name</label>
                                    <input type="text" required class="form-control" id="name"placeholder="Enter your Name" name="name" value="">
                                </div>
                                <div class="form-group">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" required class="form-control" id="email"  placeholder="Enter your email" name="email" value="">
                                </div>
                                <div class="form-group">
                                    <label class="text-black" for="contact">Contact</label>
                                    <input type="text" required class="form-control" placeholder="Enter your Contact" id="contact" name="contact" value="">
                                </div>
                                <div class="form-group">
                                    <label class="text-black" for="contributionAmount">Donnation Amount</label>
                                    <input required type="number" class="form-control" id="contributionAmount" name="contributionAmount"
                                        placeholder="Enter your contribution amount">
                                </div>
                                <div class="form-group">
                                    <label class="text-black" for="activity">Activity</label>
                                    <select class="form-control" id="activity" name="activity">
                                        <option>Weekly Contribution</option>
                                        <option>Camera Purchase</option>
                                        <option>Other Projects</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-black" for="date">Date</label>
                                    <input type="date" class="form-control" id="date" name="date"
                                        value="{{ date('Y-m-d') }}">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Contact Section -->
        <div class="modal fade" id=exampleModalLong tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
        aria-hidden=true>
        <div class=modal-dialog role=document>
            <div class=modal-content>
                <div class=modal-header>
                    <h5 class=modal-title id=exampleModalLongTitle>Donate To Generational Transformers Society</h5>
                    <button type=button class=close data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>&times;</span>
                    </button>
                </div>
                <div class=modal-body>
                    <form action="{{ route('accounts.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" value="">
                        </div>
                        <div class="form-group">
                            <label for="contributionAmount">Contribution Amount</label>
                            <input type="number" class="form-control" id="contributionAmount" name="contributionAmount"
                                placeholder="Enter your contribution amount">
                        </div>
                        <div class="form-group">
                            <label for="activity">Activity</label>
                            <select class="form-control" id="activity" name="activity">
                                <option>Weekly Contribution</option>
                                <option>Camera Purchase</option>
                                <option>Other Project</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date"
                                value="{{ date('Y-m-d') }}">
                        </div>


                </div>
                <div class=modal-footer>
                    <button type=button class="btn btn-secondary" data-dismiss=modal>Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>GTS</span></strong>. All Rights Reserved
            </div>
            <div class="credits  ">
                powered by <a href="https://quickoffice.co.ke">Quick Office Pointe</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <div id="preloader"></div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- JS library Files -->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- Main JS-->
    <script src="{{ asset('/js/smoothrunning.js') }}"></script>
    <!--dont edit this for smooth running-->

</body>

</html>
