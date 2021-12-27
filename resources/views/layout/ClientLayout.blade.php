<html>
    <head>
        <title>@yield('title')</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="TemplateMo">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo-edu-meeting.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    </head>
    <body>
       <!-- navigate -->

       <!-- Sub Header -->
        <div class="sub-header">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>This is an educational <em>HTML CSS</em> template by DL-DEV Team.</p>
                </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>

        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="{{route('home')}}" class="logo">
                                Edu Meeting
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav" id= "mainNav">
                                <li class="scroll-to-section"><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('meeting')}}">Meetings</a></li>
                                <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                                <li class="has-sub">
                                    <a href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('meeting')}}">Upcoming Meetings</a></li>
                                        <li><a href="{{route('meetingDetail')}}">Meeting Details</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                                <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                            </ul>        
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- navigation is part of layout on website -->

        <!-- content in here -->
        @section('contents')
        @show
       


        <!-- end contents -->

   

       <!-- external scripts here -->
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.min.js')}}"></script>
        <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
        <script src="{{asset('assets/js/lightbox.js')}}"></script>
        <script src="{{asset('assets/js/tabs.js')}}"></script>
        <script src="{{asset('assets/js/video.js')}}"></script>
        <script src="{{asset('assets/js/slick-slider.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>

        <script>
        //according to loftblog tut
            var showSection = function showSection(section, isAnimate) {
            var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                scrollTop: reqSectionPos },
                800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }
            };

            var checkSection = function checkSection() {
            $('.section').each(function () {
                var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                }
            });
            };
            $(window).scroll(function () {
            checkSection();
            });
        </script>
       <!-- some internal script here  -->
       @section('scripts')
    </body>
</html>