@extends('layouts.app')
@section('title', json_decode($site_settings->site_name)->en . ' :: ')

@section('content')
    <!--================= Slider Section Start Here =================-->
    <div class="react-slider-part react-slider-part-six">
        <div id="carouselExampleControls" class="carousel slide home-sliders home2" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active single-slide">
                    <div class="slider-img">
                        <img class="desktop" src="assets/img/slider/slider1.webp" loading="eager" alt="Slider Image 1">
                        <img class="mobile" src="assets/img/slider/slider1m.webp" loading="lazy" alt="Slider Image 1">
                        <div id="overlay"></div>
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <div class="content-part">
                                <span class="slider-pretitle">বৈজ্ঞানিক চিন্তাচেতনা ও যুক্তিবাদী মন</span>
                                <h2 class="slider-title">
                                    মানব সম্পদ <br />
                                    উন্নয়নের হাতিয়ার
                                </h2>
                                <div class="slider-btn">
                                    <a class="btn bg-primaryColor px-4 py-3 text-white" href="/admission-apply">ভর্তি
                                        আবেদন</a>
                                </div>
                                <div class="event__video-btn--play event__video-btn--play-six">
                                    <a href="https://www.youtube.com/watch?v=e5Hc2B50Z7c"
                                        class="event__video-btn--play-btn event__video-btn--play-btn-six custom-popup">
                                        <img class="video-icon" loading="lazy" src="assets/img/icons/video-icon.png"
                                            alt="video-icon">
                                        <em>ভিডিও দেখুন</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item single-slide">
                    <div class="slider-img">
                        <img class="desktop" src="assets/img/slider/slider2.webp" alt="Slider Image 1">
                        <img class="mobile" src="assets/img/slider/slider2m.webp" loading="lazy" alt="Slider Image 1">
                        <div id="overlay"></div>
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <div class="content-part">
                                <span class="slider-pretitle">বৈজ্ঞানিক গবেষণা, প্রযুক্তির প্রয়োগ</span>
                                <h2 class="slider-title">
                                    একবিংশ শতাব্দীর <br> চ্যালেঞ্জ।
                                </h2>
                                <div class="slider-btn">
                                    <a class="btn bg-primaryColor px-4 py-3 text-white" href="/admission-apply">ভর্তি
                                        আবেদন</a>
                                </div>
                                <div class="event__video-btn--play event__video-btn--play-six">
                                    <a href="https://www.youtube.com/watch?v=e5Hc2B50Z7c"
                                        class="event__video-btn--play-btn event__video-btn--play-btn-six custom-popup">
                                        <img class="video-icon" src="assets/img/icons/video-icon.png" loading="lazy"
                                            alt="video-icon">
                                        <em>ভিডিও দেখুন</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item single-slide">
                    <div class="slider-img">
                        <img class="desktop" src="assets/img/slider/slider3.webp" alt="Slider Image 1">
                        <img class="mobile" src="assets/img/slider/slider3m.webp" loading="lazy" alt="Slider Image 1">
                        <div id="overlay"></div>
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <div class="content-part">
                                <span class="slider-pretitle">শিক্ষা, প্রগতির উন্নয়ন</span>
                                <h2 class="slider-title">
                                    জাতির উন্নয়ন।
                                </h2>
                                <div class="slider-btn">
                                    <a class="btn bg-primaryColor px-4 py-3 text-white" href="/admission-apply">ভর্তি
                                        আবেদন</a>
                                </div>
                                <div class="event__video-btn--play event__video-btn--play-six">
                                    <a href="https://www.youtube.com/watch?v=e5Hc2B50Z7c"
                                        class="event__video-btn--play-btn event__video-btn--play-btn-six custom-popup">
                                        <img class="video-icon" src="assets/img/icons/video-icon.png" loading="lazy"
                                            alt="video-icon">
                                        <em>ভিডিও দেখুন</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--================= Slider Section End Here =================-->
    <div class="topbar-area style1">
        <div class="container">
            <div class="d-flex align-items-center">
                <p class="bg-dark text-white p-3 notice_portion">নোটিশ ও বিজ্ঞপ্তি</p>
                <marquee onmouseover="this.stop()" onmouseout="this.start()" id="marquee" scrollamount="5"
                    behaviour="scroll" direction="left">
                    <a href=""> ভর্তি চলছে । ২০২৩-২৪ শিক্ষাবর্ষে একাদশ শ্রেণিতে ভুলতা রেসিডেন্সিয়াল কলেজে ভর্তি চলছে
                        । </a>
                    <a href=""> আগামী ১৩ জুন হতে কলেজের সকল কার্যক্রম বন্ধ থাকবে এবং ০৩ জুলাই হতে পুনরায় সকল
                        কার্যক্রম পরিচালিত হবে । </a>
                </marquee>
            </div>
        </div>
    </div>

    <!--================= Overview Section Start Here =================-->
    <div class="overview-section-six py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8">
                    <div class="mb-5">
                        <button class="btn py-3 px-4 navigation-btn" data-show=".about">প্রতিষ্ঠান
                            সম্পর্কে</button>
                        <button class="btn py-3 px-4 navigation-btn active" data-show=".principle">প্রিন্সিপালের
                            বক্তব্য</button>
                        <button class="btn py-3 px-4 navigation-btn" data-show=".chairman">গভর্নিং
                            বডি</button>
                    </div>
                    <div class="overview-contents">
                        <div class="item about hide">
                            <div class="content-picture"></div>
                            <div class="content">
                                <p>সময়ের পরিবর্তনের সাথে সাথে আমাদের দেশের শিক্ষা ব্যবস্থা পরিবর্তন হচ্ছে।
                                    বিজ্ঞানের ক্রমাগত উন্নতির কারনে বর্তমান সময়ে বিজ্ঞান বিষয় নিয়ে পড়াশোনা করার
                                    ক্ষেত্রে শিক্ষার্থীদের আগ্রহ বেড়েছে যুগোপযোগী শিক্ষা কার্যক্রমের মাধ্যেম
                                    শিক্ষার্থীদের শারিরিক মানসিক ও নৈতিক গুণাবলীর বিকাশ সাধন করে, যা তাদের
                                    বৃহত্তর কর্মজীবন ও জাতীয় জীবনের বিভিয় ক্ষেত্রে তারা নিজেদের প্রতিষ্ঠা করতে
                                    পাতবে এটাই আমাদের লক্ষ্য ও উদ্দ্যেশ্য।
                                </p>
                                <p class="oneline">
                                    আধুনিক প্রযুক্তির সাথে তাল মিলিয়ে একটি আধুনিক শিক্ষা প্রতিষ্ঠান গড়ে তোলার
                                    লক্ষ্যে (ঢাকা সিলেট) মহাসড়কের পাশে ভুলতা রেসিডেন্সিয়াল কলেজ নামে একটি
                                    স্মার্ট শিক্ষা প্রতিষ্ঠান প্রতিষ্ঠিত হয়েছে।

                                    ভুলতা রেসিডেন্সিয়াল কলেজ রয়েছে শীতাতপ নিয়ন্ত্রিত ক্লাসরুম, ডিজিটাল বোর্ড,
                                    বিজ্ঞান চর্চার জন্য আধুনিক ল্যাবরেটরি, প্রযুক্তিগত দক্ষতা অর্জনের জন্য রয়েছে
                                    কম্পিউটার ল্যাব। শিক্ষার্থীদের প্রয়োজনীয় সরঞ্জামাদি রাখার জন্য রয়েছে পৃথক
                                    লকারের ব্যবস্থা।</p>

                                <a href="/about" class="read-more"><b>আরও পড়ুন</b> <i
                                        class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="item principle mb-3">
                            <div class="content-picture"><img src="assets/img/administration/principle.webp"
                                    loading="lazy" alt=""></div>
                            <div class="content">
                                <div>
                                    <div class="title mb-0">
                                        {{ json_decode($site_settings->site_administration)->principal->name }}</div>
                                    <strong>{{ json_decode($site_settings->site_administration)->principal->designation }}</strong>
                                </div>
                                <p class="mt-3">
                                    {{ str_replace('<br>', '', json_decode($site_settings->site_administration)->principal->message) }}
                                </p>
                            </div>
                        </div>
                        <div class="item chairman hide">
                            <div class="row">
                                <div class="col-6 main_div">
                                    <div class="governing_img"><img src="assets/img/administration/shoeb.webp"
                                            loading="lazy" alt=""></div>
                                    <h4 class="text-dark text-center pt-4 mb-1 font-bold">সোয়েব ভুঁইয়া</h4>
                                    <span class="designation_admin">চেয়ারম্যান ও প্রতিষ্ঠাতা পরিচালক</span>
                                    <p>
                                        {{ substr(str_replace('<br>', '', json_decode($site_settings->site_administration)->chairman->message), 0, 400) }}
                                        <a href="/chairman-message">আরও পড়ুন...</a>
                                    </p>

                                </div>
                                <div class="col-6 main_div">
                                    <div class="governing_img"><img src="assets/img/administration/sadi.webp"
                                            loading="lazy" alt=""></div>
                                    <h4 class="text-dark text-center pt-4 mb-1 font-bold">মোঃ সাইদুল ইসলাম
                                        সাদি</h4>
                                    <span class="designation_admin">সভাপতি ও প্রতিষ্ঠাতা পরিচালক</span>
                                    <p>
                                        {{ substr(str_replace('<br>', '', json_decode($site_settings->site_administration)->governing_body[0]->message), 0, 400) }}
                                        <a href="/governing-body">আরও পড়ুন...</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D61555703712481&tabs=timeline%2Cevents%2Cmessages&width=500&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId"
                        width="500" height="500" style="border:none;overflow:hidden" scrolling="no"
                        frameborder="0" allowfullscreen="true" loading="lazy"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--================= Overview Section End Here =================-->

    <!--================= Notice Section Start Here ================= -->
    <div class="blog-section-six py-5">
        <div class="container">
            <div class="blog-top-contents  mb---80 d-flex justify-content-between align-items-center">
                <div class="section-title-area-six">
                    <div class="section-title primary-color">নোটিশ এবং ইভেন্ট
                    </div>
                </div>
                <a href="coureses-grid.html" class="all-news">All News <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="blog-section-inner">
                <div class="row align-center justify-content-center">
                    <div class="col-xl-4">
                        <div class="headerNotice">
                            <p class="text-white text-center m-0 p-2">নোটিশ বোর্ড</p>
                        </div>
                        <div class="notice_board_wrapper m-0">
                            <div class="notice_wrapper">
                                <div class="row mb-2 p-2">
                                    <div class="col-xs-3 col-sm-3">
                                        <div class="col-sm-12 text-center notice-month">25</div>
                                        <div class="col-sm-12 text-center notice-date">Apr</div>
                                    </div>
                                    <div class="col-xs-9 col-sm-9">
                                        <div class="row">
                                            <p class="mb-2">নিয়োগ পরীক্ষার আসন বিন্যাস</p><a class="read-more"
                                                href="#" target="_blank">Read more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div>
                            <h3>পরবর্তী ইভেন্ট</h3>
                        </div>
                        <div class="maximized-part">
                            <div class="blog-picture"><a href="blog-details.html"><img loading="lazy"
                                        src="./assets/img/events/gpa-5.00.webp" alt="blog-picture"></a></div>
                            <div class="blog-date">30 May, 2024</div>
                            <div class="blog-title"><a href="blog-details.html">জিপিএ ৫.০০ প্রাপ্ত শিক্ষার্থীদের
                                    সংবর্ধনা অনুষ্ঠান</a></div>
                            <div class="read-more-div"><a href="blog-details.html" class="read-more">Read more
                                    <i class="fa-solid fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 d-none">
                        <div class="minimized-part">
                            <div class="blog-item">
                                <div class="blog-picture"><a href="/blog-details"><img loading="lazy"
                                            src="assets/img/events/3.webp" alt="blog-picture"></a>
                                </div>
                                <div class="content">
                                    <div class="blog-date">10 February, 2022</div>
                                    <div class="blog-title"><a href="/blog-details">Course Description from
                                            the Academic Calendar.</a></div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-picture"><a href="/blog-details"><img loading="lazy"
                                            src="assets/img/events/3.webp" alt="blog-picture"></a>
                                </div>
                                <div class="content">
                                    <div class="blog-date">10 February, 2022</div>
                                    <div class="blog-title"><a href="/blog-details">A course outline or
                                            syllabus also works as a guide.</a></div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-picture"><a href="/blog-details"><img loading="lazy"
                                            src="assets/img/events/3.webp" alt="blog-picture"></a>
                                </div>
                                <div class="content">
                                    <div class="blog-date">10 February, 2022</div>
                                    <div class="blog-title"><a href="blog-details.html">Course Description from
                                            the Academic Calendar.</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--================= Notice Section End Here ================= -->

    <!--================= Campus Section Start Here =================-->
    <div class="campus-section-six">
        <div class="row">
            <div class="col-xl-6 col-lg-12 p-0">
                <div class="campus-picture"><img style="background-attachment: fixed"
                        src="assets/img/events/college_life.webp" loading="lazy" alt="campus-picture"></div>
            </div>
            <div class="col-xl-6 p-0">
                <div class="contents p-5">
                    <h1 class="campus-title">প্রতিষ্ঠানের সুযোগ-সুবিধা</h1>
                    <p>এই কলেজে রয়েছে শীতাতপ নিয়ন্ত্রিত ক্লাসরুম, ডিজিটাল বোর্ড, বিজ্ঞান চর্চার জন্য আধুনিক ল্যাবরেটরি,
                        প্রযুক্তিগত দক্ষতা অর্জনের জন্য রয়েছে কম্পিউটার ল্যাব, পড়ার জন্য লাইব্রেরীতে রয়েছে সময়োপযোগী
                        পাঠ্যপুস্তক। প্রত্যেক শিক্ষার্থীদের কলেজে ব্যবহৃত সরঞ্জামাদি রাখার জন্য রয়েছে পৃথক লকারের ব্যবস্থা।
                    </p>
                    <div class="campus-dropdown">
                        <div class="campus-dropdown-item">
                            <div class="showed d-flex align-items-center">
                                <div class="dropdown-icon"><i class="fa-solid fa-angle-right"></i></div>
                                <div class="title">শীতাতপ নিয়ন্ত্রিত ক্লাসরুম</div>
                            </div>
                            <div class="hidden-content">
                                <p>এই কলেজে প্রতিটি ক্লাসরুম শীতাতপ নিয়ন্ত্রিত । </p>
                            </div>
                        </div>
                        <div class="campus-dropdown-item">
                            <div class="showed d-flex align-items-center">
                                <div class="dropdown-icon"><i class="fa-solid fa-angle-right"></i></div>
                                <div class="title">ডিজিটাল বোর্ড</div>
                            </div>
                            <div class="hidden-content">
                                <p>ক্লাসরুমে রয়েছে ডিজিটাল বোর্ড যাতে প্রয়োজনীয় এ্যানিমেশন এর মাধ্যমে শিক্ষার্থীরা পাঠ ভালো
                                    করে বুঝতে পারে।</p>
                            </div>
                        </div>
                        <div class="campus-dropdown-item">
                            <div class="showed d-flex align-items-center">
                                <div class="dropdown-icon"><i class="fa-solid fa-angle-right"></i></div>
                                <div class="title">শিক্ষার্থীদের পৃথক লকারের ব্যবস্থা</div>
                            </div>
                            <div class="hidden-content">
                                <p>ছেলে-মেয়ে আলাদা আলাদা শ্রেণী কক্ষের পাশাপাশি রয়েছে পার্সোনাল জিনিস রাখার জন্য রয়েছে
                                    লকারের ব্যবস্থা।</p>
                            </div>
                        </div>
                    </div>
                    <button class="home-six-btn mt---30"><a href="/admission-apply">এখনই ভর্তির আবেদন করুন</a></button>
                </div>
            </div>
        </div>
    </div>
    <!--================= Campus Section End Here =================-->

    <!--================= Gallary Section Start Here ================= -->
    <div class="gallery-secton-six py-5">
        <div class="section-title-area-six">
            <div class="section-title mb-5 text-center primary-color">কো-কারিকুলাম কার্যক্রম
            </div>
        </div>
        <div class="row align-items-center">
            <img class="col-md-2 col-lg-2 col-sm-12" src="assets/img/clubs/bncc.webp" alt="gallary-image"
                loading="lazy" />
            <img class="col-md-2 col-lg-2 col-sm-12" src="assets/img/clubs/quran_club.webp" alt="gallary-image"
                loading="lazy" />
            <img class="col-md-2 col-lg-2 col-sm-12" src="assets/img/clubs/rover_scout.webp" alt="gallary-image"
                loading="lazy" />
            <img class="col-md-2 col-lg-2 col-sm-12" src="assets/img/clubs/science_club.webp" alt="gallary-image"
                loading="lazy" />
            <img class="col-md-2 col-lg-2 col-sm-12" src="assets/img/clubs/red_crescent.webp" alt="gallary-image"
                loading="lazy" />
            <img class="col-md-2 col-lg-2 col-sm-12" src="assets/img/clubs/computer_club.webp" alt="gallary-image"
                loading="lazy" />
        </div>

    </div>
    <!--================= Gallary Section End Here ================= -->
    <!--================= Events Section Start Here =================-->
    <div class="events-section-six py-5">
        <div class="container">
            <div class="section-title-area-six text-center mb-5">
                <div class="section-title">ফটো গ্যালারী
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/img/events/1.webp" loading="lazy"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/img/events/2.webp" loading="lazy"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/img/events/3.webp" loading="lazy"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/img/events/4.webp" loading="lazy"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/img/events/5.webp" loading="lazy"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/img/events/6.webp" loading="lazy"
                                alt="event-card-image"></div>
                    </div>
                </div>

            </div>
            <p class="text-center"><a href="/gallery" class="btn w-btn-2 primary-color">সকল ফটো দেখুন</a></p>
        </div>
    </div>
    <!--================= Events Section End Here =================-->
@endsection
