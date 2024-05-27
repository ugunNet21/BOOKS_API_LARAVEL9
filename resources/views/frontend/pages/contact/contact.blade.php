@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('content')
    <main style="margin-top: 14%;">
        <article>
            <!-- #CONTACT-->
            <section class="section contact has-bg-image" aria-labelledby="contact-label"
                style="background-image: url('{{ asset('frontend/assets/images/contact-bg.png') }}')">
                <div class="container">

                    <form action="{{ route('send-contact.us') }}" method="POST" class="contact-form"
                        enctype="multipart/form-data">
                        @csrf
                        <h2 class="headline-sm" id="contact-label">Get in touch</h2>

                        <p class="contact-text body-md">
                            Our friendly team would love to hear from you.
                        </p>

                        <div class="wrapper">

                            <div>
                                <label for="name" class="label">First name</label>

                                <input type="text" name="name" id="name" placeholder="Name *" required
                                    class="input-field">
                            </div>

                            <div>
                                <label for="email" class="label">Your Email </label>

                                <input type="email" name="email" id="email" placeholder="Email *" required
                                    class="input-field">
                            </div>

                        </div>

                        <label for="subject" class="label">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Subject *" class="input-field">

                        <label for="message" class="label">Your message </label>
                        <textarea name="message" id="message" placeholder="Your message *" required class="input-field"></textarea>

                        <button type="submit" class="btn btn-primary">Send Message</button>

                    </form>

                    <div class="contact-content">
                        <ul class="contact-list">
                            @isset($footer)
                                @if ($footer->telp)
                                    <li class="contact-item">
                                        <div class="item-icon" style="background-color: hsl(177, 39%, 72%)">
                                            <ion-icon name="call" aria-hidden="true"></ion-icon>
                                        </div>
                                        <div>
                                            <p class="label-lg">Phone</p>
                                            <a href="tel:{{ $footer->telp }}" class="body-lg">{{ $footer->telp }}</a>
                                        </div>
                                    </li>
                                @endif

                                @if ($footer->email)
                                    <li class="contact-item">
                                        <div class="item-icon" style="background-color: hsl(41, 99%, 64%)">
                                            <ion-icon name="mail" aria-hidden="true"></ion-icon>
                                        </div>
                                        <div>
                                            <p class="label-lg">Mail</p>
                                            <a href="mailto:{{ $footer->email }}" class="body-lg">{{ $footer->email }}</a>
                                        </div>
                                    </li>
                                @endif

                                @if ($footer->address)
                                    <li class="contact-item">
                                        <div class="item-icon" style="background-color: hsl(19, 97%, 85%)">
                                            <ion-icon name="location" aria-hidden="true"></ion-icon>
                                        </div>
                                        <div>
                                            <p class="label-lg">Visit My Studio</p>
                                            <address class="body-lg">
                                                {{ $footer->address }}
                                            </address>
                                        </div>
                                    </li>
                                @endif
                            @endisset
                        </ul>
                    </div>
                </div>
            </section>

        </article>
    </main>
@endsection
