function myImageFunction(e){document.getElementById("img-Box").src=e.src}function myImageFunctionAfter(e){document.getElementById("img-Box-after").src=e.src}jQuery(function(e){"use strict";e(".mean-menu").meanmenu({meanScreenWidth:"991"}),e(window).on("scroll",function(){e(window).scrollTop()>=100?e(".navbar-area").addClass("stickyadd"):e(".navbar-area").removeClass("stickyadd")}),e(window).on("scroll",function(){e(window).scrollTop()>=100?e(".navbar-area-home").addClass("stickyadd-home"):e(".navbar-area-home").removeClass("stickyadd-home")}),e("a.nav-link").on("click",function(t){var a=e(this);e("html, body").stop().animate({scrollTop:e(a.attr("href")).offset().top-60},1e3),t.preventDefault()}),e(".search-btn").on("click",function(){e(".search-popup").toggle(300)}),e(".youtube-popup").magnificPopup({disableOn:320,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1}),e(".home-slider").owlCarousel({loop:!0,margin:0,items:1,smartSpeed:950}),e(".team-slider").owlCarousel({loop:!1,margin:15,autoplay:!0,autoplayHoverPause:!0,autoplayTimeout:8500,smartSpeed:450,responsiveClass:!0,responsive:{0:{items:1},576:{items:2},768:{items:2},1e3:{items:3},1400:{items:4}}}),e(".gallery-slider").owlCarousel({loop:!1,margin:20,autoplay:!0,autoplayHoverPause:!0,autoplayTimeout:8500,smartSpeed:450,responsiveClass:!0,responsive:{0:{items:1},576:{items:2},768:{items:3},1e3:{items:3}}});let t=e(".testimonial-slider").owlCarousel({items:3,dots:!0,margin:10,responsiveClass:!0,responsive:{0:{items:1},576:{items:1},768:{items:1},1e3:{items:1}}});function a(){e(".newsletter-form").addClass("animated shake"),setTimeout(function(){e(".newsletter-form").removeClass("animated shake")},1e3)}function o(t,a){if(t)var o="validation-success";else var o="validation-danger";e("#validator-newsletter").removeClass().addClass(o).text(a)}e(".dot").on("click",function(){t.trigger("to.owl.carousel",[e(this).index(),300]),e(".dot").removeClass("active"),e(this).addClass("active")}),e(".client-slider").owlCarousel({loop:!0,margin:20,items:1,smartSpeed:950}),e(".partner-slider").owlCarousel({loop:!0,nav:!1,dots:!1,smartSpeed:2e3,margin:30,autoplayHoverPause:!0,autoplay:!0,responsive:{0:{items:2},768:{items:3},1024:{items:4},1200:{items:5}}}),e("body").append("<div class='go-top'><i class='envy envy-angle-up'></i></div>"),e(window).on("scroll",function(){var t=e(window).scrollTop();t>600&&e(".go-top").addClass("active"),t<600&&e(".go-top").removeClass("active")}),e(".go-top").on("click",function(){e("html, body").animate({scrollTop:"0"},500)}),setInterval(function(){var t,a,o,s,n,i,l;t=Date.parse(t=new Date("September 20, 2021 17:00:00 PDT"))/1e3,s=Math.floor((o=t-(a=Date.parse(a=new Date)/1e3))/86400),n=Math.floor((o-86400*s)/3600),i=Math.floor((o-86400*s-3600*n)/60),l=Math.floor(o-86400*s-3600*n-60*i),n<"10"&&(n="0"+n),i<"10"&&(i="0"+i),l<"10"&&(l="0"+l),e("#days").html(s+"<span>Days</span>"),e("#hours").html(n+"<span>Hours</span>"),e("#minutes").html(i+"<span>Minutes</span>"),e("#seconds").html(l+"<span>Seconds</span>")},0),e(".newsletter-form").validator().on("submit",function(e){e.isDefaultPrevented()?(a(),o(!1,"Please enter your email correctly.")):e.preventDefault()}),e(".newsletter-form").ajaxChimp({url:"https://hibootstrap.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9",callback:function t(s){"success"===s.result?(e(".newsletter-form")[0].reset(),o(!0,"Thank you for subscribing!"),setTimeout(function(){e("#validator-newsletter").addClass("hide")},4e3)):a()}}),e(window).on("load",function(t){e(".preloader-main").delay(2e3).queue(function(){e(this).remove()})});var s=e(".video-popup__iframe"),n=e(".video-popup__inner");e("html").on("click",".openVideo",function(t){n=e(".video-popup__inner");var a=e(this).attr("data-link"),o=/\w+$/i.exec(a)[0];s.attr("src","https://www.youtube.com/embed/"+o+"?autoplay=1&rel=0&enablejsapi=1&playerapiid=ytplayer"),e(".video-popup").fadeIn();var i=n.width();n.height(9*i/16)}),e(".closeVideo").on("click",function(t){s.attr("src",""),e(".video-popup").fadeOut()}),e(window).resize(function(t){e("body").width();var a=n.width();n.height(9*a/16)})}(jQuery)),document.addEventListener("DOMContentLoaded",function(){let e=document.getElementById("img-Box"),t=document.getElementById("cross-cancel"),a=document.getElementById("appDetailAfter"),o=document.getElementById("toolsafter"),s=document.getElementById("footerafter");e&&t&&a&&o&&s&&(e.addEventListener("click",function(){a.style.display="block",o.style.display="none",s.style.display="none"}),t.addEventListener("click",function(){a.style.display="none",o.style.display="block",s.style.display="block"}))});