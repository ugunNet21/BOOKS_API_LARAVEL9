@extends('frontend.layouts.app')
@section('title', 'Portfolio')
{{-- <style>
    .container {
        display: flex;
        flex-direction: row;
    }

    .category-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .category-link {
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        color: #333;
        border: 1px solid #ddd;
        margin-bottom: 5px;
        border-radius: 5px;
    }

    .category-link:hover {
        background-color: #f8f8f8;
    }

    .portfolio-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .portfolio-card {
        width: 100%;
        max-width: calc(50% - 20px);
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .card-banner {
        position: relative;
    }

    .img-cover {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .card-content {
        padding: 20px;
    }

    .chip {
        background-color: #eee;
        padding: 5px 10px;
        border-radius: 20px;
        margin-bottom: 10px;
        display: inline-block;
    }

    .title-md {
        font-size: 1.5rem;
        margin: 10px 0;
    }

    .card-text {
        flex: 1;
    }

    .btn-primary {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-icon {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        padding: 10px;
        border-radius: 50%;
        text-decoration: none;
    }
</style> --}}
@section('content')
    <main style="margin-top: 5%;">
        <article>
            <!-- #PORTFOLIO-->
            <section class="section portfolio" aria-labelledby="portfolio-label">
                <div class="container">

                    <h2 class="section-title headline-md text-center" id="portfolio-label">Latest Projects</h2>
                    <div class="row">
                        <!-- Categories List -->
                        <aside class="col-md-3 mb-5">
                            <ul class="category-list">
                                @foreach ($getCategories as $category)
                                    <li>
                                        <a href="#category-{{ $category->id }}"
                                            class="category-link">{{ $category->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                        <!-- Portfolios List -->
                        <div class="col-md-9">
                            @foreach ($getCategories as $category)
                                <h3 id="category-{{ $category->id }}" class="category-title">{{ $category->title }}</h3>
                                <ul class="portfolio-list">
                                    @foreach ($category->portfolios as $portfolio)
                                        <li>
                                            <div class="portfolio-card">
                                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                                    {{-- <img src="{{ asset('storage/portfolio_pictures' . $portfolio->picture) }}" width="800"
                                                        height="540" loading="lazy" alt="{{ $portfolio->title }}"
                                                        class="img-cover"> --}}
                                                    <img src="{{ asset('storage/portfolio_pictures/' . $portfolio->picture) }}"
                                                        alt="Portfolio Picture" width="150" height="100"
                                                        loading="lazy">
                                                    <a href="#" class="btn-icon"
                                                        aria-label="More about {{ $portfolio->title }}">
                                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                                    </a>
                                                </div>
                                                <div class="card-content">
                                                    <span class="chip label-md">{{ $category->title }}</span>
                                                    <h3 class="title-md">{{ $portfolio->title }}</h3>
                                                    <p class="card-text">{{ $portfolio->description }}</p>
                                                    <a href="#" class="btn btn-primary">View Project</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                        {{-- <ul class="portfolio-list">

                        <li>
                            <div class="portfolio-card">

                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                    <img src="{{asset('frontend/assets/images/portfolio-1.jpg')}}" width="800" height="540" loading="lazy"
                                        alt="Website Design for Marketing Agency Startup" class="img-cover">

                                    <a href="#" class="btn-icon"
                                        aria-label="More about Website Design for Marketing Agency Startup">
                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-content">

                                    <span class="chip label-md">Web Design</span>

                                    <h3 class="title-md">Website Design for Marketing Agency Startup</h3>

                                    <p class="card-text">
                                        I design and develop services for customers of all sizes, specializing in creating
                                        stylish, modern
                                        websites, web services and online stores
                                    </p>

                                    <a href="#" class="btn btn-primary">View Project</a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="portfolio-card">

                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                    <img src="{{asset('frontend/assets/images/portfolio-2.jpg')}}" width="800" height="540" loading="lazy"
                                        alt="Website Design for Marketing Agency Startup" class="img-cover">

                                    <a href="#" class="btn-icon"
                                        aria-label="More about Website Design for Marketing Agency Startup">
                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-content">

                                    <span class="chip label-md">Web Design</span>

                                    <h3 class="title-md">Website Design for Marketing Agency Startup</h3>

                                    <p class="card-text">
                                        I design and develop services for customers of all sizes, specializing in creating
                                        stylish, modern
                                        websites, web services and online stores
                                    </p>

                                    <a href="#" class="btn btn-primary">View Project</a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="portfolio-card">

                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                    <img src="{{asset('frontend/assets/images/portfolio-3.jpg')}}" width="800" height="540" loading="lazy"
                                        alt="Website Design for Marketing Agency Startup" class="img-cover">

                                    <a href="#" class="btn-icon"
                                        aria-label="More about Website Design for Marketing Agency Startup">
                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-content">

                                    <span class="chip label-md">Web Design</span>

                                    <h3 class="title-md">Website Design for Marketing Agency Startup</h3>

                                    <p class="card-text">
                                        I design and develop services for customers of all sizes, specializing in creating
                                        stylish, modern
                                        websites, web services and online stores
                                    </p>

                                    <a href="#" class="btn btn-primary">View Project</a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="portfolio-card">

                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                    <img src="{{asset('frontend/assets/images/portfolio-.jpg')}}" width="800" height="540" loading="lazy"
                                        alt="Website Design for Marketing Agency Startup" class="img-cover">

                                    <a href="#" class="btn-icon"
                                        aria-label="More about Website Design for Marketing Agency Startup">
                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-content">

                                    <span class="chip label-md">Web Design</span>

                                    <h3 class="title-md">Website Design for Marketing Agency Startup</h3>

                                    <p class="card-text">
                                        I design and develop services for customers of all sizes, specializing in creating
                                        stylish, modern
                                        websites, web services and online stores
                                    </p>

                                    <a href="#" class="btn btn-primary">View Project</a>

                                </div>

                            </div>
                        </li>

                    </ul> --}}
                    </div>
                </div>
            </section>

        </article>
    </main>


@endsection
