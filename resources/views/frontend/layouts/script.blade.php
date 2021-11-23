{{-- <!-- Jquery -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/jquery-ui.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/bootstrap.min.js') }}"></script>
<!-- Color JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/colors.js') }}"></script>
<!-- Slicknav JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/slicknav.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/owl-carousel.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/magnific-popup.js') }}"></script>
<!-- Waypoints JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/waypoints.min.js') }}"></script>
<!-- Countdown JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/finalcountdown.min.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/nicesellect.js') }}"></script>
<!-- Flex Slider JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/flex-slider.js') }}"></script>
<!-- ScrollUp JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/scrollup.js') }}"></script>
<!-- Onepage Nav JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/onepage-nav.min.js') }}"></script>
<!-- Easing JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/easing.js') }}"></script>
<!-- Active JS -->
<script src="{{ asset('frontend/Eshop Free/Template Main/cjs/active.js') }}"></script> --}}


<!-- Jquery -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- Color JS -->
<script src="{{ asset('frontend/js/colors.js') }}"></script>
<!-- Slicknav JS -->
<script src="{{ asset('frontend/js/slicknav.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('frontend/js/owl-carousel.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('frontend/js/magnific-popup.js') }}"></script>
<!-- Waypoints JS -->
<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
<!-- Countdown JS -->
<script src="{{ asset('frontend/js/finalcountdown.min.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('frontend/js/nicesellect.js') }}"></script>
<!-- Flex Slider JS -->
<script src="{{ asset('frontend/js/flex-slider.js') }}"></script>
<!-- ScrollUp JS -->
<script src="{{ asset('frontend/js/scrollup.js') }}"></script>
<!-- Onepage Nav JS -->
<script src="{{ asset('frontend/js/onepage-nav.min.js') }}"></script>
<!-- Isotope -->
<script src="{{ asset('frontend/js/isotope/isotope.pkgd.min.js') }}"></script>
<!-- Easing JS -->
<script src="{{ asset('frontend/js/easing.js') }}"></script>

<!-- Active JS -->
<script src="{{ asset('frontend/js/active.js') }}"></script>


@yield('script')
<script>
    setTimeout(function() {
        $('.alert').slideUp();
    }, 5000);
    $(function() {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
            event.preventDefault();
            event.stopPropagation();

            $(this).siblings().toggleClass("show");


            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

        });
    });
</script>
