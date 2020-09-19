$(document).ready(function() {

    // // Preloader
    // $(window).on('load', function() {
    //     if ($('#preloader').length) {
    //         $('#preloader').delay(20).fadeOut('slow', function() {
    //             $(this).remove();
    //         });
    //     }
    // });

    $(".menu-open").click(function() {
        $("#menu").removeClass("d-none").addClass("fadeInDown");
    });

    $(".close-menu").click(function() {
        $("#menu").addClass("d-none ");
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $("#light-slider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

        addClass: '',
        mode: "fade",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        speed: 400, //ms'
        auto: false,
        pauseOnHover: false,
        loop: false,
        slideEndAnimation: true,
        pause: 2000,

        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',

        rtl: false,
        adaptiveHeight: false,

        vertical: false,
        verticalHeight: 500,
        vThumbWidth: 100,

        thumbItem: 10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',

        enableTouch: true,
        enableDrag: true,
        freeMove: true,
        swipeThreshold: 40,

        responsive: [],

        onBeforeStart: function(el) {},
        onSliderLoad: function(el) {},
        onBeforeSlide: function(el) {},
        onAfterSlide: function(el) {},
        onBeforeNextSlide: function(el) {},
        onBeforePrevSlide: function(el) {}
    });

    var slider = $("#light-slider").lightSlider();
    slider.goToSlide(3);
    slider.goToPrevSlide();
    slider.goToNextSlide();
    slider.getCurrentSlideCount();
    slider.refresh();
    slider.play();
    slider.pause();
    slider.destroy();

    function showInstallPromotionn() {
        var a2hsBtn = document.querySelector(".ad2hs-prompt");
        a2hsBtn.style.display = "block";
        a2hsBtn.addEventListener("click", addToHomeScreen);
    }

    let deferredPrompt;

    window.addEventListener('beforeinstallprompt', (e) => {
        // Prevent the mini-infobar from appearing on mobile
        e.preventDefault();
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Update UI notify the user they can install the PWA
        showInstallPromotion();
    });

    function addToHomeScreen() {
        var a2hsBtn = document.querySelector(".ad2hs-prompt"); // hide our user interface that shows our A2HS button a2hsBtn.style.display = 'none'; // Show the prompt deferredPrompt.prompt(); // Wait for the user to respond to the prompt
        deferredPrompt.userChoice.then(function(choiceResult) {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
            } else {
                console.log('User dismissed the A2HS prompt');
            }
            deferredPrompt = null;
        });
    }
});