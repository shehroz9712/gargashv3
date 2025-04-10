   <!-- jQuery (First) -->
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
   </script>
   <!-- Other Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
   <script src="{{ asset('assets/user/slick/slick.min.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
   <!-- Main JS -->
   <script src="{{ asset('assets/user/js/main.js') }}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <script>
       toastr.options = {
           "closeButton": true,
           "progressBar": false,
           "positionClass": "toast-top-right",
           "preventDuplicates": true,
           "showDuration": "30000",
           "hideDuration": "10000",
           "timeOut": "50000",
           "extendedTimeOut": "10000",
           "showEasing": "swing",
           "hideEasing": "linear",
           "showMethod": "fadeIn",
           "hideMethod": "fadeOut",
           "closeButton": true,
           "progressBar": true
       }

       @if (Session::has('success'))

           toastr.success("{{ session('success') }}");
       @endif

       @if (!empty($errors->all()))
           @foreach ($errors->all() as $error)
               toastr.error("{{ $error }}")
           @endforeach
       @endif

       @if (Session::has('error'))

           toastr.error("{{ session('error') }}");
       @endif

       @if (Session::has('info'))

           toastr.info("{{ session('info') }}");
       @endif

       @if (Session::has('warning'))

           toastr.warning("{{ session('warning') }}");
       @endif
   </script>
   <script>
       // Detect Device
       document.getElementById('device_type').value = navigator.userAgent;

       // You can get IP from backend or services like:
       fetch('https://api.ipify.org?format=json')
           .then(res => res.json())
           .then(data => {
               document.getElementById('ip_address').value = data.ip;
           });
   </script>
   <!-- Initialize Scripts -->
   <script>
       $(document).ready(function() {
           new WOW().init();
           AOS.init();
       });
       // RTL Support
       document.addEventListener("DOMContentLoaded", function() {
           const isRTL = document.documentElement.dir === "rtl";
           if (isRTL) {
               let rtlScript = document.createElement("script");
               rtlScript.src = "assets/js/rtl.js";
               document.body.appendChild(rtlScript);
           }
       });
       let brand_section_open_El = document.querySelector(".brand-section-open");
       let open_brand_section_El = document.querySelector(".open-brand-section");
       brand_section_open_El.addEventListener("click", () => {
           open_brand_section_El.classList.toggle("show")
       })
   </script>

<script>
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.site-header');
        const headerBg = document.querySelector('.header-bg');
        const topReading = document.querySelector('.top-reading');
        const scrollPosition = window.scrollY;

        if (scrollPosition > 50) { // Adjust this value as needed
            header.classList.add('scrolled');
            headerBg.classList.add('scrolled');
            topReading.style.display = 'none'; // Hide top-reading when scrolled down
        } else {
            header.classList.remove('scrolled');
            headerBg.classList.remove('scrolled');
            topReading.style.display = 'block'; // Show top-reading when at top
        }
    });
</script>

   <script>
       // Get the button:
       let mybutton = document.getElementById("myBtn");

       // When the user scrolls down 20px from the top of the document, show the button
       window.onscroll = function() {
           scrollFunction()
       };

       function scrollFunction() {
           if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
               mybutton.classList.add("show");
               mybutton.style.display = "block";
           } else {
               mybutton.classList.remove("show");
               mybutton.style.display = "none";
           }
       }

       // When the user clicks on the button, scroll to the top of the document
       function topFunction() {
           document.body.scrollTop = 0; // For Safari
           document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
       }
   </script>
