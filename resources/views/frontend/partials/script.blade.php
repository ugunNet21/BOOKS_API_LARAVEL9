 <!-- SweetAlert2 CSS -->
 <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.0/dist/sweetalert2.min.css" rel="stylesheet">
 <!-- SweetAlert2 JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- sweet alert -->
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         @if (session('success'))
             Swal.fire({
                 icon: 'success',
                 title: 'Success',
                 text: '{{ session('success') }}',
                 timer: 3000,
                 showConfirmButton: false
             });
         @elseif (session('error'))
             Swal.fire({
                 icon: 'error',
                 title: 'Error',
                 text: '{{ session('error') }}',
                 timer: 3000,
                 showConfirmButton: false
             });
         @endif
     });
 </script>

 <!--custom js link-->
 <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

 <!--ionicon-->
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
