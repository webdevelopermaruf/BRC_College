<!--================= Jquery latest version =================-->
<script src="assets/js/jquery.min.js"></script>
<!--================= Modernizr js =================-->
<script src="assets/js/modernizr-2.8.3.min.js"></script>
<!--================= Bootstrap js =================-->
<script src="assets/js/bootstrap.min.js"></script>
<!--================= Owl Carousel js =================-->
<script src="assets/js/owl.carousel.min.js"></script>
<!--================= Swiper Slider js =================-->
<script src="assets/js/swiper-bundle.min.js"></script>
<!--================= Magnific Popup =================-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--================= Counter up js =================-->
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--================= Wow js =================-->
<script src="assets/js/wow.min.js"></script>
<!--================= menus js =================-->
<script src="assets/js/menus.js"></script>
<!--================= Plugins js =================-->
<script src="assets/js/plugins.js"></script>
<!--================= Main js =================-->
<script src="assets/js/main.js"></script>

<script>
    // dropdown show & hide
    $(".campus-dropdown-item > .showed").on("click", function () {
        var element = $(this).parent(".campus-dropdown-item");
        if (element.hasClass("active")) {
            element.removeClass("active");
        } else {
            element.siblings(".campus-dropdown-item").removeClass('active');
            element.addClass("active");
        }
    });
</script>

@stack('js')