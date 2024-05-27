 <!--#HEADER-->
 <header class="header" data-header>
     <div class="container">

        <a href="/" class="logo">
            @if ($footer && $footer->logo)
                <img src="{{ asset('storage/' . $footer->logo) }}" width="151" height="28" alt="Ugun home">
            @else
                <img src="{{ asset('frontend/assets/images/logo.png') }}" width="151" height="28" alt="Ugun home">
            @endif
        </a>


         <nav class="navbar" data-navbar>
             <ul class="navbar-list">

                 <li class="navbar-item">
                     <a href="/"
                         class="label-lg navbar-link has-after {{ request()->routeIs('beranda') ? 'active' : '' }}">Home</a>
                 </li>

                 <li class="navbar-item">
                     <a href="{{ route('services') }}"
                         class="label-lg navbar-link has-after {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                 </li>

                 <li class="navbar-item">
                     <a href="{{ route('portfolio') }}"
                         class="label-lg navbar-link has-after {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
                 </li>

                 <li class="navbar-item">
                     <a href="{{ route('contact.us') }}"
                         class="label-lg navbar-link has-after {{ request()->routeIs('contact.us') ? 'active' : '' }}">Contact</a>
                 </li>
                 <li class="navbar-item">
                     <a href="{{ route('get-api') }}"
                         class="label-lg navbar-link has-after {{ request()->routeIs('get-api') ? 'active' : '' }}">RESTful API</a>
                 </li>

             </ul>
         </nav>

         <a href="{{ route('contact.us') }}" class="btn btn-primary">Contact Now</a>

         <button class="nav-toggle-btn" aria-label="menu" data-nav-toggler>
             <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
         </button>

     </div>
 </header>
