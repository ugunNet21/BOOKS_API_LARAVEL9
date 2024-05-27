 <!-- #FOOTER-->
 <footer class="footer">
     <div class="container">

         <ul class="social-list">

             <!-- Social Media Links -->
<ul class="social-list">
    @if ($footer)
        @if ($footer->facebook)
            <li>
                <a href="https://www.facebook.com/{{ $footer->facebook }}" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>
        @endif

        @if ($footer->twitter)
            <li>
                <a href="https://www.twitter.com/{{ $footer->twitter }}" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
        @endif

        @if ($footer->instagram)
            <li>
                <a href="https://www.instagram.com/{{ $footer->instagram }}" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
        @endif

        @if ($footer->linkedin)
            <li>
                <a href="https://www.linkedin.com/in/{{ $footer->linkedin }}" class="social-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
        @endif

        @if ($footer->youtube)
            <li>
                <a href="https://www.youtube.com/{{ $footer->youtube }}" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                </a>
            </li>
        @endif

        @if ($footer->github)
            <li>
                <a href="https://www.github.com/{{ $footer->github }}" class="social-link">
                    <ion-icon name="logo-github"></ion-icon>
                </a>
            </li>
        @endif
    @else
        <li>No social media links available.</li>
    @endif
</ul>


         </ul>

         <p class="text-center">&copy; {{ date('Y') }} Gugun Gunawan. All rights reserved.</p>

     </div>
 </footer>
