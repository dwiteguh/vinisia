@extends('layouts.app')

@section('title', __('VANESIA - Premium Indonesian Vanilla'))

@section('content')

{{-- =========================
    HERO
========================= --}}

<section class="hero-section">

    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <div class="hero-label">
                    {{ __('PREMIUM INDONESIAN VANILLA') }}
                </div>

                <h2>
                    {{ __('The Natural Character of Indonesian Vanilla.') }}
                </h2>

                <p>
                    {{ __('We believe good vanilla begins with careful sourcing and attention to detail.') }}
                </p>

                <div class="hero-buttons">

                    <a href="{{ route('products.index') }}"
                       class="btn btn-hero-primary">

                        {{ __('Explore Products') }}

                    </a>

                    <a href="{{ route('contact') }}"
                       class="btn btn-hero-secondary">

                        {{ __('Request a Quote') }}

                    </a>

                </div>

            </div>

        </div>

    </div>


    <div class="hero-bottom">

        <div class="container">

            <div class="row">

                {{-- FEATURE 01 --}}
                <div class="col-md-4">

                    <div class="hero-feature">

                        <span>01</span>

                        <div>

                            <strong>
                                {{ __('Indonesian Origin') }}
                            </strong>

                            <small>
                                {{ __('Naturally sourced') }}
                            </small>

                        </div>

                    </div>

                </div>


                {{-- FEATURE 02 --}}
                <div class="col-md-4">

                    <div class="hero-feature">

                        <span>02</span>

                        <div>

                            <strong>
                                {{ __('Carefully Selected') }}
                            </strong>

                            <small>
                                {{ __('Quality focused') }}
                            </small>

                        </div>

                    </div>

                </div>


                {{-- FEATURE 03 --}}
                <div class="col-md-4">

                    <div class="hero-feature">

                        <span>03</span>

                        <div>

                            <strong>
                                {{ __('Premium Character') }}
                            </strong>

                            <small>
                                {{ __('Rich natural aroma') }}
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================
    INTRODUCTION
========================= --}}

<section class="intro-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="section-label">

                    {{ __('THE ESSENCE OF VANESIA') }}

                </div>

                <h2>

                    {{ __('The Natural Character') }}

                    <br>

                    {{ __('of Indonesian Vanilla.') }}

                </h2>

            </div>


            <div class="col-lg-6">

                <p class="intro-text">

                    {{ __('VANESIA is an emerging Indonesian vanilla brand focused on bringing carefully selected vanilla to customers who appreciate quality, natural character, and authenticity.') }}

                </p>


                <a href="{{ route('about') }}"
                   class="text-link">

                    {{ __('Discover Our Story') }}

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>



{{-- =========================
    PRODUCTS
========================= --}}

<section class="products-section">

    <div class="container">

        <div class="section-heading">

            <div>

                <div class="section-label">

                    {{ __('OUR VANILLA') }}

                </div>

                <h2>

                    {{ __('Selected with Care.') }}

                </h2>

            </div>


            <a href="{{ route('products.index') }}"
               class="text-link">

                {{ __('View All Products') }}

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>



        <div class="row g-4">

            @forelse($products as $product)

                <div class="col-md-6 col-lg-4">

                    <div class="product-card">

                        <div class="product-image">

                            @if($product->image)

                                <img
                                    src="{{ asset('storage/' . $product->image) }}"
                                    alt="{{ $product->name }}"
                                >

                            @else

                                <div class="product-placeholder">

                                    <i class="fa-solid fa-seedling"></i>

                                </div>

                            @endif

                        </div>


                        <div class="product-content">

                            <div class="product-origin">

                                {{ $product->origin }}

                            </div>


                            <h3>

                                {{ $product->name }}

                            </h3>


                            <p>

                                {{ $product->short_description }}

                            </p>


                            <a href="{{ route('products.show', $product->slug) }}"
                               class="product-link">

                                {{ __('Explore Product') }}

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>


            @empty

                <div class="col-12">

                    <div class="empty-products">

                        <i class="fa-solid fa-box-open"></i>

                        <h3>

                            {{ __('Our vanilla collection is coming soon.') }}

                        </h3>

                        <p>

                            {{ __('We are preparing our first selection of Indonesian vanilla.') }}

                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>



{{-- =========================
    INDONESIAN ORIGIN
========================= --}}

<section class="origin-section">

    <div class="origin-image"></div>

    <div class="origin-content">

        <div class="section-label">

            {{ __('FROM INDONESIA') }}

        </div>


        <h2>

            {{ __('With Character.') }}

        </h2>


        <p>

            {{ __('Indonesia\'s rich natural environment provides a unique character to its vanilla. At VANESIA, we value the natural qualities that make Indonesian vanilla special.') }}

        </p>


        <a href="{{ route('about') }}"
           class="btn btn-light-vanesia">

            {{ __('Our Story') }}

        </a>

    </div>

</section>



{{-- =========================
    QUALITY
========================= --}}

<section class="quality-section">

    <div class="container">

        <div class="row mb-5">

            <div class="col-lg-7">

                <div class="section-label">

                    {{ __('QUALITY MATTERS') }}

                </div>


                <h2>

                    {{ __('From Source') }}

                    <br>

                    {{ __('to Selection.') }}

                </h2>

            </div>


            <div class="col-lg-5">

                <p class="quality-intro">

                    {{ __('We believe good vanilla begins with careful sourcing and attention to detail.') }}

                </p>

            </div>

        </div>



        <div class="process-grid">

            {{-- PROCESS 01 --}}
            <div class="process-item">

                <span>01</span>

                <h3>

                    {{ __('Sourcing') }}

                </h3>

                <p>

                    {{ __('Carefully selected Indonesian vanilla sources.') }}

                </p>

            </div>


            {{-- PROCESS 02 --}}
            <div class="process-item">

                <span>02</span>

                <h3>

                    {{ __('Selection') }}

                </h3>

                <p>

                    {{ __('Product selection based on appearance and condition.') }}

                </p>

            </div>


            {{-- PROCESS 03 --}}
            <div class="process-item">

                <span>03</span>

                <h3>

                    {{ __('Processing') }}

                </h3>

                <p>

                    {{ __('Handled carefully to preserve its natural characteristics.') }}

                </p>

            </div>


            {{-- PROCESS 04 --}}
            <div class="process-item">

                <span>04</span>

                <h3>

                    {{ __('Packaging') }}

                </h3>

                <p>

                    {{ __('Prepared carefully before reaching our customers.') }}

                </p>

            </div>

        </div>



        <div class="text-center mt-5">

            <a href="{{ route('quality') }}"
               class="text-link">

                {{ __('Discover Our Process') }}

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section>



{{-- =========================
    CTA
========================= --}}

<section class="cta-section">

    <div class="cta-overlay"></div>

    <div class="container">

        <div class="cta-content">

            <div class="section-label">

                {{ __('LET\'S WORK TOGETHER') }}

            </div>


            <h2>

                {{ __('Looking for') }}

                <br>

                {{ __('Indonesian Vanilla?') }}

            </h2>


            <p>

                {{ __('Tell us what you need. We would be happy to talk with you.') }}

            </p>


            <a href="{{ route('contact') }}"
               class="btn btn-cta">

                {{ __('Request a Quote') }}

            </a>

        </div>

    </div>

</section>


@endsection