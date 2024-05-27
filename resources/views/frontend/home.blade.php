@extends('frontend.layouts.app')
@section('title', 'Beranda')
@section('content')

    <main>
        <article>

            <!-- #HERO-->
            <section class="section hero" aria-label="home">
                <div class="container">

                    <div class="hero-content">

                        {{-- <p class="hero-subtitle">👋, My name is Annie</p> --}}
                        <p class="hero-subtitle">{{ $getBanner->title ?? '👋, Gugun Gunawan' }}</p>

                        <h1 class="headline-lg">{{ $getBanner->description ?? 'Full-stack Developer' }}</h1>

                        <p class="hero-text body-md"> {{ $getBanner->address ?? 'Street Pasar Sindanglaya' }}
                        </p>

                        {{-- <a href="#" class="btn btn-primary">Let's Start</a> --}}
                        <a href="https://drive.google.com/drive/folders/1kkq_dLMTEx-wlYxMqvOmTbIPc1X-BJVl?usp=sharing"
                            class="btn btn-primary" target="_blank">Download CV
                            (PDF)</a>

                    </div>

                    <figure class="hero-banner">
                        @if ($getBanner && $getBanner->picture)
                            <img src="{{ asset('storage/banner_pictures/' . $getBanner->picture) }}"
                                alt="{{ $getBanner->title }}" width="680" height="645" class="w-100">
                        @else
                            <img src="{{ asset('frontend/assets/images/hero-banner.png') }}" width="680" height="645"
                                alt="Annie, the blonde, dressed in a green hoodie with a smile on her face" class="w-100">
                        @endif
                    </figure>


                </div>
            </section>

            <!-- #CLIENT-->
            <section class="client" aria-label="Trusted client">
                <div class="container">

                    <ul class="slider">
                        @foreach ($getClients as $client)
                            @if ($client->picture)
                                <li class="slider-item">
                                    <img src="{{ asset('storage/client_pictures/' . $client->picture) }}"
                                        style="max-width: 50px;">
                                </li>
                            @else
                                <li class="slider-item">
                                    <img src="{{ asset('frontend/assets/images/client-1.svg') }}" width="130"
                                        height="40" alt="clients" class="w-100">
                                </li>
                            @endif
                        @endforeach


                        <li class="slider-item">
                            <img src="{{ asset('frontend/assets/images/client-2.svg') }}" width="130" height="40"
                                alt="clients" class="w-100">
                        </li>

                        {{-- <li class="slider-item">
                            <img src="{{ asset('frontend/assets/images/client-3.svg') }}" width="130" height="40"
                                alt="clients" class="w-100">
                        </li> --}}

                        {{-- <li class="slider-item">
                            <img src="{{ asset('frontend/assets/images/client-4.svg') }}" width="130" height="40"
                                alt="clients" class="w-100">
                        </li> --}}

                        {{-- <li class="slider-item">
                            <img src="{{ asset('frontend/assets/images/client-5.svg') }}" width="130" height="40"
                                alt="clients" class="w-100">
                        </li> --}}

                    </ul>

                </div>
            </section>

            <!-- #ABOUT-->
            <section class="section about" aria-label="about me">
                <div class="container">
                    @if ($getAbout && $getAbout->picture)
                        <figure class="about-banner">
                            <img src="{{ asset('storage/about_pictures/' . $getAbout->picture) }}" width="580"
                                height="554" loading="lazy"
                                alt="Annie, the blonde, dressed in a black tops with a smile on her face" class="w-100">
                        </figure>
                    @else
                        {{-- <p>No Picture Available</p> --}}
                        <figure class="about-banner">
                            <img src="{{ asset('frontend/assets/images/about-banner1.gif') }}" width="580"
                                height="554" loading="lazy"
                                alt="Annie, the blonde, dressed in a black tops with a smile on her face" class="w-100">
                        </figure>
                    @endif

                    <div class="about-content">

                        <h2 class="title-lg">
                            {{ $getAbout->title ?? 'Im a Freelancer Full-stack developer with over 2 years of experience.' }}
                        </h2>

                        <p class="body-md section-text">
                            {{ $getAbout->description ??
                                'Im a Freelancer Full-stack developer with over 2 years of experience. Im from San
                                                                                                                                                                                                                                                                                                                                                                                                                                                                Francisco. I code and
                                                                                                                                                                                                                                                                                                                                                                                                                                                                create web elements for amazing people around the world. I like work with new people. New
                                                                                                                                                                                                                                                                                                                                                                                                                                                                people new
                                                                                                                                                                                                                                                                                                                                                                                                                                                                Experiences.' }}
                        </p>

                        <ul class="about-list">

                            <li>
                                <p class="list-text">
                                    <strong class="strong title-md">{{ $getAbout->projects_completed ?? '55+' }}</strong>
                                    Projet Completed
                                </p>
                            </li>

                            <li>
                                <p class="list-text">
                                    <strong class="strong title-md">{{ $getAbout->happy_clients ?? '40+' }}</strong> Happy
                                    Clients
                                </p>
                            </li>

                        </ul>

                        <div class="wrapper">
                            <a href="{{ route('contact.us') }}" class="btn btn-primary">Contact Me</a>

                            <a href="{{ route('portfolio') }}" class="btn btn-secondary">Portfolio</a>
                        </div>

                    </div>

                </div>
            </section>

            <!-- #SKILL-->
            <section class="section skill" aria-labelledby="skill-label">
                <div class="container">

                    <div class="skill-content">

                        <h2 class="section-title headline-md" id="skill-label">My Skills</h2>

                        <ul class="skill-list">

                            @foreach ($getSkills as $skill)
                                <li>
                                    <div class="card card-sm" style="background-color: hsl(177, 39%, 72%)">
                                        <div class="card-media">
                                            @if ($skill->picture)
                                                <img src="{{ asset('storage/skill_pictures/' . $skill->picture) }}"
                                                    alt="{{ $skill->title }}" class="w-100">
                                            @else
                                                <ion-icon name="logo-{{ strtolower($skill->title) }}"></ion-icon>
                                            @endif
                                        </div>
                                        <h2 class="card-title">{{ $skill->title }}</h2>
                                        <p>{{ $skill->description }}</p>
                                    </div>
                                </li>
                            @endforeach

                            {{-- <li>
                                <div class="card card-sm" style="background-color: hsl(41, 99%, 64%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-css3"></ion-icon>
                                    </div>

                                    <h2 class="card-title">CSS</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(19, 97%, 85%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-react"></ion-icon>
                                    </div>

                                    <h2 class="card-title">React JS</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(221, 100%, 79%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-angular"></ion-icon>
                                    </div>

                                    <h2 class="card-title">Angular</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(76, 39%, 72%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-apple"></ion-icon>
                                    </div>

                                    <h2 class="card-title">iOs App</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(245, 100%, 90%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-android"></ion-icon>
                                    </div>

                                    <h2 class="card-title">App Dev</h2>

                                </div>
                            </li> --}}

                        </ul>

                    </div>

                    <figure class="skill-banner">
                        <img src="{{ asset('frontend/assets/images/skill-banner.png') }}" width="581" height="657"
                            loading="lazy" alt="Annie, the blonde, dressed in a green hoodie with a smile on her face"
                            class="w-100">
                    </figure>

                </div>
            </section>

            <!-- #CTA-->
            <section class="cta">
                <div class="container">
                    <h2 class="title-lg">Intrested working with me?</h2>

                    <a href="{{ route('contact.us') }}" class="btn btn-tertiary">Contact Now</a>
                </div>
            </section>

            <!-- #TESTIMONIALS-->
            <section class="section testi" aria-labelledby="testi-label">
                <div class="container">

                    <h2 class="headline-md section-title text-center" id="testi-label">Testimonial</h2>

                    <ul class="slider">
                        @foreach ($getTesti as $testi)
                            <li class="slider-item card-container">
                                <div class="card card-lg">

                                    <figure class="card-media">
                                        @if ($testi->picture && $testi->picture)
                                            <img src="{{ asset('images/' . $testi->picture) }}" width="100"
                                                height="100" loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                        @else
                                            <img src="{{ asset('frontend/assets/images/testi-1.jpg') }}" width="100"
                                                height="100" loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                        @endif
                                    </figure>

                                    <div class="card-content">

                                        <blockquote class="body-sm">
                                            {{ $testi->content ??
                                                'Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem
                                                                                                                                                                            Ipsum has been the
                                                                                                                                                                            industrys standard dummy text ever since the 1500s.' }}
                                        </blockquote>

                                        <p class="client-name">{{ $testi->author_name ?? 'Jennifer Lutheran' }}</p>

                                        <p class="client-title">{{ $testi->author_position ?? 'CEO at pxdraft' }}</p>
                                        <!-- Rating Section -->
                                        <div class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <span
                                                    class="star{{ $i <= $testi->rating ? ' filled' : '' }}">&#9733;</span>
                                            @endfor
                                        </div>
                                    </div>

                                </div>
                            </li>
                        @endforeach

                        {{-- <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="{{ asset('frontend/assets/images/testi-2.jpg') }}" width="100"
                                        height="100" loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.
                                    </blockquote>

                                    <p class="client-name">Jennifer Lutheran</p>

                                    <p class="client-title">CEO at pxdraft</p>

                                </div>

                            </div>
                        </li>

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="{{ asset('frontend/assets/images/testi-3.jpg') }}" width="100"
                                        height="100" loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.
                                    </blockquote>

                                    <p class="client-name">Jennifer Lutheran</p>

                                    <p class="client-title">CEO at pxdraft</p>

                                </div>

                            </div>
                        </li>

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="{{ asset('frontend/assets/images/testi-4.jpg') }}" width="100"
                                        height="100" loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.
                                    </blockquote>

                                    <p class="client-name">Jennifer Lutheran</p>

                                    <p class="client-title">CEO at pxdraft</p>

                                </div>

                            </div>
                        </li> --}}

                    </ul>

                </div>
            </section>

        </article>
    </main>

@endsection
