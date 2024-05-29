 <!--================= Footer Section Start Here =================-->
 <footer id="react-footer" class="react-footer home-main">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-30">
                    <div class="footer-widget footer-widget-1">
                        <h5 class="footer-subtitle"> সুশিক্ষাই পারে একজন শিক্ষার্থীকে সৎ,  দক্ষ দেশপ্রেমিক ও  <br>
                            মানবিক মূল্যবোধ সম্পন্ন সুনাগরিক হিসেবে গড়ে তুলতে</h5>
                        <ul class="footer-address">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-phone">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg><a href="tel:{{json_decode($site_settings->site_contact)->hotline}}"> {{json_decode($site_settings->site_contact)->hotline}} </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg><a href="mailto:{{json_decode($site_settings->site_contact)->social->email}}"> {{json_decode($site_settings->site_contact)->social->email}} </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-30">
                    <div class="footer-widget footer-widget-2">
                        <h3 class="footer-title">About Us</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="/chairman-message">Chairman Message</a></li>
                                <li><a href="/principal-message">Principal Message</a></li>
                                <li><a href="/governing-body">Governing Body</a></li>
                                <li><a href="/admission-apply">Admission</a></li>
                                <li><a href="/academic-calendar">Academic Calendar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-30">
                    <div class="footer-widget footer-widget-3">
                        <h3 class="footer-title">Useful Links</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="#event">Event</a></li>
                                <li><a href="/notices">Notices</a></li>
                                <li><a href="/results">Results</a></li>
                                <li><a href="/prospectus">Prospectus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="react-copy-left">Copyright © 2024 <a href="index-six.html#">BRC</a> All Rights Reserved.
                Developed by <a href="https://devounity.com">Devounity Soft Solution</a>
            </div>
            <div class="react-copy-right">
                <ul class="social-links">
                    <li class="follow">Follow us</li>
                    <li><a href="{{json_decode($site_settings->site_contact)->social->facebook}}"><span aria-hidden="true" class="social_facebook"></span></a>
                    </li>
                    </li>
                    <li><a href="{{json_decode($site_settings->site_contact)->social->youtube}}"><span aria-hidden="true" class="social_youtube"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--================= Footer Section End Here =================-->