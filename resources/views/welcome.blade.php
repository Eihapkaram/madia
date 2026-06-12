<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $dir }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ app()->getLocale() == 'ar'
        ? 'محمد القرشي'
        : 'Muhammad Elkorashy'
    }}
    </title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="bg-dark text-white overflow-x-hidden">
    

    <div class="fixed inset-0 -z-10 bg-[radial-gradient(circle_at_top_right,rgba(59,130,246,.15),transparent_30%),radial-gradient(circle_at_top_left,rgba(139,92,246,.15),transparent_30%),linear-gradient(to_bottom,#050814,#080d1c)]"></div>

    <nav class="fixed top-0 left-0 right-0 z-50 border-b border-white/10 backdrop-blur-xl bg-[#050814]/70">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <h1 class="text-2xl font-black">
                {{ app()->getLocale() == 'ar'
        ? 'محمد القرشي'
        : 'Muhammad Elkorashy'
    }}<span class="text-primary"></span>
            </h1>

            <div class="hidden lg:flex items-center gap-8 text-sm text-gray-300">

                <a href="#home" class="hover:text-white transition">
                    {{ app()->getLocale() == 'ar' ? 'الرئيسية' : 'Home' }}
                </a>

                <a href="#philosophy" class="hover:text-white transition">
                    {{ app()->getLocale() == 'ar' ? 'الفلسفة' : 'Philosophy' }}
                </a>

                <a href="#case-study" class="hover:text-white transition">
                    {{ app()->getLocale() == 'ar' ? 'دراسة الحالة' : 'Case Study' }}
                </a>

                <a href="#results" class="hover:text-white transition">
                    {{ app()->getLocale() == 'ar' ? 'شاهد النتائج' : 'Results' }}
                </a>

                <a href="#services" class="hover:text-white transition">
                    {{ app()->getLocale() == 'ar' ? 'الخدمات' : 'Services' }}
                </a>

                <a href="#sectors" class="hover:text-white transition">
                    {{ app()->getLocale() == 'ar' ? 'القطاعات' : 'Sectors' }}
                </a>

                <a href="#process" class="hover:text-white transition">
                    {{ app()->getLocale() == 'ar' ? 'منهجية العمل' : 'Process' }}
                </a>

                <a href="#proof" class="hover:text-white transition">
                    {{ app()->getLocale() == 'ar' ? 'آراء العملاء' : 'Testimonials' }}
                </a>

            </div>

            <div class="flex items-center gap-3">
                @if($locale === 'ar')
                <a href="{{ route('home', 'en') }}" class="px-4 py-2 rounded-xl border border-white/10 bg-white/5 text-sm font-bold">
                    EN
                </a>
                @else
                <a href="{{ route('home', 'ar') }}" class="px-4 py-2 rounded-xl border border-white/10 bg-white/5 text-sm font-bold">
                    AR
                </a>
                @endif

                <a href="#contact" class="bg-gradient-to-r from-primary to-secondary px-5 py-3 rounded-xl font-bold shadow-lg shadow-primary/20 hover:scale-105 transition">
                    {{ __('home.nav_cta') }}
                </a>
            </div>

        </div>
    </nav>

    <section id="home" class="min-h-screen flex items-center pt-32 px-6">

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">

            <div>

                <div class="inline-flex items-center rounded-full border border-primary/20 bg-primary/10 px-5 py-2 text-sm font-bold text-primary">
                    {{ __('home.hero_badge') }}
                </div>

                <h1 class="text-5xl md:text-7xl font-black leading-tight mt-8">
                    {{ __('home.hero_title_1') }}
                    <span class="text-primary block mt-2">
                        {{ __('home.hero_title_2') }}
                    </span>
                </h1>

                <p class="text-gray-300 text-lg leading-9 mt-8 max-w-2xl">
                    {{ __('home.hero_text') }}
                </p>

                <p class="mt-6 border border-secondary/20 bg-secondary/10 rounded-2xl px-5 py-4 text-secondary font-bold max-w-2xl">
                    {{ __('home.compliance') }}
                </p>

                <div class="flex flex-wrap gap-4 mt-10">

                    <a href="#contact" class="bg-gradient-to-r from-primary to-secondary px-8 py-4 rounded-2xl font-bold text-lg shadow-xl shadow-primary/25 hover:scale-105 transition">
                        {{ __('home.hero_cta') }}
                    </a>

                    <a href="#results" class="border border-white/10 bg-white/5 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white/10 transition">
                        {{ __('home.hero_secondary') }}
                    </a>

                </div>

                <div class="mt-10 border border-white/10 bg-white/5 rounded-2xl px-5 py-4 text-gray-300 font-semibold">
                    {{ __('home.platforms') }}
                </div>

            </div>

            <div class="relative">

                <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full"></div>

                <div class="relative border border-white/10 bg-white/5 backdrop-blur-xl rounded-[40px] p-5 overflow-hidden">

                    <div class="aspect-[4/5] rounded-[30px] bg-gradient-to-br from-primary/20 to-secondary/20 border border-white/10 overflow-hidden relative">

                        <img src="{{ asset('images/profile.webp') }}" alt="Muhammad Elkorashy" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                        <div class="hidden w-full h-full items-center justify-center text-center p-8">
                            <div>
                                <div class="w-32 h-32 rounded-full bg-white/10 mx-auto mb-6"></div>

                                <h3 class="text-3xl font-black">
                                    {{ __('home.photo_title') }}
                                </h3>

                                <p class="text-gray-400 mt-3">
                                    {{ __('home.photo_text') }}
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="absolute bottom-8 right-8 left-8 grid grid-cols-2 gap-4">

                        <div class="bg-[#071022]/90 border border-white/10 rounded-2xl p-4 backdrop-blur-xl">
                            <p class="text-sm text-gray-400">ROAS</p>
                            <h3 class="text-3xl font-black text-primary">
                                {{ __('home.roas') }}
                            </h3>
                        </div>

                        <div class="bg-[#071022]/90 border border-white/10 rounded-2xl p-4 backdrop-blur-xl">
                            <p class="text-sm text-gray-400">Method</p>
                            <h3 class="text-xl font-black text-secondary">
                                {{ __('home.method') }}
                            </h3>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>









    {{-- Philosophy / Positioning --}}
    <section id="philosophy" class="py-28 px-6 relative">

        <div class="max-w-7xl mx-auto">

            <div class="text-center max-w-4xl mx-auto mb-16">

                <div class="inline-flex items-center rounded-full border border-primary/20 bg-primary/10 px-5 py-2 text-sm font-bold text-primary">
                    {{ __('home.philosophy_label') }}
                </div>

                <h2 class="text-4xl md:text-6xl font-black leading-tight mt-6">
                    {{ __('home.philosophy_title') }}
                </h2>

                <p class="text-gray-300 text-lg leading-9 mt-6">
                    {{ __('home.philosophy_text') }}
                </p>

            </div>

            <div class="grid md:grid-cols-3 gap-8">

                @foreach(__('home.philosophy_cards') as $card)
                <div class="group bg-white/5 border border-white/10 rounded-[32px] p-8 backdrop-blur-xl hover:border-primary/40 hover:bg-primary/5 transition duration-300">

                    {{-- <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                        {{ $card['icon'] }}
                </div> --}}

                <h3 class="text-2xl font-black mb-4">
                    {{ $card['title'] }}
                </h3>

                <p class="text-gray-400 leading-8">
                    {{ $card['text'] }}
                </p>

            </div>
            @endforeach

        </div>

        </div>

    </section>





    {{-- Case Study --}}
    <section id="case-study" class="py-28 px-6 bg-[#080d1c] relative overflow-hidden">

        <div class="absolute top-0 right-0 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto relative z-10">

            <div class="text-center max-w-4xl mx-auto mb-16">

                <div class="inline-flex items-center rounded-full border border-secondary/20 bg-secondary/10 px-5 py-2 text-sm font-bold text-secondary">
                    {{ __('home.case_label') }}
                </div>

                <h2 class="text-4xl md:text-6xl font-black leading-tight mt-6">
                    {{ __('home.case_title') }}
                </h2>

            </div>

            <div class="grid gap-16">

                @foreach(__('home.case_studies') as $index => $case)

                <div class="grid gap-10">

                    <div class="bg-white/5 border border-white/10 rounded-[40px] p-8 md:p-10 backdrop-blur-xl shadow-2xl">

                        <div class="flex flex-wrap items-center justify-between gap-6 mb-10">

                            <div>
                                <p class="text-gray-400 font-bold mb-2">
                                    {{ __('home.case_label') }}
                                </p>

                                <h3 class="text-4xl font-black">
                                    {{ $case['brand'] }}
                                </h3>
                            </div>

                            <div class="bg-gradient-to-r from-primary to-secondary rounded-3xl px-6 py-4 text-center shadow-lg shadow-primary/20">

                                <h4 class="text-4xl font-black">
                                    {{ $case['highlight'] }}
                                </h4>

                                <p class="text-sm mt-1 text-white/80">
                                    {{ $case['highlight_text'] }}
                                </p>

                            </div>

                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">

                            @foreach($case['cards'] as $card)

                            <div class="bg-black/20 border border-white/10 rounded-3xl p-6 hover:border-primary/40 transition">

                                <div class="text-4xl font-black text-primary mb-5">
                                    {{ $card['number'] }}
                                </div>

                                <h4 class="text-2xl font-black mb-3">
                                    {{ $card['title'] }}
                                </h4>

                                <p class="text-gray-400 leading-8">
                                    {{ $card['text'] }}
                                </p>

                            </div>

                            @endforeach

                        </div>

                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8">

                            @foreach($case['metrics'] as $metric)

                            <div class="bg-primary/10 border border-primary/20 rounded-2xl p-4 text-center font-black text-primary">
                                {{ $metric }}
                            </div>

                            @endforeach

                        </div>

                    </div>

                    <div class="{{ $case['brand'] === 'Medical Island' ? 'grid grid-cols-1' : 'grid lg:grid-cols-2' }} gap-8">

                        <div class="bg-white/5 border border-white/10 rounded-[36px] p-5 backdrop-blur-xl overflow-hidden">

                            <div class="swiper caseStudySlider-{{ $index }} overflow-hidden rounded-[28px]">

                                <div class="swiper-wrapper">

                                    @foreach($case['media'] as $item)

                                    <div class="swiper-slide">

                                        <div class="rounded-[28px] border border-white/10 bg-[#0B1120] p-4 flex items-center justify-center min-h-[420px]">

                                            @if($item['type'] === 'video')

                                            <video controls class="max-h-[520px] w-full object-contain rounded-2xl case-video">

                                                <source src="{{ asset('videos/' . $item['file']) }}" type="video/mp4">

                                            </video>

                                            @else

                                            <img src="{{ asset('images/case-study/' . $item['file']) }}" class="max-h-[520px] w-full object-contain rounded-2xl" alt="{{ $case['brand'] }}">

                                            @endif

                                        </div>

                                    </div>

                                    @endforeach

                                </div>

                                <div class="swiper-pagination"></div>

                            </div>

                            <div class="text-center mt-6">

                                <h4 class="text-2xl font-black">
                                    Campaign Snapshot
                                </h4>

                                <p class="text-gray-300 mt-3">
                                    Ads Manager / Graphs / Results Screenshot
                                </p>

                            </div>

                        </div>

                        @if($case['brand'] !== 'Medical Island')

                        <div class="bg-white/5 border border-white/10 rounded-[36px] p-6 min-h-[420px] flex items-center justify-center text-center">

                            @if(!empty($case['video']))

                            <video controls class="max-h-[520px] w-full object-contain rounded-2xl bg-[#0B1120]">
                                <source src="{{ asset('videos/' . $case['video']) }}" type="video/mp4">
                            </video>

                            @else

                            <div>
                                <div class="w-20 h-20 mx-auto rounded-3xl bg-white/10 flex items-center justify-center text-3xl mb-5">
                                    ▶
                                </div>

                                <h4 class="text-2xl font-black">
                                    Client Video Testimonial
                                </h4>

                                <p class="text-gray-400 mt-3">
                                    Place client video or reel here
                                </p>
                            </div>

                            @endif

                        </div>

                        @endif
                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </section>



    <section id="results" class="py-28 px-6 bg-[#050814] relative overflow-hidden">

        <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-secondary/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto relative z-10">

            <div class="text-center max-w-4xl mx-auto mb-16">

                <div class="inline-flex items-center rounded-full border border-primary/20 bg-primary/10 px-5 py-2 text-sm font-bold text-primary">
                    {{ app()->getLocale() == 'ar' ? 'النتائج' : 'Results' }}
                </div>

                <h2 class="text-4xl md:text-6xl font-black leading-tight mt-6">
                    {{ app()->getLocale() == 'ar' ? 'شاهد النتائج' : 'See The Results' }}
                </h2>

                <p class="text-gray-300 text-lg leading-9 mt-6">
                    {{ app()->getLocale() == 'ar'
                    ? 'نتائج حقيقية من الحملات الإعلانية والتحويلات والنمو الفعلي.'
                    : 'Real campaign performance, conversions, and measurable growth.'
                }}
                </p>

            </div>

            <div class="bg-white/5 border border-white/10 rounded-[40px] p-5 md:p-8 backdrop-blur-xl">

                <div class="swiper resultsSlider overflow-hidden rounded-[32px]">

                    <div class="swiper-wrapper">

                        @foreach(__('home.results_slider') as $result)

                        <div class="swiper-slide">

                            <div class="rounded-[28px] border border-white/10 bg-[#0B1120] p-4 flex items-center justify-center min-h-[520px]">

                                <img src="{{ asset('images/results/' . $result) }}" class="max-h-[520px] w-full object-contain rounded-2xl" alt="Results">

                            </div>

                        </div>

                        @endforeach

                    </div>

                    <div class="swiper-pagination"></div>

                </div>

            </div>

        </div>

    </section>




    {{-- Services --}}
    <section id="services" class="py-28 px-6 relative">

        <div class="max-w-7xl mx-auto">

            <div class="text-center max-w-4xl mx-auto mb-16">

                <div class="inline-flex items-center rounded-full border border-primary/20 bg-primary/10 px-5 py-2 text-sm font-bold text-primary">
                    {{ __('home.services_label') }}
                </div>

                <h2 class="text-4xl md:text-6xl font-black leading-tight mt-6">
                    {{ __('home.services_title') }}
                </h2>

                <p class="text-gray-300 text-lg leading-9 mt-6">
                    {{ __('home.services_text') }}
                </p>

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach(__('home.services_cards') as $service)

                <div class="group relative bg-white/5 border border-white/10 rounded-[36px] p-8 overflow-hidden backdrop-blur-xl hover:border-primary/40 hover:bg-primary/5 transition duration-500">

                    {{-- Glow --}}
                    <div class="absolute top-0 right-0 w-40 h-40 bg-primary/10 rounded-full blur-3xl opacity-0 group-hover:opacity-100 transition">
                    </div>

                    {{-- <div
                        class="relative w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">

                        {{ $service['icon'] }}

                </div> --}}

                <h3 class="text-2xl font-black mb-4 relative">
                    {{ $service['title'] }}
                </h3>

                <p class="text-gray-400 leading-8 relative">
                    {{ $service['text'] }}
                </p>

                <a href="#contact" class="mt-8 inline-flex items-center text-primary font-bold gap-2 group-hover:gap-4 transition-all">
                    {{ app()->getLocale() == 'ar' ? 'احجز استشارة' : 'Book Consultation' }}
                    <span>{{ app()->getLocale() == 'ar' ? '←' : '→' }}</span>
                </a>

            </div>

            @endforeach

        </div>

        </div>

    </section>


    {{-- Sectors --}}
    <section id="sectors" class="py-28 px-6 bg-[#080d1c] relative overflow-hidden">

        <div class="absolute top-0 left-0 w-96 h-96 bg-secondary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto relative z-10">

            <div class="text-center max-w-4xl mx-auto mb-16">

                <div class="inline-flex items-center rounded-full border border-secondary/20 bg-secondary/10 px-5 py-2 text-sm font-bold text-secondary">
                    {{ __('home.sectors_label') }}
                </div>

                <h2 class="text-4xl md:text-6xl font-black leading-tight mt-6">
                    {{ __('home.sectors_title') }}
                </h2>

                <p class="text-gray-300 text-lg leading-9 mt-6">
                    {{ __('home.sectors_text') }}
                </p>

            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach(__('home.sectors_cards') as $sector)
                <div class="group bg-white/5 border border-white/10 rounded-[32px] p-7 text-center backdrop-blur-xl hover:border-secondary/40 hover:bg-secondary/5 transition duration-300">

                    {{-- <div
                        class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition">
                        {{ $sector['icon'] }}
                </div> --}}

                <h3 class="text-xl font-black">
                    {{ $sector['title'] }}
                </h3>

            </div>
            @endforeach

        </div>

        </div>

    </section>



    {{-- Process --}}
    <section id="process" class="py-28 px-6 relative overflow-hidden">

        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto relative z-10">

            <div class="text-center max-w-4xl mx-auto mb-20">

                <div class="inline-flex items-center rounded-full border border-primary/20 bg-primary/10 px-5 py-2 text-sm font-bold text-primary">
                    {{ __('home.process_label') }}
                </div>

                <h2 class="text-4xl md:text-6xl font-black leading-tight mt-6">
                    {{ __('home.process_title') }}
                </h2>

                <p class="text-gray-300 text-lg leading-9 mt-6">
                    {{ __('home.process_text') }}
                </p>

            </div>

            <div class="grid lg:grid-cols-2 gap-8">

                @foreach(__('home.process_steps') as $step)

                <div class="group relative bg-white/5 border border-white/10 rounded-[36px] p-8 backdrop-blur-xl hover:border-primary/40 hover:bg-primary/5 transition duration-500 overflow-hidden">

                    {{-- Number --}}
                    <div class="absolute top-6 {{ app()->getLocale() == 'ar' ? 'left-6' : 'right-6' }} text-7xl font-black text-white/5 group-hover:text-primary/10 transition">
                        {{ $step['number'] }}
                    </div>

                    <div class="relative w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center text-2xl font-black text-primary mb-6">

                        {{ $step['number'] }}

                    </div>

                    <h3 class="text-2xl font-black mb-4 relative">
                        {{ $step['title'] }}
                    </h3>

                    <p class="text-gray-400 leading-8 relative">
                        {{ $step['text'] }}
                    </p>

                </div>

                @endforeach

            </div>

        </div>

    </section>




    {{-- Testimonials / Social Proof --}}
    <section id="proof" class="py-28 px-6 bg-[#080d1c] relative overflow-hidden">

        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto relative z-10">

            <div class="text-center max-w-4xl mx-auto mb-16">

                <div class="inline-flex items-center rounded-full border border-secondary/20 bg-secondary/10 px-5 py-2 text-sm font-bold text-secondary">
                    {{ __('home.proof_label') }}
                </div>

                <h2 class="text-4xl md:text-6xl font-black leading-tight mt-6">
                    {{ __('home.proof_title') }}
                </h2>

                <p class="text-gray-300 text-lg leading-9 mt-6">
                    {{ __('home.proof_text') }}
                </p>

            </div>

            <div class="max-w-4xl mx-auto">

                <div class="bg-white/5 border border-white/10 rounded-[40px] p-5 md:p-8 backdrop-blur-xl">

                    <div class="swiper testimonialsSlider overflow-hidden rounded-[32px]">

                        <div class="swiper-wrapper">

                            @foreach(__('home.proof_cards') as $card)

                            <div class="swiper-slide">

                                <div class="rounded-[28px] border border-white/10 bg-black/30 p-4 flex items-center justify-center min-h-[520px]">

                                    @if($card['media'] === 'video')
                                    <video controls class="max-h-[520px] w-full object-contain rounded-2xl">
                                        <source src="{{ asset('videos/' . $card['file']) }}" type="video/mp4">
                                    </video>
                                    @else
                                    <img src="{{ asset('images/testimonials/' . $card['file']) }}" alt="{{ $card['name'] }}" class="max-h-[520px] w-full object-contain rounded-2xl">
                                    @endif

                                </div>

                            </div>

                            @endforeach

                        </div>

                        <div class="swiper-pagination"></div>

                    </div>

                    <div class="text-center mt-8">
                        <h3 class="text-3xl font-black">
                            {{ app()->getLocale() == 'ar' ? 'آراء عملائنا' : 'Client Testimonials' }}
                        </h3>

                        <p class="text-gray-400 mt-3">
                            {{ app()->getLocale() == 'ar' ? 'تجارب حقيقية من أصحاب الأعمال' : 'Real feedback from business owners' }}
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>




    {{-- CTA --}}
    <section id="contact" class="py-28 px-6 relative overflow-hidden">

        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(59,130,246,.18),transparent_40%)]"></div>

        <div class="max-w-5xl mx-auto relative z-10">

            <div class="bg-gradient-to-br from-primary/20 via-secondary/10 to-white/5 border border-white/10 rounded-[44px] p-10 md:p-16 text-center backdrop-blur-xl shadow-2xl shadow-primary/10">

                <div class="inline-flex items-center rounded-full border border-primary/20 bg-primary/10 px-5 py-2 text-sm font-bold text-primary mb-6">
                    {{ app()->getLocale() == 'ar' ? 'ابدأ الآن' : 'Start Now' }}
                </div>

                <h2 class="text-4xl md:text-6xl font-black leading-tight">
                    {{ __('home.cta_title') }}
                </h2>

                <p class="text-gray-300 text-lg leading-9 mt-6 max-w-3xl mx-auto">
                    {{ __('home.cta_text') }}
                </p>

                <a href="https://wa.me/201000000000?text={{ urlencode(app()->getLocale() == 'ar' ? 'أهلاً، اطلعت على موقعك وعايز أعرف أكتر عن طريقة الشغل' : 'Hello, I checked your website and I want to know more about your process.') }}" target="_blank" class="inline-flex mt-10 bg-gradient-to-r from-primary to-secondary px-9 py-5 rounded-2xl font-black text-lg shadow-xl shadow-primary/25 hover:scale-105 transition">

                    {{ __('home.cta_button') }}

                </a>

                <p class="text-gray-400 text-sm mt-5">
                    {{ __('home.cta_note') }}
                </p>

            </div>

        </div>

    </section>

    {{-- Footer --}}
    <footer class="border-t border-white/10 py-10 px-6">

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-start">

            <div>
                <h3 class="text-2xl font-black">
                    {{ __('home.footer_title') }}<span class="text-primary">.</span>
                </h3>

                <p class="text-gray-400 mt-2">
                    {{ __('home.footer_subtitle') }}
                </p>

                <p class="text-secondary font-bold mt-3 text-sm">
                    {{ __('home.footer_trust') }}
                </p>
            </div>
            

            <div class="flex flex-wrap justify-center gap-5 text-gray-400 text-sm">

                <a href="https://wa.me/201013786366" target="_blank" class="hover:text-white transition">
                    WhatsApp
                </a>
                <a href="https://www.linkedin.com/in/muhammad-elkorashy-342b95354" class="hover:text-white transition">LinkedIn</a>
                <a href="https://www.instagram.com/muhammad_elkorashy" class="hover:text-white transition">Instagram</a>
                <a href="https://www.facebook.com/share/17UFuakPsf/" class="hover:text-white transition">Facebook</a>
                <a href="#" class="hover:text-white transition">Email</a>

            </div>

            <p class="text-gray-500 text-sm">
                © {{ date('Y') }} {{ __('home.footer_rights') }}
            </p>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        new Swiper('.caseStudySlider', {
            loop: true
            , spaceBetween: 20,

            autoplay: {
                delay: 2500
                , disableOnInteraction: false
            , },

            pagination: {
                el: '.swiper-pagination'
                , clickable: true
            , }
        , });

    </script>

    <script>
        const testimonialSwiper = new Swiper('.testimonialsSlider', {

            loop: true
            , spaceBetween: 20
            , slidesPerView: 1,

            autoplay: {
                delay: 3000
                , disableOnInteraction: false
            , },

            pagination: {
                el: '.testimonialsSlider .swiper-pagination'
                , clickable: true
            , }
        , });

        document.querySelectorAll('.testimonialsSlider video').forEach((video) => {

            video.addEventListener('play', () => {
                testimonialSwiper.autoplay.stop();
            });

            video.addEventListener('ended', () => {
                testimonialSwiper.autoplay.start();
                testimonialSwiper.slideNext();
            });

            video.addEventListener('pause', () => {
                testimonialSwiper.autoplay.start();
            });

        });

    </script>

    <script>
        document.querySelectorAll('[class*="caseStudySlider-"]').forEach(function(slider) {
            new Swiper(slider, {
                loop: true
                , spaceBetween: 20,

                autoplay: {
                    delay: 2500
                    , disableOnInteraction: false
                , },

                pagination: {
                    el: slider.querySelector('.swiper-pagination')
                    , clickable: true
                , }
            , });
        });

    </script>


    <script>
        document.querySelectorAll('[class*="caseStudySlider-"]').forEach((sliderElement) => {

            const swiper = new Swiper(sliderElement, {

                loop: true
                , spaceBetween: 20
                , slidesPerView: 1,

                autoplay: {
                    delay: 3000
                    , disableOnInteraction: false
                , },

                pagination: {
                    el: sliderElement.querySelector('.swiper-pagination')
                    , clickable: true
                , },

            });

            sliderElement.querySelectorAll('video').forEach((video) => {

                video.addEventListener('play', () => {
                    swiper.autoplay.stop();
                });

                video.addEventListener('ended', () => {
                    swiper.autoplay.start();
                    swiper.slideNext();
                });

                video.addEventListener('pause', () => {
                    swiper.autoplay.start();
                });

            });

        });

    </script>


    <script>
        new Swiper('.resultsSlider', {

            loop: true
            , spaceBetween: 20
            , slidesPerView: 1,

            autoplay: {
                delay: 2500
                , disableOnInteraction: false
            , },

            pagination: {
                el: '.resultsSlider .swiper-pagination'
                , clickable: true
            , },

        });

    </script>

</body>

</html>
