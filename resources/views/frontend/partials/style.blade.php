<!-- custom css link-->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/require.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

{{-- Contact style --}}
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pages/contact.css') }}">
{{-- portfolio --}}
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pages/portfolio.css') }}">
{{-- Services --}}
<link rel="stylesheet" href="{{ asset('frontend/assets/css/pages/service.css') }}">

{{-- style api dokumentasi --}}
<style>
    .profile-img {
        border-radius: 50%;
        width: 200px;
        height: 200px;
        object-fit: cover;
    }

    .info-container {
        margin-top: 20px;
    }

    .social-links a {
        margin-right: 15px;
    }
</style>

{{-- style bintang testimonial --}}
<style>
    .rating {
        display: inline-flex;
        direction: rtl;
        /* Membalikkan urutan bintang */
    }

    .star {
        font-size: 24px;
        /* Ukuran bintang */
        color: #e0e0e0;
        /* Warna bintang kosong */
        transition: color 0.2s ease-in-out;
        /* Transisi warna untuk efek hover */
        margin: 0 2px;
        /* Jarak antar bintang */
        cursor: pointer;
        /* Pointer saat hover */
    }

    .star.filled {
        color: #ffc107;
        /* Warna bintang yang terisi */
    }

    .star:hover,
    .star:hover~.star {
        color: #ffc107;
        /* Warna bintang saat di-hover */
    }
</style>
