(function ($) {
  "use strict";

  //Menu Code Here
  $("#backmenu").backResponsiveMenu({
    resizeWidth: '991',
    animationSpeed: 'medium',
    accoridonExpAll: false
  });

  //preloader
  if(window.location.pathname != '/'){
    $(window).on('load', function () {
      $("#react__preloader").delay(500).fadeOut(300);
      $("#react__preloader").delay(500).fadeOut(300);
    })
  }
  
  //Menu Active Here
  var path = window.location.href;
  $('.react-menus li a').each(function () {
    if (this.href === path) {
      $(this).addClass('react-current-page');
    }
  });

  // Sticky Menu
  var header = $('.react-header');
  var win = $(window);
  win.on('scroll', function () {
    var scroll = win.scrollTop();
    if (scroll < 100) {
      header.removeClass("react-sticky");
    } else {
      header.addClass("react-sticky");
    }
  });

  // magnificPopup init
  var imagepopup = $('.image-popup');
  if (imagepopup.length) {
    $('.image-popup').magnificPopup({
      type: 'image',
      callbacks: {
        beforeOpen: function () {
          this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure animated zoomInDown');
        }
      },
      gallery: {
        enabled: true
      }
    });
  }


  //Taggle Js
  $('#menu-btn').on('click', function (e) {
    $(this).toggleClass("back__close");
    e.preventDefault();
  });

  // search-bar toggle
  $(".search-btn").click(function () {
    $('.search-input').toggleClass('show');
  });


  if ($('.gallery-Slider-6').length) {
    $('.gallery-Slider-6').owlCarousel({
      loop: true,
      items: 1,
      center: true,
      margin: 0,
      nav: true,
      dots: false,
      smartSpeed: 800,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
          center: true,
        },
        575: {
          items: 2,
          center: true,
        },
        767: {
          items: 4,
          center: true,
        },
        1200: {
          items: 6,
        },
      }
    })
  }

  // Skill bar 
  var skillbar = $('.skillbars');
  if (skillbar.length) {
    $('.skillbars').skillBars({
      from: 0,
      speed: 4000,
      interval: 100,
      decimals: 0,
    });
  }

  //filter js
  var pifilter = $('.react-grid');
  if (pifilter.length) {
    $('.react-grid').imagesLoaded(function () {
      $('.react-filter').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
          filter: filterValue
        });
      });
      var $grid = $('.react-grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
          columnWidth: '.grid-item',
        }
      });
    });
  }

  // portfolio Filter
  var filterbutton = $('.react-filter button');
  if (filterbutton.length) {
    $('.react-filter button').on('click', function (event) {
      $(this).siblings('.active').removeClass('active');
      $(this).addClass('active');
      event.preventDefault();
    });
  }

  // Course Portfolio Filter
  var pifilter = $('.grid');
  if (pifilter.length) {
    $('.grid').isotope({
      itemSelector: '.grid-item',
    });
    $('.filter-button-group').on('click', 'li', function () {
      var filterValue = $(this).attr('data-filter');
      $('.grid').isotope({ filter: filterValue });
      $('.filter-button-group li').removeClass('active');
      $(this).addClass('active');
    });
  }


  //Videos popup jQuery 
  var popup = $('.custom-popup');
  if (popup.length) {
    $('.custom-popup').magnificPopup({
      disableOn: 10,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });
  }


  // scrollTop init
  var pitotop = $('#backscrollUp');
  if (pitotop.length) {
    win.on('scroll', function () {
      if (win.scrollTop() > 350) {
        pitotop.fadeIn();
      } else {
        pitotop.fadeOut();
      }
    });
    pitotop.on('click', function () {
      $("html,body").animate({
        scrollTop: 0
      }, 500)
    });
  }
  var lastScrollTop = 0;
  $(window).scroll(function (event) {
    var st = $(this).scrollTop();
    if (st > lastScrollTop) {
      $("#backscrollUp").removeClass("react__up___scroll");
    } else {
      $("#backscrollUp").addClass("react__up___scroll");
    }
    lastScrollTop = st;
  });


  $(document).on('click', '.navigation-btn', function () {
    var show = $(this).data('show');
    $(show).removeClass("hide").siblings().addClass("hide");
  });

  $(document).on('click', '.navigation-btn', function () {
    $(this).addClass('active').siblings().removeClass('active')
  })

  //   click to scroll
  $(document).ready(function () {
    $(".scrollDown").click(function (event) {
      $("html, body").animate({
        scrollTop: "+=800px"
      }, 800);
    });
  });

  // Image popups
  $('#image-popups').magnificPopup({
    delegate: 'a',
    type: 'image',
    image: {
      verticalFit: true
    },
    removalDelay: 500,
    callbacks: {
      beforeOpen: function () {
        this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
        this.st.mainClass = this.st.el.attr('data-effect');
      }
    },
    closeOnContentClick: false,
    midClick: true
  });


  // Home Seven QNA Dropdown
  $(document).on('click', '.question', function () {
    var element = $(this).parent(".qna-dropdown-item");
    element.toggleClass('show').siblings().removeClass('show')
  })


})(jQuery);


function chngActiveTab(activetab, gototab) {
  var activeTab = document.querySelector("#" + activetab);
  var gotoTab = document.querySelector("#" + gototab);

  activeTab.classList.remove("active")
  gotoTab.classList.add("active");

  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function onObjectChange(item) {
  const objectBox = document.querySelector("object");
  objectBox.data = item.dataset.object;
  console.log(item.dataset.object);
}

function hideElement() {
  const mainForm = document.querySelector(".mainForm");
  const beforerules = document.querySelector(".beforerules");

  beforerules.innerHTML = '';
  mainForm.classList.remove('hide');
}