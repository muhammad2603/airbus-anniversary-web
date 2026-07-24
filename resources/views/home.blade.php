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
        <div class="landing-content section-content relative z-10 pb-24 md:pb-32">
            <div class="max-w-3xl">
                <div class="airplane-explain flex items-center gap-3 mb-6">
                    <div class="horizontal-rule [--rule-width:3rem]"></div>
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
    <section class="statistic-performs bg-section/80 border-y border-border">
        <div class="section-content">
            <div class="grid grid-cols-2 md:grid-cols-5 divide-x divide-border">
                <div class="aircraft-ordered-count px-6 py-8 flex flex-col gap-1">
                    <span class="font-jetbrains-mono text-small text-primary tracking-15">ORD-7500</span>
                    <span
                        class="font-barlow-condensed font-bold text-4xl text-primary-foreground leading-none">7,500+</span>
                    <span class="text-cyan-light text-sm tracking-wider">Aircraft Ordered</span>
                </div>
                <div class="aircraft-delivered-count px-6 py-8 flex flex-col gap-1">
                    <span class="font-jetbrains-mono text-small text-primary tracking-15">DEL-5100</span>
                    <span
                        class="font-barlow-condensed font-bold text-4xl text-primary-foreground leading-none">5,100+</span>
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
                    <span
                        class="font-barlow-condensed font-bold text-4xl text-primary-foreground leading-none">6,300km</span>
                    <span class="text-cyan-light text-sm tracking-wider">Max Range</span>
                </div>
            </div>
        </div>
    </section>
    <section id="innovations" class="innovations py-28 md:py-36">
        <div class="section-content">
            <div>
                <div class="section-identity">
                    <div class="horizontal-rule"></div>
                    <span class="font-jetbrains-mono text-primary text-small tracking-2">ENGINEERING PILLARS</span>
                </div>
                <h2 class="max-w-150 mb-16 section-title">
                    Three Breakthroughs That Changed Single-Aisle Aviation</h2>
            </div>
            <div class="innovation-list grid md:grid-cols-3 gap-px bg-border shadow-xs shadow-primary/15">
                <div class="innovation bg-background">
                    <div class="p-8 h-full bg-section/40 flex flex-col gap-6 group transition-all duration-300">
                        <div class="top flex items-start justify-between">
                            <div
                                class="logo-innovation w-12 h-12 bg-primary/8 flex items-center justify-center border border-solid border-primary/25 rounded-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-wind-icon lucide-wind">
                                    <path d="M12.8 19.6A2 2 0 1 0 14 16H2" />
                                    <path d="M17.5 8a2.5 2.5 0 1 1 2 4H2" />
                                    <path d="M9.8 4.4A2 2 0 1 1 11 8H2" />
                                </svg>
                            </div>
                            <span class="font-jetbrains-mono text-cyan-thin text-small tracking-15">SYS-01</span>
                        </div>
                        <div class="innovation-title">
                            <div class="mb-2">
                                <span
                                    class="px-2 py-0.5 bg-primary/10 font-jetbrains-mono text-primary text-xs tracking-[0.08em] rounded-xs">Propulsion</span>
                            </div>
                            <h3
                                class="mt-2 font-barlow-condensed font-semibold text-primary-foreground text-2xl leading-[1.2]">
                                CFM LEAP & PW1100G Engines</h3>
                        </div>
                        <p class="h-full font-light text-cyan-dark">The A320neo family introduced a choice between two
                            next-generation powerplants — the CFM International LEAP-1A and the Pratt & Whitney PW1100G-JM.
                            Both deliver class-leading thrust efficiency and dramatically reduced noise footprints over
                            predecessor variants.</p>
                        <div class="horizontal-rule rule-with-hover-group"></div>
                    </div>
                </div>
                <div class="innovation bg-background">
                    <div class="p-8 h-full bg-section/40 flex flex-col gap-6 group transition-all duration-300">
                        <div class="top flex items-start justify-between">
                            <div
                                class="logo-innovation w-12 h-12 bg-primary/8 flex items-center justify-center border border-solid border-primary/25 rounded-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="#0EA5E9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-plane-icon lucide-plane">
                                    <path
                                        d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z" />
                                </svg>
                            </div>
                            <span class="font-jetbrains-mono text-cyan-thin text-small tracking-15">SYS-02</span>
                        </div>
                        <div class="innovation-title">
                            <div class="mb-2">
                                <span
                                    class="px-2 py-0.5 bg-primary/10 font-jetbrains-mono text-primary text-xs tracking-[0.08em] rounded-xs">Aerodynamics</span>
                            </div>
                            <h3
                                class="mt-2 font-barlow-condensed font-semibold text-primary-foreground text-2xl leading-[1.2]">
                                Wingtip Sharklets</h3>
                        </div>
                        <p class="h-full font-light text-cyan-dark">Blended Winglet Sharklets — up to 2.4 metres tall —
                            reduce
                            induced drag by optimising spanwise lift distribution. Each set of Sharklets contributes
                            approximately 3.5% additional fuel burn reduction on top of new engine gains.</p>
                        <div class="horizontal-rule rule-with-hover-group">
                        </div>
                    </div>
                </div>
                <div class="innovation bg-background">
                    <div class="p-8 h-full bg-section/40 flex flex-col gap-6 group transition-all duration-300">
                        <div class="top flex items-start justify-between">
                            <div
                                class="logo-innovation w-12 h-12 bg-primary/8 flex items-center justify-center border border-solid border-primary/25 rounded-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="#0EA5E9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-users-icon lucide-users">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <circle cx="9" cy="7" r="4" />
                                </svg>
                            </div>
                            <span class="font-jetbrains-mono text-cyan-thin text-small tracking-15">SYS-03</span>
                        </div>
                        <div class="innovation-title">
                            <div class="mb-2">
                                <span
                                    class="px-2 py-0.5 bg-primary/10 font-jetbrains-mono text-primary text-xs tracking-[0.08em] rounded-xs">Passenger
                                    Experience</span>
                            </div>
                            <h3
                                class="mt-2 font-barlow-condensed font-semibold text-primary-foreground text-2xl leading-[1.2]">
                                Airspace Cabin</h3>
                        </div>
                        <p class="h-full font-light text-cyan-dark">The Airspace cabin architecture introduces wider
                            pivoting overhead bins, broader aisles and optimised seat track spacing, cutting turnaround
                            times while raising perceived spaciousness — without increasing fuselage diameter.</p>
                        <div class="horizontal-rule rule-with-hover-group">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="best relative h-72 md:h-96 overflow-hidden">
        <img src="{{ asset('images/skies-from-a320-window.avif') }}"
            alt="View from the wing of an aircraft cruising at altitude"
            class="w-full h-full object-cover saturate-50 brightness-55">
        <div class="image-overlay absolute inset-0 overlay-lr-vinyet-fx"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                <p
                    class="font-barlow-condensed font-extrabold text-primary-foreground text-[clamp(1.5rem,5vw,3.5rem)] text-shadow-sm tracking-1 uppercase">
                    "The Most Ordered Commercial Aircraft In History"</p>
                <p class="mt-4 font-jetbrains-mono font-semibold text-primary text-sm text-shadow-sm tracking-2">— AIRBUS
                    GROUP, 2024</p>
            </div>
        </div>
    </section>
    <section id="specs" class="specifications py-28 md:py-36">
        <div class="section-content">
            <div class="specs-legend">
                <div class="section-identity">
                    <div class="horizontal-rule"></div>
                    <span class="font-jetbrains-mono text-small text-primary tracking-2">TECHNICAL DATA</span>
                </div>
                <h2 class="mb-16 section-title">
                    A320neo Specifications</h2>
            </div>
            <div class="specs-overview grid md:grid-cols-2 gap-x-16">
                <div
                    class="passenger-seats flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Passengers (typical)</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">165 /
                            194</span>
                        <span class="font-jetbrains-mono text-small text-primary">seats</span>
                    </div>
                </div>
                <div
                    class="max-takeoff-weight flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Max Takeoff Weight</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">79,000</span>
                        <span class="font-jetbrains-mono text-small text-primary">kg</span>
                    </div>
                </div>
                <div class="cruise-speed flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Cruise Speed</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">Mach
                            0.78</span>
                    </div>
                </div>
                <div
                    class="service-ceiling flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Service Ceiling</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">39,800</span>
                        <span class="font-jetbrains-mono text-small text-primary">ft</span>
                    </div>
                </div>
                <div class="max-range flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Max Range</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">6,300</span>
                        <span class="font-jetbrains-mono text-small text-primary">km</span>
                    </div>
                </div>
                <div class="fuel-capacity flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Fuel Capacity</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">26,730</span>
                        <span class="font-jetbrains-mono text-small text-primary">litres</span>
                    </div>
                </div>
                <div class="engine-thrust flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Engine Thrust</span>
                    <div class="flex items-baseline gap-1.5">
                        <span
                            class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">22,000-27,000</span>
                        <span class="font-jetbrains-mono text-small text-primary">lbf</span>
                    </div>
                </div>
                <div class="wingspan flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Wingspan</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">35.8</span>
                        <span class="font-jetbrains-mono text-small text-primary">m (w/ Sharklets)</span>
                    </div>
                </div>
                <div class="length flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Length</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">37.57</span>
                        <span class="font-jetbrains-mono text-small text-primary">m</span>
                    </div>
                </div>
                <div
                    class="fuselage-diameter flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Fuselage Diameter</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">3.95</span>
                        <span class="font-jetbrains-mono text-small text-primary">m</span>
                    </div>
                </div>
                <div class="height flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">Height</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">11.76</span>
                        <span class="font-jetbrains-mono text-small text-primary">m</span>
                    </div>
                </div>
                <div class="mtow flex justify-between items-center py-4 border-b border-solid border-primary/10">
                    <span class="text-cyan-dark text-sm font-light">MTOW Increase vs CEO</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-jetbrains-mono font-medium text-primary-foreground text-[0.95rem]">+14%</span>
                        <span class="font-jetbrains-mono text-small text-primary">uplift</span>
                    </div>
                </div>
            </div>
            <div class="engines-information">
                <div class="mt-16 grid md:grid-cols-2 gap-4">
                    <div class="p-6 bg-section/60 border border-solid border-primary/15 rounded-xs">
                        <div class="engine-label flex items-center gap-3 mb-4">
                            <div
                                class="icon-label w-8 h-8 bg-primary/8 flex items-center justify-center border border-solid border-primary/30 rounded-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="#0EA5E9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-fuel-icon lucide-fuel">
                                    <path d="M14 13h2a2 2 0 0 1 2 2v2a2 2 0 0 0 4 0v-6.998a2 2 0 0 0-.59-1.42L18 5" />
                                    <path d="M14 21V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v16" />
                                    <path d="M2 21h13" />
                                    <path d="M3 9h11" />
                                </svg>
                            </div>
                            <div class="engine-name">
                                <p class="font-barlow-condensed font-semibold text-[1.1rem] text-primary-foreground">CFM
                                    LEAP-1A</p>
                                <p class="font-jetbrains-mono text-cyan-dark text-small tracking-1">CFM International</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-4 mt-2">
                            <div class="first-eng-thrust">
                                <p class="font-jetbrains-mono text-cyan-dark text-small">Thrust</p>
                                <p class="font-jetbrains-mono font-medium text-cyan-lighter text-[0.78rem]">22,000-32,900
                                    lbf</p>
                            </div>
                            <div class="first-eng-bypass-ratio">
                                <p class="font-jetbrains-mono text-cyan-dark text-small">Bypass Ratio</p>
                                <p class="font-jetbrains-mono font-medium text-cyan-lighter text-[0.78rem]">11:1</p>
                            </div>
                            <div class="first-eng-dry-weight">
                                <p class="font-jetbrains-mono text-cyan-dark text-small">Dry Weight</p>
                                <p class="font-jetbrains-mono font-medium text-cyan-lighter text-[0.78rem]">3,006 kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 bg-section/60 border border-solid border-primary/15 rounded-xs">
                        <div class="engine-label flex items-center gap-3 mb-4">
                            <div
                                class="icon-label w-8 h-8 bg-primary/8 flex items-center justify-center border border-solid border-primary/30 rounded-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="#0EA5E9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-fuel-icon lucide-fuel">
                                    <path d="M14 13h2a2 2 0 0 1 2 2v2a2 2 0 0 0 4 0v-6.998a2 2 0 0 0-.59-1.42L18 5" />
                                    <path d="M14 21V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v16" />
                                    <path d="M2 21h13" />
                                    <path d="M3 9h11" />
                                </svg>
                            </div>
                            <div class="engine-name">
                                <p class="font-barlow-condensed font-semibold text-[1.1rem] text-primary-foreground">
                                    PW1100G-JM</p>
                                <p class="font-jetbrains-mono text-cyan-dark text-small tracking-1">Pratt & Whitney</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-4 mt-2">
                            <div class="second-eng-thrust">
                                <p class="font-jetbrains-mono text-cyan-dark text-small">Thrust</p>
                                <p class="font-jetbrains-mono font-medium text-cyan-lighter text-[0.78rem]">22,000-33,000
                                    lbf</p>
                            </div>
                            <div class="second-eng-bypass-ratio">
                                <p class="font-jetbrains-mono text-cyan-dark text-small">Bypass Ratio</p>
                                <p class="font-jetbrains-mono font-medium text-cyan-lighter text-[0.78rem]">12:1</p>
                            </div>
                            <div class="second-eng-dry-weight">
                                <p class="font-jetbrains-mono text-cyan-dark text-small">Dry Weight</p>
                                <p class="font-jetbrains-mono font-medium text-cyan-lighter text-[0.78rem]">2,858 kg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="timeline py-28 md:py-36 bg-section-smooth-dark/70 border-t border-border">
        <div class="section-content">
            <div class="timeline-legend">
                <div class="section-identity">
                    <div class="h-px w-8 bg-primary"></div>
                    <span class="font-jetbrains-mono text-primary text-small tracking-2">PROGRAMME HISTORY</span>
                </div>
                <h2 class="mb-16 section-title">
                    A Decade Of Milestones</h2>
            </div>
            <div class="aircraft-histories flex flex-col md:flex-row gap-8">
                <div class="years md:w-64 flex md:flex-col gap-1 overflow-x-auto md:overflow-visible">
                    <button type="button" class="button-year-history group active" tabindex="-1">
                        <span>2010</span>
                    </button>
                    <button type="button" class="button-year-history group" tabindex="-1">
                        <span>2013</span>
                    </button>
                    <button type="button" class="button-year-history group" tabindex="-1">
                        <span>2014</span>
                    </button>
                    <button type="button" class="button-year-history group" tabindex="-1">
                        <span>2016</span>
                    </button>
                    <button type="button" class="button-year-history group" tabindex="-1">
                        <span>2017</span>
                    </button>
                    <button type="button" class="button-year-history group" tabindex="-1">
                        <span>2018</span>
                    </button>
                    <button type="button" class="button-year-history group" tabindex="-1">
                        <span>2020</span>
                    </button>
                    <button type="button" class="button-year-history group" tabindex="-1">
                        <span>2024</span>
                    </button>
                </div>
                <div class="about-history flex-1 min-h-48">
                    <div class="block">
                        <div class="p-8 md:p-12 bg-section/50 border border-solid border-primary/15 rounded-xs">
                            <span
                                class="block mb-4 font-barlow-condensed font-extrabold text-primary/10 text-6.5xl leading-[0.9]">2010</span>
                            <h3
                                class="mb-4 font-barlow-condensed font-semibold text-primary-foreground text-[clamp(1.4rem,3vw,2rem)] leading-[1.2]">
                                A320neo programme launched at Farnborough Airshow</h3>
                            <p class="font-jetbrains-mono text-primary text-sm tracking-1">Launch customer: International
                                Airlines Group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="operators py-28 md:py-36">
        <div class="section-content">
            <div class="operator-legend">
                <div class="section-identity">
                    <div class="horizontal-rule"></div>
                    <span class="font-jetbrains-mono text-small text-primary tracking-2">GLOBAL OPERATORS</span>
                </div>
                <div class="flex items-end justify-between mb-16 flex-wrap gap-6">
                    <h2 class="section-title">
                        130+ Airlines Trust the neo</h2>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-globe-icon lucide-globe">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                            <path d="M2 12h20" />
                        </svg>
                        <span class="font-jetbrains-mono text-cyan-dark text-small">6 CONTINENTS · EVERY MAJOR
                            MARKET</span>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="operator">
                    <div class="box relative aspect-4/3 bg-section overflow-hidden group cursor-pointer rounded-xs">
                        <img src="{{ asset('images/indigo-commercial-in-flight.avif') }}" alt="IndiGo aircraft in flight"
                            class="w-full h-full object-cover saturate-40 brightness-50 transition-transform duration-700 group-hover:scale-105">
                        <div class="box-overlay absolute inset-0 transition-opacity duration-300 box-overlay-fx"></div>
                        <div class="operator-about absolute bottom-0 left-0 right-0 p-4">
                            <p class="font-barlow-condensed font-bold text-primary-foreground text-[1.3rem] leading-none">
                                IndiGo</p>
                            <div class="country-with-order-count flex items-center justify-between mt-1">
                                <span class="font-jetbrains-mono text-cyan-dark text-[0.6rem] tracking-1">India</span>
                                <span class="font-jetbrains-mono text-primary text-[0.6rem]">310+ neo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="operator">
                    <div class="box relative aspect-4/3 bg-section overflow-hidden group cursor-pointer rounded-xs">
                        <img src="{{ asset('images/ryanair-commercial-in-flight.avif') }}"
                            alt="Ryanair aircraft in flight"
                            class="w-full h-full object-cover saturate-40 brightness-50 transition-transform duration-700 group-hover:scale-105">
                        <div class="box-overlay absolute inset-0 transition-opacity duration-300 box-overlay-fx"></div>
                        <div class="operator-about absolute bottom-0 left-0 right-0 p-4">
                            <p class="font-barlow-condensed font-bold text-primary-foreground text-[1.3rem] leading-none">
                                Ryanair</p>
                            <div class="country-with-order-count flex items-center justify-between mt-1">
                                <span class="font-jetbrains-mono text-cyan-dark text-[0.6rem] tracking-1">Ireland</span>
                                <span class="font-jetbrains-mono text-primary text-[0.6rem]">210+ neo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="operator">
                    <div class="box relative aspect-4/3 bg-section overflow-hidden group cursor-pointer rounded-xs">
                        <img src="{{ asset('images/wizzair-commercial-in-flight.avif') }}"
                            alt="Wizz Air aircraft in flight"
                            class="w-full h-full object-cover saturate-40 brightness-50 transition-transform duration-700 group-hover:scale-105">
                        <div class="box-overlay absolute inset-0 transition-opacity duration-300 box-overlay-fx"></div>
                        <div class="operator-about absolute bottom-0 left-0 right-0 p-4">
                            <p class="font-barlow-condensed font-bold text-primary-foreground text-[1.3rem] leading-none">
                                Wizz Air</p>
                            <div class="country-with-order-count flex items-center justify-between mt-1">
                                <span class="font-jetbrains-mono text-cyan-dark text-[0.6rem] tracking-1">Hungary</span>
                                <span class="font-jetbrains-mono text-primary text-[0.6rem]">180+ neo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="operator">
                    <div class="box relative aspect-4/3 bg-section overflow-hidden group cursor-pointer rounded-xs">
                        <img src="{{ asset('images/easyjet-commercial-in-flight.avif') }}"
                            alt="EasyJet aircraft in flight"
                            class="w-full h-full object-cover saturate-40 brightness-50 transition-transform duration-700 group-hover:scale-105">
                        <div class="box-overlay absolute inset-0 transition-opacity duration-300 box-overlay-fx"></div>
                        <div class="operator-about absolute bottom-0 left-0 right-0 p-4">
                            <p class="font-barlow-condensed font-bold text-primary-foreground text-[1.3rem] leading-none">
                                EasyJet</p>
                            <div class="country-with-order-count flex items-center justify-between mt-1">
                                <span class="font-jetbrains-mono text-cyan-dark text-[0.6rem] tracking-1">United
                                    Kingdom</span>
                                <span class="font-jetbrains-mono text-primary text-[0.6rem]">150+ neo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-operators-link">
                <div class="mt-8 text-center">
                    <a href="#"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-transparent border border-solid border-primary/25 font-jetbrains-mono text-primary text-small tracking-1 rounded-xs transition-all hover:gap-3">
                        <span class="uppercase">View All Operators</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="best-efficiency-engine relative h-64 md:h-80 overflow-hidden">
        <img src="{{ asset('images/a320-neo-engine.avif') }}" alt="Close-up detail of an aircraft turbine engine"
            class="w-full h-full object-cover saturate-30 brightness-45 object-[center_30%]">
        <div class="overlay-image absolute inset-0 overlay-tb-vinyet-fx"></div>
        <div class="efficiency-engine-summary absolute inset-0 flex items-center">
            <div class="section-content w-full">
                <div class="grid md:grid-cols-3 gap-6">
                    <div
                        class="flex items-center gap-4 p-5 bg-dark-accent/80 border border-solid border-primary/12 rounded-xs">
                        <div
                            class="shrink-0 w-10 h-10 flex items-center justify-center bg-primary/8 border border-solid border-primary/25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-award-icon lucide-award">
                                <path
                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
                                <circle cx="12" cy="8" r="6" />
                            </svg>
                        </div>
                        <div class="award">
                            <p class="mb-0.5 font-jetbrains-mono text-cyan-dark text-[0.55rem] tracking-1">ACU-N4 · Noice
                                Certification</p>
                            <p class="font-barlow-condensed font-bold text-primary-foreground text-2xl leading-none">ICAO
                                Stage 4</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-4 p-5 bg-dark-accent/80 border border-solid border-primary/12 rounded-xs">
                        <div
                            class="shrink-0 w-10 h-10 flex items-center justify-center bg-primary/8 border border-solid border-primary/25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-fuel-icon lucide-fuel">
                                <path d="M14 13h2a2 2 0 0 1 2 2v2a2 2 0 0 0 4 0v-6.998a2 2 0 0 0-.59-1.42L18 5" />
                                <path d="M14 21V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v16" />
                                <path d="M2 21h13" />
                                <path d="M3 9h11" />
                            </svg>
                        </div>
                        <div class="award">
                            <p class="mb-0.5 font-jetbrains-mono text-cyan-dark text-[0.55rem] tracking-1">ENV-NOX · NOx vs
                                CAEP/6</p>
                            <p class="font-barlow-condensed font-bold text-primary-foreground text-2xl leading-none">-50%
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-4 p-5 bg-dark-accent/80 border border-solid border-primary/12 rounded-xs">
                        <div
                            class="shrink-0 w-10 h-10 flex items-center justify-center bg-primary/8 border border-solid border-primary/25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-wind-icon lucide-wind">
                                <path d="M12.8 19.6A2 2 0 1 0 14 16H2" />
                                <path d="M17.5 8a2.5 2.5 0 1 1 2 4H2" />
                                <path d="M9.8 4.4A2 2 0 1 1 11 8H2" />
                            </svg>
                        </div>
                        <div class="award">
                            <p class="mb-0.5 font-jetbrains-mono text-cyan-dark text-[0.55rem] tracking-1">ACU-DB vs
                                A320ceo</p>
                            <p class="font-barlow-condensed font-bold text-primary-foreground text-2xl leading-none">-14 dB
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
