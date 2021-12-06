 <button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <script src="{{ asset('jobbey/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('jobbey/assets/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('jobbey/assets/js/i18n/datepicker.en.js') }}"></script>
    <script src="{{ asset('jobbey/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('jobbey/assets/vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('jobbey/assets/vendor/semantic/semantic.min.js') }}"></script>
    <script src="{{ asset('jobbey/assets/js/jquery.range-min.js') }}"></script>
    <script src="{{ asset('jobbey/assets/js/custom1.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('jobbey/assets/js/mycustom.js') }}"></script>
    <script>
    window.oncontextmenu = function() {
        return true;
    }
    $(document).keydown(function(event) {
        if (event.keyCode == 123) {
            return false;
        } else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
            return false;
        }
    });



    </script>