@extends('components.main')
@section('content')
    <section class="overview relative min-h-screen flex flex-col justify-end overflow-hidden">
        <div class="overlay absolute inset-0 bg-secondary">
            <img src="{{ asset('images/background-a320.avif') }}"
                alt="Airbus A320neo aircraft illuminated at night on the tarmac"
                class="w-full h-full object-cover opacity-50 saturate-70 brightness-60">
            <div class="absolute inset-0 bg-airbus-gradient"></div>
            <div class="absolute inset-0 pointer-events-none bg-grid"></div>
        </div>
        <div class="since absolute top-28 right-8 md:right-16 flex flex-col items-center opacity-90">
            <div
                class="circle w-24 h-24 md:w-28 md:h-28 flex flex-col items-center justify-center bg-primary/7 border border-solid border-primary/40 rounded-[50%] backdrop-blur-sm">
                <span class="font-barlow-condensed font-extrabold text-[2rem] text-primary leading-none">12</span>
                <span class="font-jetbrains-mono mt-0.5 text-cyan-smooth text-xsmall tracking-15">YEARS</span>
                <span class="font-jetbrains-mono text-cyan-smooth text-xsmall tracking-widest">2014-2026</span>
            </div>
        </div>
        <div class="landing-content relative z-10 max-w-7xl mx-auto px-6 pb-24 md:pb-32">
            <div class="max-w-3xl">
                <div class="airplane-explain flex items-center gap-3 mb-6">
                    <div class="horizontal-rule h-px w-12 bg-primary"></div>
                    <span class="font-jetbrains-mono text-small text-primary tracking-2">AIRBUS COMMERCIAL
                        AIRCRAFT</span>
                </div>
                <h1
                    class="font-barlow-condensed font-extrabold text-[clamp(4rem,12vw,9rem)] leading-space tracking-[-0.01em] text-primary-foreground">
                    A320<span class="text-primary">neo</span></h1>
                <p
                    class="font-barlow-condensed mt-5 mb-8 font-light text-[clamp(1.4rem,3.5vw,2.2rem)] tracking-gap text-cyan-smooth uppercase">
                    A Decade of Next-Generation Excellence</p>
                <p class="text-base leading-relaxed max-w-xl mb-10 font-light text-cyan-light">Since its historic first
                    flight on 25 September 2014, the Airbus A320neo has redefined single-aisle aviation — setting new
                    benchmarks in fuel efficiency, passenger comfort, and environmental responsibility across more than 130
                    airlines worldwide.</p>
                <div class="buttons-perform flex flex-wrap gap-3">
                    <a href="#innovations"
                        class="flex items-center gap-2 px-6 py-3 bg-primary font-jetbrains-mono text-dark-accent text-small tracking-15 font-medium uppercase rounded-xs transition-all hover:gap-3 focus:gap-3 focus:outline-none focus:ring-2 focus:ring-blue-900">
                        <span>Discover Innovations</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#specs"
                        class="flex items-center gap-2 px-6 py-3 font-jetbrains-mono border border-solid border-primary/30 text-primary text-small uppercase tracking-15 rounded-xs bg-transparent transition-transform duration-150 ease-in hover:border-primary hover:-translate-y-1 focus:outline-none focus:border-primary focus:-translate-y-1">
                        <span>View Specs</span>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="see-more-animation absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1 animate-bounce opacity-40">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevrons-down-icon lucide-chevrons-down">
                <path d="m7 6 5 5 5-5" />
                <path d="m7 13 5 5 5-5" />
            </svg>
        </div>
    </section>
    <section class="statistic-performs bg-section border-y border-border">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-5 divide-x divide-border">
                <div class="aircraft-ordered-count px-6 py-8 flex flex-col gap-1">
                    <span class="font-jetbrains-mono text-small text-primary tracking-15">ORD-7500</span>
                    <span class="font-barlow-condensed font-bold text-4xl text-primary-foreground leading-none">7,500+</span>
                    <span class="text-cyan-light text-sm tracking-wider">Aircraft Ordered</span>
                </div>
                <div class="aircraft-delivered-count px-6 py-8 flex flex-col gap-1">
                    <span class="font-jetbrains-mono text-small text-primary tracking-15">DEL-5100</span>
                    <span class="font-barlow-condensed font-bold text-4xl text-primary-foreground leading-none">5,100+</span>
                    <span class="text-cyan-light text-sm tracking-wider">Delivered</span>
                </div>
                <div class="aircraft-operation-count px-6 py-8 flex flex-col gap-1">
                    <span class="font-jetbrains-mono text-small text-primary tracking-15">OPR-0130</span>
                    <span class="font-barlow-condensed font-bold text-4xl text-primary-foreground leading-none">130+</span>
                    <span class="text-cyan-light text-sm tracking-wider">Airlines</span>
                </div>
                <div class="aircraft-efficiency px-6 py-8 flex flex-col gap-1">
                    <span class="font-jetbrains-mono text-small text-primary tracking-15">EFF-20PCT</span>
                    <span class="font-barlow-condensed font-bold text-4xl text-primary-foreground leading-none">20%</span>
                    <span class="text-cyan-light text-sm tracking-wider">Fuel Savings</span>
                </div>
                <div class="aircraft-max-range px-6 py-8 flex flex-col gap-1">
                    <span class="font-jetbrains-mono text-small text-primary tracking-15">RNG-6300</span>
                    <span class="font-barlow-condensed font-bold text-4xl text-primary-foreground leading-none">6,300km</span>
                    <span class="text-cyan-light text-sm tracking-wider">Max Range</span>
                </div>
            </div>
        </div>
    </section>
@endsection
