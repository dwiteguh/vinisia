<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'VANESIA - Premium Indonesian Vanilla')
    </title>

    <meta name="description"
          content="{{ __('VANESIA - Premium Indonesian Vanilla. Naturally Exceptional.') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>

<body>


{{-- =====================================================
     NAVBAR
===================================================== --}}

<nav class="navbar navbar-expand-lg navbar-light fixed-top vanesia-navbar">

    <div class="container">

        {{-- LOGO --}}
        <a class="navbar-brand vanesia-logo"
           href="{{ route('home') }}">

            VANESIA

            <span>
                {{ __('INDONESIAN VANILLA') }}
            </span>

        </a>


        {{-- MOBILE BUTTON --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        {{-- NAVIGATION --}}
        <div class="collapse navbar-collapse"
             id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">


                {{-- HOME --}}
                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('home') }}">

                        {{ __('Home') }}

                    </a>

                </li>


                {{-- PRODUCTS --}}
                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('products.index') }}">

                        {{ __('Products') }}

                    </a>

                </li>


                {{-- ABOUT --}}
                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('about') }}">

                        {{ __('About Us') }}

                    </a>

                </li>


                {{-- QUALITY --}}
                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('quality') }}">

                        {{ __('Quality') }}

                    </a>

                </li>


                {{-- REQUEST QUOTE --}}
                <li class="nav-item ms-lg-3">

                    <a class="btn btn-vanesia"
                       href="{{ route('contact') }}">

                        {{ __('Request a Quote') }}

                    </a>

                </li>


                {{-- LANGUAGE --}}
                <li class="nav-item ms-lg-3">

                    <div class="language-switcher">

                        <a href="{{ route('language.switch', 'id') }}"
                           class="{{ app()->getLocale() == 'id' ? 'active' : '' }}">

                            ID

                        </a>

                        <span>/</span>

                        <a href="{{ route('language.switch', 'en') }}"
                           class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">

                            EN

                        </a>

                    </div>

                </li>


            </ul>

        </div>

    </div>

</nav>



{{-- =====================================================
     MAIN CONTENT
===================================================== --}}

<main>

    @yield('content')

</main>



{{-- =====================================================
     FOOTER
===================================================== --}}

<footer class="vanesia-footer">

    <div class="container">

        <div class="row g-5">


            {{-- BRAND --}}
            <div class="col-lg-5">

                <div class="footer-logo">
                    VANESIA
                </div>

                <p class="footer-tagline">

                    {{ __('Premium Indonesian Vanilla.') }}

                    <br>

                    {{ __('Naturally Exceptional.') }}

                </p>

                <p class="footer-description">

                    {{ __('Bringing the natural character of Indonesian vanilla to customers with care and consistency.') }}

                </p>

            </div>



            {{-- EXPLORE --}}
            <div class="col-lg-2 col-md-4">

                <h5>
                    {{ __('Explore') }}
                </h5>


                <a href="{{ route('home') }}">
                    {{ __('Home') }}
                </a>


                <a href="{{ route('products.index') }}">
                    {{ __('Products') }}
                </a>


                <a href="{{ route('about') }}">
                    {{ __('About Us') }}
                </a>


                <a href="{{ route('quality') }}">
                    {{ __('Quality') }}
                </a>

            </div>



            {{-- BUSINESS --}}
            <div class="col-lg-2 col-md-4">

                <h5>
                    {{ __('Business') }}
                </h5>


                <a href="{{ route('contact') }}">
                    {{ __('Request a Quote') }}
                </a>


                <a href="{{ route('contact') }}">
                    {{ __('Contact') }}
                </a>

            </div>



            {{-- CONTACT --}}
            <div class="col-lg-3 col-md-4">

                <h5>
                    {{ __('Contact') }}
                </h5>


                <p>
                    {{ __('Indonesia') }}
                </p>


                <p>
                    {{ __('Email') }}:
                    hello@vanesia.com
                </p>


                <p>
                    {{ __('WhatsApp') }}:
                    +62 xxx xxxx xxxx
                </p>

            </div>

        </div>



        {{-- FOOTER BOTTOM --}}
        <div class="footer-bottom">

            <span>
                © {{ date('Y') }} VANESIA.
                {{ __('All Rights Reserved.') }}
            </span>


            <span>
                {{ __('Premium Indonesian Vanilla') }}
            </span>

        </div>

    </div>

</footer>



{{-- =====================================================
     JAVASCRIPT
===================================================== --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<script src="{{ asset('js/app.js') }}">
</script>

@stack('scripts')

</body>

</html>