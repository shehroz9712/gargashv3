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
   <!-- SweetAlert2 JS CDN include karna na bhoolen -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <script>
    document.addEventListener('DOMContentLoaded', function () {
        function showAlert(type, title, message) {
            Swal.fire({
                icon: type,
                title: title,
                html: message, // using HTML allows line breaks if needed
                confirmButtonColor: {
                    success: '#e6b110',
                    error: '#d33',
                    info: '#17a2b8',
                    warning: '#f0ad4e'
                }[type] || '#3085d6',
            });
        }

        @if (Session::has('success'))
            showAlert('success', 'Success', `{!! addslashes(session('success')) !!}`);
        @endif

        @if (Session::has('error'))
            showAlert('error', 'Error', `{!! addslashes(session('error')) !!}`);
        @endif

        @if (Session::has('info'))
            showAlert('info', 'Info', `{!! addslashes(session('info')) !!}`);
        @endif

        @if (Session::has('warning'))
            showAlert('warning', 'Warning', `{!! addslashes(session('warning')) !!}`);
        @endif

        @if ($errors->any())
            const errorMessages = `{!! implode('<br>', $errors->all()) !!}`;
            showAlert('error', 'Validation Error', errorMessages);
        @endif
    });
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


           if (scrollPosition > 50) {
               header.classList.add('scrolled');
               headerBg.classList.add('scrolled');
               topReading.classList.add('hide'); // slide out
           } else {
               header.classList.remove('scrolled');
               headerBg.classList.remove('scrolled');
               topReading.classList.remove('hide'); // slide in
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
   <!-- Mobile Mega  Menu End here -->
   <script>
       // Brands Mega Menu Open
       $(document).ready(function() {
           let hideTimeout; // Timeout variable for delayed menu hiding
           function resetMenus() {
               $(".category-menu, .all-menu").removeClass("active");
               $(".categoryBtn, .allcategoryBtn").removeClass("active");
           }

           $(".categoryBtn").on("mouseenter", function() {
               clearTimeout(hideTimeout); // Prevent menu from hiding
               resetMenus();
               $(".category-menu").addClass("active");
               $(this).addClass("active");
           });

           $(".allcategoryBtn").on("mouseenter", function() {
               clearTimeout(hideTimeout);
               resetMenus();
               $(".all-menu").addClass("active");
               $(this).addClass("active");
           });

           $(".category-menu, .all-menu, .card").on("mouseenter", function() {
               clearTimeout(hideTimeout); // If inside menu or `.card`, stop hiding
           });

           $(".category-menu, .all-menu, .categoryBtn, .allcategoryBtn, .card").on("mouseleave", function() {
               hideTimeout = setTimeout(() => {
                   resetMenus();
               }, 800); // Delay of 1s before hiding
           });
       });
   </script>
