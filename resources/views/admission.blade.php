    <!DOCTYPE html>
    <html>

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Navyug</title>



        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
        <!-- progress barstle -->
        <link rel="stylesheet" href="css/css-circular-prog-bar.css">
        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap"
            rel="stylesheet">
        <!-- font wesome stylesheet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Custom styles for this template -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />




        <link rel="stylesheet" href="css/css-circular-prog-bar.css">


    </head>

    <body>
        <div class="top_container">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a href="/">
                            <img src="images/navyug.png" width="250" height="260">

                            </img>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/"> Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="about"> About </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="admission"> Admission </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="teacher">Teacher</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="exams">Exams</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="why"> Why Us </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="contact">Contact Us</a>
                                    </li>

                                </ul>
                            </div>
                    </nav>
                </div>
            </header>

        </div>
        @if (\Session::has('success'))
            <div class="alert alert-success ">
                <ul>
                    <li style="margin-left: 45%">{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        <!-- end header section -->

        <div class="common_style">



            <!-- admission section -->
            <section class="admission_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="admission_detail-box">
                                <h3>
                                    Admission open
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                </p>
                                <div class="">
                                    <a href="" class="call_to-btn btn_white-border">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="admission_img-container">
                                <img src="images/admission.png" alt="">
                            </div>
                        </div>
                        <div class="container">
                            <form action="/add" method="POST">
                                @csrf
                                <div class="row g-2 ">
                                    <div class="col">
                                        <label for="first_name">First Name</label>
                                        <input class="w-100" type="text" name="first_name" id="first_name"> <br>
                                    </div>
                                    <div class="col">
                                        <label for="last_name">Last Name</label>
                                        <input class="w-100" type="text" name="last_name" id="last_name"> <br>
                                    </div>
                                </div>

                                <div class="row g-2 ">
                                    <div class="col">
                                        <label for="father_name">Father Name</label>
                                        <input class="w-100" type="text" name="father_name" id="father_name"> <br>
                                    </div>
                                    <div class="col">
                                        <label for="mother_name">Mother Name</label>
                                        <input class="w-100" type="text" name="mother_name" id="mother_name"> <br>

                                    </div>
                                </div>

                                <div class="row g-2 ">
                                    <div class="col">
                                        <label for="contact_no">Mobile No.</label>
                                        <input class="w-100" type="number" name="contact_no" id="contact_no"> <br>

                                    </div>
                                    <div class="col">
                                        <label for="email">E mail</label>
                                        <input class="w-100" type="email" name="email" id="email"> <br>
                                    </div>
                                </div>
                                <div class="row g-2 ">
                                    <div class="col">
                                        <label for="birth_date">Date of Birth</label>
                                        <input class="w-100" type="date" name="birth_date" id="birth_date"> <br>
                                    </div>
                                    <div class="col">
                                        <label for="address">Address </label>
                                        <input class="w-100"type="text" name="address" id="address"> <br>
                                    </div>
                                </div>
                        </div>


                        <div class=" d-flex justify-content-center w-100 m-3 ">
                            <button type="submit" class="btn btn-success px-4   ">Submit</button>
                        </div>
                    </div>


                    </form>
                </div>
        </div>
        </div>
        </section>



        <!-- end admission section -->


        </div>

        <!-- info section -->
        <section class="info_section layout_padding-top">
            <div class="info_logo-box">
                <img src="images/navyug.png" width="300" height="280">
            </div>
            <div class="container layout_padding2">
                <div class="row">
                    <div class="col-md-3">
                        <h5>
                            About Us
                        </h5>
                        <p>
                            dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            Useful Link
                        </h5>
                        <ul>
                            <li>
                                <a href="">
                                    Video games
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Remote control
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    3d controller
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            Contact Us
                        </h5>
                        <p>
                            dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e
                        </p>
                    </div>
                    <div class="col-md-3">

                        <div class="subscribe_container">
                            <h5>
                                Newsletter
                            </h5>
                            <div class="form_container">
                                <form action="">
                                    <input type="email" placeholder="Enter your email">
                                    <button type="submit">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="social_container">

                    <div class="social-box">
                        <a href="">
                            <img src="images/fb.png" alt="">
                        </a>

                        <a href="">
                            <img src="images/twitter.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/linkedin.png" alt="">
                        </a>
                        <a href="">
                            <img src="images/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info section -->

        <!-- footer section -->
        <section class="container-fluid footer_section">
            <p>
                Copyright &copy; 2019 All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </section>
        <!-- footer section -->

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>


    </body>

    </html>
