@extends('layouts.app')

@section('title', __('VANESIA - Premium Indonesian Vanilla'))

@section('content')



{{-- =========================
    HERO VANESIA
========================= --}}

<section id="home" class="vanesia-hero">

    <div class="vanesia-hero-image">

        <img
            src="{{ asset('images/vanesia2.jpg') }}"
            alt="Premium Indonesian Vanilla"
        >

    </div>

    <div class="vanesia-hero-overlay"></div>


    <div class="container vanesia-hero-container">

        <div class="row">

            <div class="col-lg-7">

                {{-- LABEL --}}
                <div class="vanesia-hero-label">
                    {{ __('PREMIUM INDONESIAN VANILLA') }}
                </div>


                {{-- HEADLINE --}}
                <h1 class="vanesia-hero-title">

                    {{ __('Premium Vanilla,') }}

                    <br>

                    <span>
                        {{ __('Sourced from Indonesia.') }}
                    </span>

                </h1>


                {{-- TAGLINE --}}
                <div class="vanesia-hero-tagline">

                    {{ __('Naturally Selected. Carefully Prepared.') }}

                </div>


                {{-- DESCRIPTION --}}
                 <p class="vanesia-hero-description">

                    {{ __('Carefully selected Vanilla planifolia from Indonesia for international buyers seeking quality, consistency, and competitive value.') }}

                </p>


                {{-- BUTTON --}}
                <div class="vanesia-hero-actions">

                <a
                    href="#contact"
                    class="vanesia-btn vanesia-btn-primary"
                >
                    {{ __('Request a Quote') }}
                    <i class="fa-solid fa-arrow-right"></i>
                </a>


                    <a
                        href="#products"
                        class="vanesia-btn vanesia-btn-secondary"
                    >
                        {{ __('Explore Our Vanilla') }}
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- BOTTOM INFORMATION --}}

    <div class="vanesia-hero-bottom">

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <div class="vanesia-hero-info">

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


                <div class="col-md-4">

                    <div class="vanesia-hero-info">

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


                <div class="col-md-4">

                    <div class="vanesia-hero-info">

                        <span>03</span>

                        <div>

                            <strong>
                                {{ __('Premium Character') }}
                            </strong>

                            <small>
                                {{ __('Natural aroma and character') }}
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================
    ABOUT VANESIA
========================= --}}

<section id="about" class="vanesia-about-section">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- IMAGE --}}
            <div class="col-lg-6">

                <div class="vanesia-about-visual">
                    <img
                        src="{{ asset('images/home.jpg') }}"
                        alt="{{ __('VANESIA Indonesian Vanilla') }}"
                    >
                </div>

            </div>


            {{-- CONTENT --}}
            <div class="col-lg-6">

                <div class="vanesia-about-content">

                     <div class="section-label">
                        {{ __('ABOUT VANESIA') }}
                    </div>

                    <h2>
                        {{ __('Rooted in Indonesia. Built for Partnership.') }}
                    </h2>

                    <p class="about-subtitle">
                        {{ __('Rooted in Indonesia. Built for Partnership.') }}
                    </p>

                    <p>
                        {{ __('VANESIA is an Indonesian vanilla business focused on connecting carefully selected Vanilla planifolia with international B2B buyers.') }}
                    </p>


                   {{-- POSITIONING --}}
                    <div class="vanesia-about-positioning">

                        <span>{{ __('POSITIONING') }}</span>

                        <div class="positioning-words">

                            <strong>
                                {{ __('Trust.') }}
                            </strong>

                            <strong>
                                {{ __('Quality.') }}
                            </strong>

                            <strong>
                                {{ __('Value.') }}
                            </strong>

                        </div>

                    </div>


                    <p>
                        {{ __('Our approach is simple: source carefully, communicate transparently, maintain agreed specifications, and build relationships that can grow over time.') }}
                    </p>

                </div>

            </div>

        </div>



        {{-- BOTTOM PRINCIPLE --}}
        <div class="vanesia-about-bottom">

            <span>
                VANESIA
            </span>

            <p>
                {{ __('Indonesian Vanilla. Built for Partnership.') }}
            </p>

        </div>

    </div>

</section>





{{-- =========================
    OUR VANILLA
========================= --}}

<section id="products" class="vanesia-products-section">

    <div class="container">

        {{-- HEADER --}}
        <div class="row align-items-end mb-5">

            <div class="col-lg-8">

                <div class="section-label">
                    {{ __('OUR VANILLA') }}
                </div>

                <h2 class="vanesia-products-title">
                    {{ __('Indonesian Vanilla Beans') }}
                </h2>

                <p class="vanesia-products-subtitle">
                    {{ __('Vanilla planifolia · Grade A') }}
                </p>

            </div>

        </div>


        {{-- PRODUCT --}}
        <div class="row align-items-center g-5">

            {{-- IMAGE --}}
            <div class="col-lg-5">

                <div class="vanesia-product-feature-image">

                    <img
                        src="{{ asset('images/vanesiaukuran.jpg') }}"
                        alt="{{ __('Indonesian Vanilla Beans') }}"
                    >

                </div>

            </div>


            {{-- SPECIFICATION --}}
            <div class="col-lg-7">

                <div class="vanesia-product-spec">

                    <div class="spec-header">
                        <span>{{ __('Length') }}</span>
                        <span>{{ __('Grade') }}</span>
                        <span>{{ __('Moisture') }}</span>
                    </div>


                    <div class="spec-row">

                        <strong>14–15 cm</strong>

                        <span>Grade A</span>

                        <span>25–30%</span>

                    </div>


                    <div class="spec-row">

                        <strong>16–17 cm</strong>

                        <span>Grade A</span>

                        <span>25–30%</span>

                    </div>


                    <div class="spec-row">

                        <strong>18–19 cm</strong>

                        <span>Grade A</span>

                        <span>25–30%</span>

                    </div>

                </div>


                {{-- NOTE --}}
                <div class="vanesia-product-note">

                    <div class="note-icon">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>

                    <div>

                        <h4>
                            {{ __('Pricing') }}
                        </h4>

                        <p>
                            {{ __('Export pricing is not displayed permanently because prices may vary depending on quantity, specifications, packaging, destination, and trade terms.') }}
                        </p>

                    </div>

                </div>


                {{-- CTA --}}
                <a
                    href="#contact"
                    class="vanesia-btn vanesia-btn-primary"
                >
                    {{ __('Request a Quote') }}

                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================
    ORIGIN
========================= --}}

<section id="origin" class="vanesia-origin-section">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- IMAGE --}}
            <div class="col-lg-6">

                <div class="vanesia-origin-image">

                    <img
                        src="{{ asset('images/image.jpg') }}"
                        alt="{{ __('Indonesian Vanilla') }}"
                    >

                </div>

            </div>


            {{-- CONTENT --}}
            <div class="col-lg-6">

                <div class="section-label">
                    {{ __('FROM INDONESIA') }}
                </div>

                <h2 class="vanesia-origin-title">

                    {{ __('From Indonesia,') }}

                    <br>

                    <span>
                        {{ __('Naturally Exceptional.') }}
                    </span>

                </h2>


                <p class="vanesia-origin-text">

                    {{ __('Indonesia is home to diverse growing regions and a long tradition of vanilla cultivation. VANESIA connects this Indonesian origin with international buyers through carefully selected Vanilla planifolia and a commitment to reliable supply.') }}

                </p>


                {{-- SMALL INFORMATION --}}
                <div class="vanesia-origin-info">

                    <div class="vanesia-origin-info-item">

                        <span>01</span>

                        <div>
                            <strong>
                                {{ __('Indonesian Origin') }}
                            </strong>

                            <small>
                                {{ __('Origin from Indonesia') }}
                            </small>
                        </div>

                    </div>


                    <div class="vanesia-origin-info-item">

                        <span>02</span>

                        <div>
                            <strong>
                                {{ __('Vanilla planifolia') }}
                            </strong>

                            <small>
                                {{ __('Vanilla plant species') }}
                            </small>
                        </div>

                    </div>


                    <div class="vanesia-origin-info-item">

                        <span>03</span>

                        <div>
                            <strong>
                                {{ __('Selected for B2B Supply') }}
                            </strong>

                            <small>
                                {{ __('Selected for business supply needs') }}
                            </small>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- TRANSITION --}}
        <div class="vanesia-origin-transition">

            <span></span>

            <p>
                {{ __('From Indonesian soil to global markets.') }}
            </p>

            <span></span>

        </div>

    </div>

</section>


{{-- =========================
    QUALITY & SPECIFICATIONS
========================= --}}

<section id="quality" class="vanesia-quality-section">

    <div class="container">

        <div class="row g-5 align-items-start">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-5">

                <div class="section-label">
                    {{ __('QUALITY & SPECIFICATIONS') }}
                </div>

                <h2 class="vanesia-quality-title">
                    {{ __('Quality, Defined.') }}
                </h2>

                <p class="vanesia-quality-subtitle">
                    {{ __('Kualitas, dengan standar yang jelas.') }}
                </p>

                <p class="vanesia-quality-description">
                    {{ __('We provide carefully selected Vanilla planifolia according to agreed product specifications and buyer requirements.') }}
                </p>

                <p class="vanesia-quality-description id-copy">
                    {{ __('Kami menyediakan Vanilla planifolia yang dipilih dengan cermat berdasarkan spesifikasi produk yang disepakati dan kebutuhan buyer.') }}
                </p>

            </div>


            {{-- RIGHT SPECIFICATIONS --}}
            <div class="col-lg-7">

                <div class="vanesia-specification-list">

                    {{-- SPECIES --}}
                    <div class="vanesia-specification-item">

                        <div class="spec-number">
                            01
                        </div>

                        <div class="spec-content">
                            <span class="spec-label">
                                {{ __('Species') }}
                            </span>

                            <strong>
                                Vanilla planifolia
                            </strong>
                        </div>

                    </div>


                    {{-- GRADE --}}
                    <div class="vanesia-specification-item">

                        <div class="spec-number">
                            02
                        </div>

                        <div class="spec-content">
                            <span class="spec-label">
                                {{ __('Grade') }}
                            </span>

                            <strong>
                                Grade A
                            </strong>
                        </div>

                    </div>


                    {{-- LENGTH --}}
                    <div class="vanesia-specification-item">

                        <div class="spec-number">
                            03
                        </div>

                        <div class="spec-content">
                            <span class="spec-label">
                                {{ __('Available Length') }}
                            </span>

                            <strong>
                                14–15 cm / 16–17 cm / 18–19 cm
                            </strong>
                        </div>

                    </div>


                    {{-- MOISTURE --}}
                    <div class="vanesia-specification-item">

                        <div class="spec-number">
                            04
                        </div>

                        <div class="spec-content">
                            <span class="spec-label">
                                {{ __('Moisture') }}
                            </span>

                            <strong>
                                25–30%
                            </strong>
                        </div>

                    </div>


                    {{-- ORIGIN --}}
                    <div class="vanesia-specification-item">

                        <div class="spec-number">
                            05
                        </div>

                        <div class="spec-content">
                            <span class="spec-label">
                                {{ __('Origin') }}
                            </span>

                            <strong>
                                Indonesia
                            </strong>
                        </div>

                    </div>

                </div>



    </div>

</section>

{{-- =========================
    WHY VANESIA
========================= --}}

<section id="why-vanesia" class="vanesia-why-section">

    <div class="container">

        {{-- HEADER --}}
        <div class="row justify-content-center text-center">

            <div class="col-lg-8">

                <div class="section-label">
                    {{ __('WHY VANESIA') }}
                </div>

                <h2 class="vanesia-why-title">
                    {{ __('Quality You Can Source With Confidence.') }}
                </h2>

                <p class="vanesia-why-subtitle">
                    {{ __('Kualitas yang dapat Anda peroleh dengan penuh keyakinan.') }}
                </p>

                <p class="vanesia-why-description">
                    {{ __('We focus on reliable sourcing, careful selection, competitive value, and long-term partnerships with international buyers.') }}
                </p>

            </div>

        </div>


        {{-- FOUR PILLARS --}}
        <div class="row g-4 mt-5">

            {{-- 01 --}}
            <div class="col-lg-3 col-md-6">

                <div class="vanesia-why-card">

                    <div class="why-icon">
                        <i class="fa-solid fa-link"></i>
                    </div>

                    <span class="why-number">
                        01
                    </span>

                    <h3>
                        {{ __('Reliable Sourcing') }}
                    </h3>

                    <p class="why-indonesian">
                        {{ __('Sumber Pasokan yang Andal') }}
                    </p>

                    <div class="why-divider"></div>

                    <p>
                        {{ __('Carefully sourced from trusted Indonesian supply partners to support consistent availability.') }}
                    </p>

                </div>

            </div>


            {{-- 02 --}}
            <div class="col-lg-3 col-md-6">

                <div class="vanesia-why-card">

                    <div class="why-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <span class="why-number">
                        02
                    </span>

                    <h3>
                        {{ __('Careful Selection') }}
                    </h3>

                    <p class="why-indonesian">
                        {{ __('Pemilihan yang Cermat') }}
                    </p>

                    <div class="why-divider"></div>

                    <p>
                        {{ __('Vanilla beans are selected according to agreed specifications and buyer requirements.') }}
                    </p>

                </div>

            </div>


            {{-- 03 --}}
            <div class="col-lg-3 col-md-6">

                <div class="vanesia-why-card">

                    <div class="why-icon">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>

                    <span class="why-number">
                        03
                    </span>

                    <h3>
                        {{ __('Competitive Value') }}
                    </h3>

                    <p class="why-indonesian">
                        {{ __('Nilai yang Kompetitif') }}
                    </p>

                    <div class="why-divider"></div>

                    <p>
                        {{ __('Premium Indonesian vanilla positioned to deliver quality and commercial value for B2B buyers.') }}
                    </p>

                </div>

            </div>


            {{-- 04 --}}
            <div class="col-lg-3 col-md-6">

                <div class="vanesia-why-card">

                    <div class="why-icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>

                    <span class="why-number">
                        04
                    </span>

                    <h3>
                        {{ __('Built for Partnerships') }}
                    </h3>

                    <p class="why-indonesian">
                        {{ __('Dibangun untuk Menjalin Kemitraan') }}
                    </p>

                    <div class="why-divider"></div>

                    <p>
                        {{ __('We aim to build reliable, transparent, and long-term relationships with our international buyers.') }}
                    </p>

                </div>

            </div>

        </div>


        {{-- PROCESS VISUAL --}}
        <div class="row align-items-center mt-5 pt-lg-5">

            <div class="col-lg-6">

                <div class="vanesia-why-visual">

                    <img
                        src="{{ asset('images/vanesiapak.jpg') }}"
                        alt="{{ __('Careful Vanilla Selection') }}"
                    >

                    <div class="visual-caption">
                        <span>VANESIA</span>
                        <strong>
                            {{ __('Carefully Selected') }}
                        </strong>
                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="vanesia-why-statement">

                    <span>
                        {{ __('OUR APPROACH') }}
                    </span>

                    <h3>
                        {{ __('From careful sourcing to long-term partnerships.') }}
                    </h3>

                    <p>
                        {{ __('Every step is approached with clarity, care, and attention to agreed buyer requirements.') }}
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================
    OUR PROCESS
========================= --}}

<section id="process" class="vanesia-process-section">

    <div class="container">

        {{-- HEADER --}}
        <div class="row justify-content-center text-center">

            <div class="col-lg-8">

                <div class="section-label">
                    {{ __('OUR PROCESS') }}
                </div>

                <h2 class="vanesia-process-title">
                    {{ __('From Indonesia to Your Market.') }}
                </h2>

                <p class="vanesia-process-subtitle">
                    {{ __('Dari Indonesia ke Pasar Anda.') }}
                </p>

                <p class="vanesia-process-description">
                    {{ __('A carefully managed process from sourcing to export.') }}
                </p>

            </div>

        </div>


        {{-- PROCESS TIMELINE --}}
        <div class="vanesia-process-timeline">


            {{-- 01 SOURCE --}}
            <div class="vanesia-process-item">

                <div class="process-top">

                    <span class="process-number">
                        01
                    </span>

                    <div class="process-icon">
                        <i class="fa-solid fa-seedling"></i>
                    </div>

                </div>

                <div class="process-content">

                    <span class="process-action">
                        {{ __('SOURCE') }}
                    </span>

                    <h3>
                        {{ __('Trusted Indonesian Supply') }}
                    </h3>

                    <p class="process-indonesian">
                        {{ __('Sumber — Pasokan Indonesia yang Terpercaya') }}
                    </p>

                    <p>
                        {{ __('We work with trusted Indonesian supply partners to source Vanilla planifolia for international buyers.') }}
                    </p>

                </div>

            </div>


            {{-- 02 SELECT --}}
            <div class="vanesia-process-item">

                <div class="process-top">

                    <span class="process-number">
                        02
                    </span>

                    <div class="process-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                </div>

                <div class="process-content">

                    <span class="process-action">
                        {{ __('SELECT') }}
                    </span>

                    <h3>
                        {{ __('Careful Selection') }}
                    </h3>

                    <p class="process-indonesian">
                        {{ __('Seleksi — Pemilihan yang Cermat') }}
                    </p>

                    <p>
                        {{ __('Vanilla beans are selected based on size, grade, appearance, and agreed requirements.') }}
                    </p>

                </div>

            </div>


            {{-- 03 QUALITY CHECK --}}
            <div class="vanesia-process-item">

                <div class="process-top">

                    <span class="process-number">
                        03
                    </span>

                    <div class="process-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                </div>

                <div class="process-content">

                    <span class="process-action">
                        {{ __('QUALITY CHECK') }}
                    </span>

                    <h3>
                        {{ __('Quality Check') }}
                    </h3>

                    <p class="process-indonesian">
                        {{ __('Pemeriksaan Kualitas') }}
                    </p>

                    <p>
                        {{ __('Product specifications are checked before preparation for shipment.') }}
                    </p>

                </div>

            </div>


            {{-- 04 PACK --}}
            <div class="vanesia-process-item">

                <div class="process-top">

                    <span class="process-number">
                        04
                    </span>

                    <div class="process-icon">
                        <i class="fa-solid fa-box"></i>
                    </div>

                </div>

                <div class="process-content">

                    <span class="process-action">
                        {{ __('PACK') }}
                    </span>

                    <h3>
                        {{ __('Secure Packaging') }}
                    </h3>

                    <p class="process-indonesian">
                        {{ __('Pengemasan — Pengemasan yang Aman') }}
                    </p>

                    <p>
                        {{ __('Vanilla beans are prepared and packed according to the agreed order and shipping requirements.') }}
                    </p>

                </div>

            </div>


            {{-- 05 EXPORT --}}
            <div class="vanesia-process-item">

                <div class="process-top">

                    <span class="process-number">
                        05
                    </span>

                    <div class="process-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>

                </div>

                <div class="process-content">

                    <span class="process-action">
                        {{ __('EXPORT') }}
                    </span>

                    <h3>
                        {{ __('Ready for International Delivery') }}
                    </h3>

                    <p class="process-indonesian">
                        {{ __('Ekspor — Siap untuk Pengiriman Internasional') }}
                    </p>

                    <p>
                        {{ __('Orders are prepared for international shipment according to the agreed commercial and shipping terms.') }}
                    </p>

                </div>

            </div>


        </div>


        {{-- BOTTOM STATEMENT --}}
        <div class="vanesia-process-bottom">

            <span>
                {{ __('FROM SOURCE TO SHIPMENT') }}
            </span>

            <strong>
                {{ __('A clear process. Carefully managed.') }}
            </strong>

        </div>

    </div>

</section>

{{-- =========================
    EXPORT & PACKAGING
========================= --}}

<section id="export" class="vanesia-export-section">

    <div class="container">

        {{-- HEADER --}}
        <div class="row justify-content-center text-center">

            <div class="col-lg-8">

                <div class="section-label">
                    {{ __('EXPORT & PACKAGING') }}
                </div>

                <h2 class="vanesia-export-title">
                    {{ __('Prepared for International Delivery.') }}
                </h2>

                <p class="vanesia-export-subtitle">
                    {{ __('Dipersiapkan untuk Pengiriman Internasional.') }}
                </p>

            </div>

        </div>


        {{-- MAIN VISUAL + SAMPLE --}}
        <div class="row align-items-center g-5 mt-4">

            {{-- PACKAGING IMAGE --}}
            <div class="col-lg-6">

                <div class="vanesia-packaging-visual">

                    <img
                        src="{{ asset('images/pack.jpg') }}"
                        alt="{{ __('Clear Vacuum-Sealed Packaging') }}"
                    >

                    <div class="packaging-caption">

                        <span>
                            VANESIA
                        </span>

                        <strong>
                            {{ __('Clear Vacuum-Sealed Packaging') }}
                        </strong>

                    </div>

                </div>

            </div>


            {{-- SAMPLE OPTIONS --}}
            <div class="col-lg-6">

                <div class="vanesia-sample-content">

                    <div class="sample-intro">

                        <span>
                            {{ __('SAMPLE OPTIONS') }}
                        </span>

                        <p>
                            {{ __('Choose an evaluation pack according to your initial product assessment needs.') }}
                        </p>

                    </div>


                   


                    {{-- 1 KG --}}
                    <div class="vanesia-sample-option recommended">

                        <div class="recommended-label">
                            {{ __('RECOMMENDED') }}
                        </div>

                        <div class="sample-weight">
                            1 kg
                        </div>

                        <div class="sample-details">

                            <h3>
                                {{ __('Recommended Evaluation Pack') }}
                            </h3>

                            <p>
                                {{ __('Untuk evaluasi yang serius, kami merekomendasikan sampel 1 kg. Jumlah ini memberikan volume yang lebih representatif untuk menilai kualitas, konsistensi, aroma, dan kesesuaian produk dengan kebutuhan Anda.') }}
                            </p>

                        </div>

                    </div>


                    {{-- SHIPPING NOTE --}}
                    <div class="vanesia-shipping-note">

                        <div class="shipping-icon">
                            <i class="fa-solid fa-truck"></i>
                        </div>

                        <div>

                            <p>
                                {{ __('Shipping costs may be similar, depending on destination and courier.') }}
                            </p>

                            <strong>
                                {{ __('For this reason, we recommend the 1 kg evaluation pack.') }}
                            </strong>

                        </div>

                    </div>


                    {{-- IMPORTANT NOTE --}}
                    <div class="vanesia-evaluation-note">

                        <i class="fa-solid fa-circle-info"></i>

                        <span>
                            {{ __('1 kg is an evaluation pack size, not a commercial MOQ.') }}
                        </span>

                    </div>

                </div>

            </div>

        </div>


        {{-- COMMERCIAL TERMS --}}
        <div class="vanesia-commercial-section">

            <div class="commercial-heading">

                <div class="section-label">
                    {{ __('COMMERCIAL & PAYMENT TERMS') }}
                </div>

                <p>
                    {{ __('Payment and shipping arrangements are discussed according to the order and agreed terms.') }}
                </p>

            </div>


            <div class="row g-4 mt-3">

                {{-- SMALL ORDERS --}}
                <div class="col-lg-4">

                    <div class="commercial-item">

                        <span class="commercial-number">
                            01
                        </span>

                        <h3>
                            {{ __('Small Orders') }}
                        </h3>

                        <p>
                            {{ __('Full payment is required before order processing, including applicable shipping costs.') }}
                        </p>

                    </div>

                </div>


                {{-- ABOVE 5 KG --}}
                <div class="col-lg-4">

                    <div class="commercial-item">

                        <span class="commercial-number">
                            02
                        </span>

                        <h3>
                            {{ __('Orders Above 5 kg') }}
                        </h3>

                        <p>
                            {{ __('For orders above 5 kg, a deposit may be arranged, with the remaining balance payable according to the agreed order terms.') }}
                        </p>

                    </div>

                </div>


                {{-- SHIPPING --}}
                <div class="col-lg-4">

                    <div class="commercial-item">

                        <span class="commercial-number">
                            03
                        </span>

                        <h3>
                            {{ __('Shipping') }}
                        </h3>

                        <p>
                            {{ __('Shipping costs are calculated separately based on destination, shipment weight, courier, and applicable shipping requirements.') }}
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- CTA --}}
        <div class="vanesia-export-cta">

            <div>

                <span>
                    {{ __('READY TO DISCUSS YOUR REQUIREMENTS?') }}
                </span>

                <h3>
                    {{ __('Tell us what you need.') }}
                </h3>

            </div>

            <a href="#contact" class="vanesia-btn vanesia-btn-primary">

                {{ __('Request a Quote') }}

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section>

{{-- =========================
    WHO WE SERVE
========================= --}}

<section id="who-we-serve" class="vanesia-who-section">

    <div class="container">

        {{-- HEADER --}}
        <div class="row align-items-end g-4">

            <div class="col-lg-7">

                <div class="section-label">
                    {{ __('WHO WE SERVE') }}
                </div>

                <h2 class="vanesia-who-title">
                    {{ __('For Businesses Looking for Indonesian Vanilla.') }}
                </h2>

                <p class="vanesia-who-subtitle">
                    {{ __('Untuk Bisnis yang Membutuhkan Vanili Indonesia.') }}
                </p>

            </div>

            <div class="col-lg-5">

                <p class="vanesia-who-intro">
                    {{ __('Whether you are sourcing for production, distribution, or specialty applications, VANESIA aims to provide a reliable Indonesian vanilla supply partner.') }}
                </p>

            </div>

        </div>


        {{-- BUYER TYPES --}}
        <div class="vanesia-buyer-grid">

            {{-- 01 --}}
            <div class="vanesia-buyer-item">

                <span class="buyer-number">
                    01
                </span>

                <div class="buyer-icon">
                    <i class="fa-solid fa-industry"></i>
                </div>

                <h3>
                    {{ __('Food Manufacturers') }}
                </h3>

                <p>
                    {{ __('Produsen Makanan') }}
                </p>

            </div>


            {{-- 02 --}}
            <div class="vanesia-buyer-item">

                <span class="buyer-number">
                    02
                </span>

                <div class="buyer-icon">
                    <i class="fa-solid fa-bottle-water"></i>
                </div>

                <h3>
                    {{ __('Beverage & Ingredient Companies') }}
                </h3>

                <p>
                    {{ __('Perusahaan Minuman & Bahan Baku') }}
                </p>

            </div>


            {{-- 03 --}}
            <div class="vanesia-buyer-item">

                <span class="buyer-number">
                    03
                </span>

                <div class="buyer-icon">
                    <i class="fa-solid fa-cake-candles"></i>
                </div>

                <h3>
                    {{ __('Bakeries & Confectionery Businesses') }}
                </h3>

                <p>
                    {{ __('Bisnis Bakery & Konfeksioneri') }}
                </p>

            </div>


            {{-- 04 --}}
            <div class="vanesia-buyer-item">

                <span class="buyer-number">
                    04
                </span>

                <div class="buyer-icon">
                    <i class="fa-solid fa-flask"></i>
                </div>

                <h3>
                    {{ __('Flavor & Ingredient Buyers') }}
                </h3>

                <p>
                    {{ __('Buyer Flavor & Bahan Baku') }}
                </p>

            </div>


            {{-- 05 --}}
            <div class="vanesia-buyer-item">

                <span class="buyer-number">
                    05
                </span>

                <div class="buyer-icon">
                    <i class="fa-solid fa-boxes-stacked"></i>
                </div>

                <h3>
                    {{ __('Distributors & Importers') }}
                </h3>

                <p>
                    {{ __('Distributor & Importir') }}
                </p>

            </div>


            {{-- 06 --}}
            <div class="vanesia-buyer-item">

                <span class="buyer-number">
                    06
                </span>

                <div class="buyer-icon">
                    <i class="fa-solid fa-tags"></i>
                </div>

                <h3>
                    {{ __('Private Label & Specialty Businesses') }}
                </h3>

                <p>
                    {{ __('Bisnis Private Label & Produk Khusus') }}
                </p>

            </div>

        </div>


        {{-- B2B STATEMENT --}}
        <div class="vanesia-b2b-statement">

            <div class="b2b-line"></div>

            <div>

                <span>
                    {{ __('B2B FOCUS') }}
                </span>

                <strong>
                    {{ __('Built around business requirements, not retail shopping.') }}
                </strong>

            </div>

        </div>

    </div>

</section>

{{-- =========================
    REQUEST A QUOTE
========================= --}}

<section id="contact" class="vanesia-quote-section">

    <div class="container">

        <div class="row g-5 align-items-start">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-5">

                <div class="section-label">
                    {{ __('REQUEST A QUOTE') }}
                </div>

                <h2 class="vanesia-quote-title">
                    {{ __("Let's Discuss Your Vanilla Requirements.") }}
                </h2>

                <p class="vanesia-quote-subtitle">
                    {{ __('Mari Diskusikan Kebutuhan Vanili Anda.') }}
                </p>

                <p class="vanesia-quote-description">
                    {{ __('Tell us what you are looking for, and we will prepare a quotation based on your product specifications, quantity, packaging, and destination.') }}
                </p>

                <div class="vanesia-quote-note">

                    <span>{{ __('B2B INQUIRY') }}</span>

                    <strong>
                        {{ __('Tell us what you need. We will discuss the details with you.') }}
                    </strong>

                </div>

            </div>


            {{-- FORM --}}
            <div class="col-lg-7">

                <form
                action="{{ route('quote.store') }}"
                method="POST"
                class="vanesia-quote-form"
                onsubmit="sendToWhatsApp(event)"
            >


                    @csrf

                    <div class="row g-4">

                        {{-- NAME --}}
                        <div class="col-md-6">
                            <label for="name">
                                {{ __('Name') }}
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="{{ __('Your name') }}"
                                required
                            >
                        </div>


                        {{-- COMPANY --}}
                        <div class="col-md-6">
                            <label for="company">
                                {{ __('Company') }}
                            </label>

                            <input
                                type="text"
                                id="company"
                                name="company"
                                value="{{ old('company') }}"
                                placeholder="{{ __('Company name') }}"
                            >
                        </div>


                        {{-- COUNTRY --}}
                        <div class="col-md-6">
                            <label for="country">
                                {{ __('Country') }}
                            </label>

                            <input
                                type="text"
                                id="country"
                                name="country"
                                value="{{ old('country') }}"
                                placeholder="{{ __('Your country') }}"
                                required
                            >
                        </div>


                        {{-- EMAIL --}}
                        <div class="col-md-6">
                            <label for="email">
                                {{ __('Email') }}
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="{{ __('Your business email') }}"
                                required
                            >
                        </div>


                        {{-- PRODUCT REQUIREMENT --}}
                        <div class="col-12">
                            <label for="product_requirement">
                                {{ __('Product Requirement') }}
                            </label>

                            <input
                                type="text"
                                id="product_requirement"
                                name="product_requirement"
                                value="{{ old('product_requirement') }}"
                                placeholder="{{ __('Example: Vanilla planifolia Grade A') }}"
                                required
                            >
                        </div>


                        {{-- QUANTITY --}}
                        <div class="col-md-6">
                            <label for="quantity">
                                {{ __('Quantity') }}
                            </label>

                            <input
                                type="text"
                                id="quantity"
                                name="quantity"
                                value="{{ old('quantity') }}"
                                placeholder="{{ __('Example: 1 kg, 5 kg, 20 kg') }}"
                                required
                            >
                        </div>


                        {{-- LENGTH --}}
                        <div class="col-md-6">
                            <label for="preferred_length">
                                {{ __('Preferred Length') }}
                            </label>

                            <select
                                id="preferred_length"
                                name="preferred_length"
                                required
                            >
                                <option value="">
                                    {{ __('Select length') }}
                                </option>

                                <option value="14-15 cm">
                                    14–15 cm
                                </option>

                                <option value="16-17 cm">
                                    16–17 cm
                                </option>

                                <option value="18-19 cm">
                                    18–19 cm
                                </option>

                                <option value="Flexible">
                                    {{ __('Flexible / Not sure') }}
                                </option>

                            </select>
                        </div>


                        {{-- DESTINATION --}}
                        <div class="col-12">
                            <label for="destination">
                                {{ __('Destination') }}
                            </label>

                            <input
                                type="text"
                                id="destination"
                                name="destination"
                                value="{{ old('destination') }}"
                                placeholder="{{ __('City / Country') }}"
                                required
                            >
                        </div>


                        {{-- MESSAGE --}}
                        <div class="col-12">

                            <label for="message">
                                {{ __('Message') }}
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                placeholder="{{ __('Tell us about your requirements...') }}"
                            >{{ old('message') }}</textarea>

                        </div>


                       

                            {{-- BUTTON --}}
                        <div class="col-12">
                        <button
                            type="submit"
                            class="vanesia-btn vanesia-btn-primary vanesia-quote-submit"
                        >
                            {{ __('Request a Quote') }}

                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>


                    </div>

                </form>

            </div>

        </div>

    </div>

</section>



<script>
function sendToWhatsApp(event) {
    event.preventDefault();

    const name = document.getElementById('name').value.trim();
    const company = document.getElementById('company').value.trim();
    const country = document.getElementById('country').value.trim();
    const email = document.getElementById('email').value.trim();

    const product = document.getElementById('product_requirement').value.trim();
    const quantity = document.getElementById('quantity').value.trim();
    const length = document.getElementById('preferred_length').value;
    const destination = document.getElementById('destination').value.trim();
    const message = document.getElementById('message').value.trim();

    /*
     * Nomor WhatsApp VANESIA
     * Format:
     * 628xxxxxxxxxx
     * Jangan gunakan +, spasi, atau tanda -
     */
    const whatsappNumber = '6287823829816';

    const whatsappMessage = `Hello VANESIA,

I would like to request a quotation for Indonesian vanilla.

========================
CUSTOMER INFORMATION
========================

Name: ${name}
Company: ${company || '-'}
Country: ${country}
Email: ${email}

========================
PURCHASE REQUIREMENTS
========================

Product Requirement:
${product}

Quantity:
${quantity}

Preferred Length:
${length}

Destination:
${destination}

Additional Message:
${message || '-'}

========================

Thank you.
I look forward to discussing the details with VANESIA.`;

    const whatsappURL =
        'https://wa.me/' +
        whatsappNumber +
        '?text=' +
        encodeURIComponent(whatsappMessage);

    // Buka WhatsApp
    window.location.href = whatsappURL;
}
</script>