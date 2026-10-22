<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tukbumi mengolah sampah organik menjadi biochar untuk lingkungan yang lebih bersih, hijau, dan berkelanjutan.">
    <title>{{ config('app.name', 'Tukbumi') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tukbumi.css') }}">
</head>
<body>
        {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="brand" href="{{ url('/') }}" aria-label="Tukbumi Home">
                <span class="brand-mark">♻</span>
                <span>Tukbumi<span class="gold-text">.</span></span>
            </a>

            <div class="d-flex align-items-center gap-2 ms-auto">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-eco">
                            Dashboard <span aria-hidden="true">↗</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn-outline-eco">
                            Masuk
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-eco">
                                Daftar <span aria-hidden="true">↗</span>
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="eyebrow">Sustainability starts here</div>

                    <h1>
                        Mengubah Limbah,
                        <span>Menghidupkan</span>
                        Masa Depan.
                    </h1>

                    <p class="hero-description">
                        Selamat datang di Tukbumi. Kami mengolah sampah organik
                        menjadi biochar untuk mendukung lingkungan Indonesia
                        yang lebih bersih, hijau, dan berkelanjutan.
                    </p>

                    <div class="hero-actions">
                        <a href="#informasi" class="btn-outline-eco">
                            Informasi Kami
                        </a>
                    </div>

                    <div class="hero-note">
                        <span class="note-icon" aria-hidden="true">🌱</span>
                        <span>
                            <strong class="green-text">Berawal dari kepedulian.</strong>
                            <br>
                            Bertumbuh untuk bumi yang lebih baik.
                        </span>
                    </div>
                </div>

                <div class="col-lg-5" id="tentang">
                    <div class="hero-visual">
                        <div class="hero-image">
                            <img
                                src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=1100&q=85"
                                alt="Hutan hijau yang menggambarkan alam yang lestari"
                                fetchpriority="high"
                            >

                            <div class="image-overlay"></div>

                            <div class="image-caption">
                                <small>Our commitment</small>
                                <h3>Better Earth, Better Future.</h3>
                            </div>
                        </div>

                        <div class="floating-card">
                            <div class="floating-icon" aria-hidden="true">♻</div>
                            <strong>Waste to Worth</strong>
                            <p>Menghadirkan nilai baru dari sampah organik melalui inovasi biochar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NILAI UTAMA --}}
    <section class="values">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <div class="value-item">
                        <span class="value-icon" aria-hidden="true">🌿</span>
                        <div>
                            <strong>Peduli Lingkungan</strong>
                            <small>Langkah nyata untuk bumi</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="value-item">
                        <span class="value-icon" aria-hidden="true">♻</span>
                        <div>
                            <strong>Ekonomi Sirkular</strong>
                            <small>Limbah menjadi sumber daya</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="value-item">
                        <span class="value-icon" aria-hidden="true">🌏</span>
                        <div>
                            <strong>Masa Depan Berkelanjutan</strong>
                            <small>Untuk generasi mendatang</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- INFORMASI --}}
    <section class="information" id="informasi">
        <div class="container">
            <div class="section-heading">
                <div class="eyebrow">Discover Tukbumi</div>

                <h2>Mengenal Lebih Dekat Perjalanan Kami</h2>

                <p>
                    Transparansi, inovasi, dan kepedulian terhadap lingkungan
                    menjadi bagian dari perjalanan kami membangun masa depan
                    yang lebih berkelanjutan.
                </p>
            </div>

            <div class="row g-4">
                {{-- MEDIA SOSIAL --}}
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon" aria-hidden="true">✉</div>

                        <h3>Hubungi Kami</h3>

                        <p>
                            Mari terhubung dan temukan informasi lebih lanjut
                            mengenai Tukbumi.
                        </p>

                        <div class="accordion accordion-flush"
                             id="contactAccordion">

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#contactDetails"
                                        aria-expanded="false"
                                        aria-controls="contactDetails">
                                        Informasi Kontak
                                    </button>
                                </h4>

                                <div id="contactDetails"
                                     class="accordion-collapse collapse"
                                     data-bs-parent="#contactAccordion">
                                    <div class="accordion-body">
                                        <div class="mb-2">
                                            <strong>WhatsApp</strong><br>
                                            <a class="contact-link"
                                               href="https://wa.me/6281111812816"
                                               target="_blank"
                                               rel="noopener noreferrer">
                                                +62 811 11 812 816
                                            </a>
                                        </div>

                                        <div class="mb-2">
                                            <strong>Website</strong><br>
                                            <a class="contact-link"
                                               href="https://www.tukbumi.com"
                                               target="_blank"
                                               rel="noopener noreferrer">
                                                www.tukbumi.com
                                            </a>
                                        </div>

                                        <div>
                                            <strong>Email</strong><br>
                                            <a class="contact-link"
                                               href="mailto:info@tukbumi.com">
                                                info@tukbumi.com
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TEKNOLOGI --}}
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon" aria-hidden="true">⌘</div>

                        <h3>Teknologi Kami</h3>

                        <p>
                            Memanfaatkan teknologi modern untuk menghadirkan
                            pengalaman digital yang efektif dan mudah digunakan.
                        </p>

                        <div class="accordion accordion-flush"
                             id="technologyAccordion">

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#technologyDetails"
                                        aria-expanded="false"
                                        aria-controls="technologyDetails">
                                        Platform Digital
                                    </button>
                                </h4>

                                <div id="technologyDetails"
                                     class="accordion-collapse collapse"
                                     data-bs-parent="#technologyAccordion">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <strong>Website</strong><br>
                                            Laravel — framework PHP untuk
                                            pengembangan aplikasi web.
                                        </div>

                                        <div>
                                            <strong>Aplikasi Mobile</strong><br>
                                            Flutter — framework untuk membangun
                                            aplikasi lintas platform.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ALAMAT --}}
                <div class="col-lg-4 col-md-12">
                    <div class="info-card">
                        <div class="info-icon" aria-hidden="true">⌖</div>

                        <h3>Lokasi Kami</h3>

                        <p>
                            Temukan lokasi kantor Tukbumi untuk kebutuhan
                            komunikasi dan informasi perusahaan.
                        </p>

                        <div class="accordion accordion-flush"
                             id="addressAccordion">

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#addressDetails"
                                        aria-expanded="false"
                                        aria-controls="addressDetails">
                                        Alamat Perusahaan
                                    </button>
                                </h4>

                                <div id="addressDetails"
                                     class="accordion-collapse collapse"
                                     data-bs-parent="#addressAccordion">
                                    <div class="accordion-body">
                                        Gedung Talavera Office Park,
                                        Lantai 28.<br>
                                        Jl. TB Simatupang Kav. 22–26,
                                        Kelurahan Cilandak Barat,
                                        Kecamatan Cilandak,
                                        Jakarta Selatan 12430.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="cta-section">
        <div class="container">
            <div class="cta-panel">
                <h2>Mari Tumbuh Bersama Tukbumi</h2>

                <p>
                    Perubahan besar dimulai dari langkah kecil.
                    Bersama-sama, kita dapat menciptakan lingkungan yang lebih
                    bersih dan masa depan yang lebih hijau.
                </p>

                <a href="https://www.tukbumi.com"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="btn-light-eco">
                    Jelajahi Tukbumi <span class="ms-2" aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <div class="row align-items-center gy-3">
                <div class="col-md-7">
                    <a class="footer-brand" href="{{ url('/') }}">
                        Tukbumi<span class="gold-text">.</span>
                    </a>

                    <p class="footer-text">
                        Mengubah limbah menjadi peluang untuk bumi yang lebih baik.
                    </p>
                </div>

                <div class="col-md-5">
                    <p class="footer-copy text-md-end mb-0">
                        &copy; {{ date('Y') }} Tukbumi.
                        Dibuat dengan kepedulian terhadap bumi.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
