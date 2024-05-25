@extends('layouts.app')
@section('title', 'Bhulta Residential College :: BRC')

@section('content')
    <!--================= Slider Section Start Here =================-->
    <div class="react-slider-part react-slider-part-six">
        <div class="home-sliders home2 owl-carousel">
            <div class="single-slide">
                <div class="slider-img">
                    <img class="desktop" src="assets/img/slider/slider1.webp" alt="Slider Image 1">
                    <img class="mobile" src="assets/img/slider/slider1m.webp" alt="Slider Image 1">
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
                                <a class="btn bg-primaryColor px-4 py-3 text-white" href="about.html">Admissions</a>
                            </div>
                            <div class="event__video-btn--play event__video-btn--play-six">
                                <a href="https://www.youtube.com/watch?v=e5Hc2B50Z7c"
                                    class="event__video-btn--play-btn event__video-btn--play-btn-six custom-popup">
                                    <img class="video-icon" src="assets/images/home6/Video&#32;icon.png" alt="video-icon">
                                    <em>Watch Intro Video</em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="slider-img">
                    <img class="desktop" src="assets/img/slider/slider2.webp" alt="Slider Image 1">
                    <img class="mobile" src="assets/img/slider/slider2m.webp" alt="Slider Image 1">
                    <div id="overlay"></div>
                </div>
                <div class="container">
                    <div class="slider-content">
                        <div class="content-part">
                            <span class="slider-pretitle">Great Quality Social life</span>
                            <h2 class="slider-title wow fadeInUp" data-wow-duration="2s">
                                Discover the world of<br>
                                possible university.
                            </h2>
                            <div class="slider-btn">
                                <button class="home-six-btn"><a href="about.html">Admissions</a></button>
                            </div>
                            <div class="event__video-btn--play event__video-btn--play-six">
                                <a href="https://www.youtube.com/watch?v=e5Hc2B50Z7c"
                                    class="event__video-btn--play-btn event__video-btn--play-btn-six custom-popup">
                                    <img class="video-icon" src="assets/images/home6/Video&#32;icon.png" alt="video-icon">
                                    <em>Watch Intro Video</em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="slider-img">
                    <img class="desktop" src="assets/img/slider/slider3.webp" alt="Slider Image 1">
                    <img class="mobile" src="assets/img/slider/slider3m.webp" alt="Slider Image 1">
                    <div id="overlay"></div>
                </div>
                <div class="container">
                    <div class="slider-content">
                        <div class="content-part">
                            <span class="slider-pretitle">Great Quality Social life</span>
                            <h2 class="slider-title wow fadeInUp" data-wow-duration="2s">
                                Discover the world of<br>
                                possible university.
                            </h2>
                            <div class="slider-btn">
                                <button class="home-six-btn"><a href="about.html">Admissions</a></button>
                            </div>
                            <div class="event__video-btn--play event__video-btn--play-six">
                                <a href="https://www.youtube.com/watch?v=e5Hc2B50Z7c"
                                    class="event__video-btn--play-btn event__video-btn--play-btn-six custom-popup">
                                    <img class="video-icon" src="assets/images/home6/Video&#32;icon.png" alt="video-icon">
                                    <em>Watch Intro Video</em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Slider Section End Here =================-->
    <div class="topbar-area style1">
        <div class="container">
            <div class="d-flex align-items-center">
                <p class="bg-dark text-white p-3 notice_portion">নোটিশ ও বিজ্ঞপ্তি</p>
                <marquee onmouseover="this.stop()" onmouseout="this.start()" id="marquee" scrollamount="5"
                    behaviour="scroll" direction="left">
                    <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quia.</a>
                    <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quia.</a>
                    <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quia.</a>
                    <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quia.</a>
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
                            <div class="content-picture"><img src="assets/img/administration/principle.jpg"
                                    alt=""></div>
                            <div class="content">
                                <div>
                                    <div class="title mb-0">রেশমা সুলতানা</div>
                                    <strong>প্রিন্সিপাল, ভুলতা রেসিডেন্সিয়াল কলেজ</strong>
                                </div>
                                <p class="mt-3">আধুনিক প্রযুক্তির সাথে তালমিলিয়ে একটি আর্দশ শিক্ষা প্রতিষ্ঠান
                                    গড়ে তোলার মধ্য দিয়ে একটি দেশের সামগ্রিক উন্নতি পথ সুগম হয়। আপনারা জেনে খুশি
                                    হবেন ঢাকা সিলেট মহাসড়কের পাশেই (ভুলতা গাউছিয়া) এলাকায় এই প্রথম পূর্ণাঙ্গ
                                    ডিজিটালাইসড, আধুনিক শীতাতপ নিয়ন্ত্রিত শুধুমাত্র উচ্চ মাধ্যমিক বিজ্ঞান
                                    শিক্ষার্থীদের জন্য ভুলতা রেসিডেন্সিয়াল কলেজ নামে একটি স্মার্ট শিক্ষা
                                    প্রতিষ্ঠান প্রতিষ্ঠিত হয়েছে।

                                    ভুলতা রেসিডেন্সিয়াল কলেজ কর্তৃপক্ষ নিশ্চিত করছে যে, একটি সুশৃঙ্খল, আনন্দায়ক
                                    ও চমতকার শিক্ষা পরিবেশ সৃষ্টি করা। যা একবিংশ শতকের চ্যালেঞ্জ মোকাবেলা করার
                                    জন্য শিক্ষার্থী নিজেকে গড়ে তুলতে সক্ষম হবে। সুশিক্ষাই পারে একজন শিক্ষার্থীকে
                                    সত, দক্ষ দেশপ্রেমিক ও মানবিক মূল্যবোধ সম্পন্ন সুনাগরিক হিসেবে গড়ে তুলতে। এই
                                    কলেজের শিক্ষার্থীগণ পাবে একাডেমিক পড়াশুনার পাশাপাশি ধর্মীয় নীতি নৈতিকতার
                                    শিক্ষা।

                                    সুতরাং, আমি মনে প্রাণে বিশ্বাস করি, আপনার ও আপনার সন্তানের স্বপ্নপূরণে ভুলতা
                                    রেসিডেন্সিয়াল কলেজ উল্লেখযোগ্য ভূমিকা পালন করবে।</p>
                            </div>
                        </div>
                        <div class="item chairman hide">
                            <div class="row">
                                <div class="col-6 main_div">
                                    <div class="governing_img"><img src="assets/img/administration/shoeb.jpg"
                                            alt=""></div>
                                    <h4 class="text-dark text-center pt-4 mb-1 font-bold">সোয়েব ভুঁইয়া</h4>
                                    <span class="designation_admin">চেয়ারম্যান ও প্রতিষ্ঠাতা পরিচালক</span>
                                    <p>
                                        ভুলতা রেসিডেন্সিয়াল কলেজের স্ব অর্থায়নে প্রতিষ্ঠিত একটি রাজনৈতিক মুক্ত
                                        শিক্ষা প্রতিষ্ঠান। এই কলেজের প্রধান লক্ষ্য হচ্ছে বিশ্বায়ন ও একবিংশ
                                        শতাব্দীর চ্যালেঞ্জ <a href="#read-more">আরও পড়ুন...</a>


                                        <!-- মোকাবেলার জন্য তাত্ত্বিক শিক্ষাকে বাস্তবতার সঙ্গে সমন্বয় করে পাঠদান করা এবং শিক্ষার্থীদেরকে মানব সম্পদে পরিণত করা।

                                        শিক্ষক ও শিক্ষার্থীর নিবিড় সম্পর্কেই শিক্ষার্থীকে লেখাপড়ার ক্ষেত্রে উতসাহী করে তোলে। যা পরীক্ষার ভালো ফলাফলের ক্ষেত্রে সহায়ক হয়। বিজ্ঞানমনস্ক প্রযুক্তি নির্ভর আধুনিক জাতি গঠনের জন্য জীবনের প্রতিটি ক্ষেত্রে বিজ্ঞানের স্বতঃস্ফূর্ত প্রয়োগ এবং এর ব্যবহারে সক্ষম করে তোলা চেষ্টায় বন্ধ পরিপক ভুলতা রেসিডেন্সিয়াল কলেজের। আমাদের একাদশ শ্রেনির ভর্তি কার্যক্রম, পরীক্ষার ফলাফল, মাসিক বেতন, বিভিন্ন নোটিশ শিক্ষার্থী ও অভিভাবকের নিকট SMS এর মাধ্যমে প্রেরণসহ কলেজের যাবতীয় তথ্য ওয়েব সাইটের মাধ্যমে পাওয়া যাবে।
                                        
                                        এই কলেজে রয়েছে শীতাতপ নিয়ন্ত্রিত ক্লাসরুম, ডিজিটাল বোর্ড, বিজ্ঞান চর্চার জন্য আধুনিক ল্যাবরেটরি, প্রযুক্তিগত দক্ষতা অর্জনের জন্য রয়েছে কম্পিউটার ল্যাব, পড়ার জন্য লাইব্রেরীতে রয়েছে সময়োপযোগী পাঠ্যপুস্তক। প্রত্যেক শিক্ষার্থীদের কলেজে ব্যবহৃত সরঞ্জামাদি রাখার জন্য রয়েছে পৃথক লকারের ব্যবস্থা।
                                        
                                        আশাকরি সবার আন্তরিক প্রচেষ্টা ও সহযোগিতায় প্রতিষ্ঠানটি সাফল্যের শীর্ষে উন্নীত হবে। সবার জন্য শুভকামনা  -->
                                    </p>

                                </div>
                                <div class="col-6 main_div">
                                    <div class="governing_img"><img src="assets/img/administration/sadi.jpg"
                                            alt=""></div>
                                    <h4 class="text-dark text-center pt-4 mb-1 font-bold">মোঃ সাইদুল ইসলাম
                                        সাদি</h4>
                                    <span class="designation_admin">সভাপতি ও প্রতিষ্ঠাতা পরিচালক</span>
                                    <p>
                                        জান ও শক্তির সম্মিলিত শিক্ষার মধ্যেই রয়েছে একটি জাতির উন্নতি। যুগোপযোগী
                                        ও আধুনিক শিক্ষার মানদণ্ডকে সামনে রেখে ভুলতা রেসিডেন্সিয়াল কলেজ
                                        প্রতিষ্ঠিত হয়েছে। <a href="#read-more">আরও পড়ুন...</a>

                                        <!-- একবিংশ শতাব্দীর জ্ঞান বিজ্ঞানের স্রোত ধারায় সুশিক্ষিত জাতি প্রতিষ্ঠিত করা আমাদের মূল লক্ষ্য। আর সুশিক্ষায় শিক্ষিত মানবজাতি
                                        মানবসম্পদে পরিণত হয়। এই অপ্রতিরোধ্য বিজ্ঞানের অগ্রযাত্রায় ভুলতা
                                        রেসিডেন্সিয়াল কলেজ উল্লেখযোগ্য ভূমিকা পালন করবে। ভুলতা রেসিডেন্সিয়াল
                                        কলেজ গতানুগতিক পাঠদানের পাশাপাশি জীবনমুখী শিক্ষা, সহশিক্ষা কার্যক্রমে
                                        অংশগ্রহনের জন্য শিক্ষর্থীদের উতসাহিত করবে। মহান মুক্তিযুদ্ধের আলোকে ভুলতা রেসিডেন্সিয়াল কলেজের শিক্ষর্থীদের বিজ্ঞান
                                        চর্চার পাশাপাশি, বিজ্ঞানের বিভিন্ন বিষয় নিয়ে গবেষনা করে বিশ্বের দরবারে কৃতিত্বের স্বাক্ষর রাখবে।  -->
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
                        frameborder="0" allowfullscreen="true"
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
                            <div class="blog-picture"><a href="blog-details.html"><img
                                        src="./assets/img/events/gpa-5.00.jpg" alt="blog-picture"></a></div>
                            <div class="blog-date">30 May, 2024</div>
                            <div class="blog-title"><a href="blog-details.html">জিপিএ ৫.০০ প্রাপ্ত শিক্ষার্থীদের
                                    সংবর্ধনা অনুষ্ঠান</a></div>
                            <div class="read-more-div"><a href="blog-details.html" class="read-more">Read more
                                    <i class="fa-solid fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="minimized-part">
                            <div class="blog-item">
                                <div class="blog-picture"><a href="blog-details.html"><img
                                            src="assets/images/home6/blog/min1.png" alt="blog-picture"></a>
                                </div>
                                <div class="content">
                                    <div class="blog-date">10 February, 2022</div>
                                    <div class="blog-title"><a href="blog-details.html">Course Description from
                                            the Academic Calendar.</a></div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-picture"><a href="blog-details.html"><img
                                            src="assets/images/home6/blog/min2.png" alt="blog-picture"></a>
                                </div>
                                <div class="content">
                                    <div class="blog-date">10 February, 2022</div>
                                    <div class="blog-title"><a href="blog-details.html">A course outline or
                                            syllabus also works as a guide.</a></div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="blog-picture"><a href="blog-details.html"><img
                                            src="assets/images/home6/blog/min3.png" alt="blog-picture"></a>
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
            <div class="col-xl-6 col-lg-12 p---0">
                <div class="campus-picture"><img src="assets/images/home6/campus/students-walking.jpg"
                        alt="campus-picture"></div>
            </div>
            <div class="col-xl-6 p---0">
                <div class="contents">
                    <h1 class="campus-title">Campus Life</h1>
                    <p>Building a strong sense of community in Greenville school is both important and doable.
                        Our school uses different community.</p>
                    <div class="campus-dropdown">
                        <div class="campus-dropdown-item">
                            <div class="showed d-flex align-items-center">
                                <div class="dropdown-icon"><i class="fa-solid fa-angle-right"></i></div>
                                <div class="title">EXPLORE UNIVERSITY COURSES</div>
                            </div>
                            <div class="hidden-content">
                                <p>Maecenas quisque similique laborum quisquam eaque incidi dunt repellat
                                    proident nisl assumenda.</p>
                            </div>
                        </div>
                        <div class="campus-dropdown-item">
                            <div class="showed d-flex align-items-center">
                                <div class="dropdown-icon"><i class="fa-solid fa-angle-right"></i></div>
                                <div class="title">UNIVERSITY COMMUNITY</div>
                            </div>
                            <div class="hidden-content">
                                <p>Maecenas quisque similique laborum quisquam eaque incidi dunt repellat
                                    proident nisl assumenda.</p>
                            </div>
                        </div>
                    </div>
                    <button class="home-six-btn mt---30"><a href="signup.html">Apply Now</a></button>
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
        <ul class="btn-gallery">
            <div class="owl-carousel gallery-Slider-6">
                <div class="item">
                    <li>
                        <a href="index-six.html#gallery-1" class="btn-gallery">
                            <img src="assets/images/home6/gallary/1.png" alt="gallary-image" />
                        </a>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <a href="index-six.html#gallery-1" class="btn-gallery">
                            <img src="assets/images/home6/gallary/2.png" alt="gallary-image" />
                        </a>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <a href="index-six.html#gallery-1" class="btn-gallery">
                            <img src="assets/images/home6/gallary/3.png" alt="gallary-image" />
                        </a>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <a href="index-six.html#gallery-1" class="btn-gallery">
                            <img src="assets/images/home6/gallary/4.png" alt="gallary-image" />
                        </a>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <a href="index-six.html#gallery-1" class="btn-gallery">
                            <img src="assets/images/home6/gallary/5.png" alt="gallary-image" />
                        </a>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <a href="index-six.html#gallery-1" class="btn-gallery">
                            <img src="assets/images/home6/gallary/6.png" alt="gallary-image" />
                        </a>
                    </li>
                </div>

            </div>
        </ul>


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
                        <div class="event-card-picture"><img src="assets/images/home6/events/3.png"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/images/home6/events/1.png"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/images/home6/events/2.png"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/images/home6/events/1.png"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/images/home6/events/3.png"
                                alt="event-card-image"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-picture"><img src="assets/images/home6/events/2.png"
                                alt="event-card-image"></div>
                    </div>
                </div>

            </div>
            <p class="text-center"><a href="" class="btn w-btn-2 primary-color">সকল ফটো দেখুন</a></p>
        </div>
    </div>
    <!--================= Events Section End Here =================-->
@endsection
