@extends('frontend.layouts.app')
@section('title', 'Services')
@section('content')
    <main>
        <article>
            <!-- #SERVICE-->

            <section class="section service has-bg-image" aria-labelledby="service-label"
                style="background-image: url('{{asset('frontend/assets/images/service-bg.png')}}')">
                <div class="container">

                    <h2 class="section-title headline-md text-center" id="service-label">My Services</h2>

                    <ul class="service-list">

                        @foreach($getService as $category)
                        <h3 class="category-title">{{ $category->title }}</h3>
                        @foreach($category->layanans as $layanan)
                            <li class="card-container">
                                <div class="card card-md" style="background-color: hsl(177, 39%, 72%)">
                                    <div class="card-media">
                                        <ion-icon name="phone-portrait-outline" aria-hidden="true"></ion-icon>
                                    </div>
                                    <div>
                                        <h3 class="card-title title-sm">{{ $layanan->title }}</h3>
                                        <p class="body-sm">{{ $layanan->description }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endforeach

                        {{-- <li class="card-container">
                            <div class="card card-md" style="background-color: hsl(41, 99%, 64%)">

                                <div class="card-media">
                                    <ion-icon name="laptop-outline" aria-hidden="true"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="card-title title-sm">Development</h3>

                                    <p class="body-sm">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="card-container">
                            <div class="card card-md" style="background-color: hsl(19, 97%, 85%)">

                                <div class="card-media">
                                    <ion-icon name="stats-chart-outline" aria-hidden="true"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="card-title title-sm">SEO Marketing</h3>

                                    <p class="body-sm">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="card-container">
                            <div class="card card-md" style="background-color: hsl(221, 100%, 79%)">

                                <div class="card-media">
                                    <ion-icon name="shapes-outline" aria-hidden="true"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="card-title title-sm">Web Design</h3>

                                    <p class="body-sm">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="card-container">
                            <div class="card card-md" style="background-color: hsl(76, 39%, 72%)">

                                <div class="card-media">
                                    <ion-icon name="code-slash-outline" aria-hidden="true"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="card-title title-sm">Development</h3>

                                    <p class="body-sm">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="card-container">
                            <div class="card card-md" style="background-color: hsl(245, 100%, 90%)">

                                <div class="card-media">
                                    <ion-icon name="globe-outline" aria-hidden="true"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="card-title title-sm">SEO Marketing</h3>

                                    <p class="body-sm">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>

                            </div>
                        </li> --}}

                    </ul>

                </div>
            </section>

        </article>
    </main>

@endsection
