<nav class="navbar">
    <div class="navbar-brand">
        <button class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
    </div>
    <div id="navbarMenu" class="navbar-menu">
        <ul class="navbar-start">
            <li><a href="{{ route('beranda') }}" target="_blank">Beranda</a></li>
            <li><a href="{{ route('admin.dashboard') }} "
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            </li>
            <li><a href="{{ route('abouts.index') }}"
                    class="{{ request()->routeIs('abouts.index') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('clients.index') }}"
                    class="{{ request()->routeIs('clients.index') ? 'active' : '' }}">Client</a></li>
            <li><a href="{{ route('testimonials.index') }}"
                    class="{{ request()->routeIs('testimonials.index') ? 'active' : '' }}">Testimonial</a></li>
            <li><a href="{{ route('skills.index') }}"
                    class="{{ request()->routeIs('skills.index') ? 'active' : '' }}">Skill</a></li>
            <li><a href="{{ route('footers.index') }}"
                    class="{{ request()->routeIs('footers.index') ? 'active' : '' }}">Footer</a></li>
            <!-- Menu Banner -->
            <li class="has-dropdown">
                <a href="{{ route('banner.index') }}"
                    class="{{ request()->routeIs('banner.index') ? 'active' : '' }}">Banner</a>
                <ul class="dropdown">
                    <li><a href="{{ route('banner_categories.index') }}"
                            class="{{ request()->routeIs('banner_categories.index') ? 'active' : '' }}">Banner
                            Category</a></li>
                </ul>
            </li>

            <li class="has-dropdown">
                <a href="{{ route('layanans.index') }}"
                    class="{{ request()->routeIs('layanans.index') ? 'active' : '' }}">Service</a>
                <ul class="dropdown">
                    <li><a href="{{ route('layanans_categories.index') }}"
                            class="{{ request()->routeIs('layanans_categories.index') ? 'active' : '' }}">Service
                            Category</a></li>
                </ul>
            </li>

            <li class="has-dropdown">
                <a href="{{ route('portfolios.index') }}"
                    class="{{ request()->routeIs('portfolios.index') ? 'active' : '' }}">Portfolio</a>
                <ul class="dropdown">
                    <li><a href="{{ route('portfolios_categries.index') }}"
                            class="{{ request()->routeIs('portfolios_categries.index') ? 'active' : '' }}">Portfolio
                            Category</a></li>
                </ul>
            </li>

            <li><a href="{{ route('contacts.index') }}"
                    class="{{ request()->routeIs('contacts.index') ? 'active' : '' }}">Contact</a></li>
            <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        </ul>
    </div>
</nav>
