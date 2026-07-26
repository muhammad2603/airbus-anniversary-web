<!DOCTYPE html>
<html lang="en" class="text-[16px] scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="app-container min-h-screen bg-background text-foreground">
        <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
            <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="logo w-7 h-7 flex items-center justify-center">
                        <svg viewbox="0 0 32 32" fill="none" class="w-7 h-7">
                            <path d="M4 20L16 6L28 20H20L16 26L12 20H4Z" fill="#0EA5E9" opacity="0.9"></path>
                            <path d="M16 6L28 20H22L16 12L10 20H4L16 6Z" fill="#38BDF8" opacity="0.5"></path>
                        </svg>
                    </div>
                    <span
                        class="text-primary-foreground uppercase tracking-widest font-barlow-condensed font-bold text-foreground text-[1.1rem]">AIRBUS</span>
                    <span class="w-px h-4 bg-border mx-1"></span>
                    <span class="uppercase tracking-widest font-jetbrains-mono text-small text-primary">A320NEO</span>
                </div>
                <div class="hidden md:flex items-center gap-1">
                    <button type="button" class="header-nav-button font-medium active" tabindex="-1">Overview</button>
                    <button type="button" class="header-nav-button font-normal">Innovation</button>
                    <button type="button" class="header-nav-button font-normal">Specifications</button>
                    <button type="button" class="header-nav-button font-normal">Timeline</button>
                    <button type="button" class="header-nav-button font-normal">Operators</button>
                </div>
                <button
                    class="hidden md:flex items-center gap-2 px-4 py-2 text-xs uppercase tracking-widest transition-all font-jetbrains-mono font-medium text-primary bg-primary/10 border border-solid border-primary/30 rounded-xs cursor-pointer group focus:outline-primary">
                    <span>Explore Fleet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-chevron-right-icon lucide-chevron-right transition-transform duration-150 ease-in group-hover:translate-x-0.5 group-focus:translate-x-0.5">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            </div>
        </nav>
        <main>@yield('content')</main>
        <footer class="bg-dark-blue border-t border-border">
            <div class="max-w-7xl mx-auto px-6 py-12">
                <div class="footer-contents flex flex-col md:flex-row justify-between items-start gap-10">
                    <div class="footer-abouts">
                        <div class="flex items-center gap-3 mb-4">
                            <svg viewbox="0 0 32 32" fill="none" class="w-6 h-6">
                                <path d="M4 20L16 6L28 20H20L16 26L12 20H4Z" fill="#0EA5E9" opacity="0.9"></path>
                            </svg>
                            <h2 class="font-barlow-condensed font-bold text-primary-foreground text-base tracking-1">
                                AIRBUS
                                · A320neo ANNIVERSARY</h2>
                        </div>
                        <p class="text-xs leading-relaxed max-w-xs text-cyan-dark font-light">Commemorating ten years of
                            next-generation
                            single-aisle aviation. All specifications are indicative and subject to configuration.
                        </p>
                    </div>
                    <div class="footer-about-aircraft grid grid-cols-2 md:grid-cols-3 gap-x-16 gap-y-2">
                        <div class="aircraft-families">
                            <h3
                                class="mb-3 uppercase font-jetbrains-mono font-semibold text-primary text-small tracking-15">
                                A320NEO Family</h3>
                            <p class="mb-1.5 text-cyan-dark text-xs tracking-1 transition-colors hover:text-foreground">
                                A319neo</p>
                            <p class="mb-1.5 text-cyan-dark text-xs tracking-1 transition-colors hover:text-foreground">
                                A320neo</p>
                            <p class="mb-1.5 text-cyan-dark text-xs tracking-1 transition-colors hover:text-foreground">
                                A321neo</p>
                            <p class="mb-1.5 text-cyan-dark text-xs tracking-1 transition-colors hover:text-foreground">
                                A321XLR</p>
                        </div>
                        <div class="resources-data">
                            <h3
                                class="mb-3 uppercase font-jetbrains-mono font-semibold text-primary text-small tracking-15">
                                Resources</h3>
                            <nav class="flex flex-col gap-1.5">
                                <a href="https://aircraft.airbus.com/en/aircraft/a320-family/a320neo" target="_blank"
                                    class="text-cyan-dark text-xs tracking-1 transition-colors cursor-pointer hover:text-primary">Technical
                                    Data</a>
                                <a href="https://airbus.com/en/newsroom/press-releases" target="_blank"
                                    class="text-cyan-dark text-xs tracking-1 transition-colors cursor-pointer hover:text-primary">Press
                                    Kit</a>
                                <a href="https://airbus.com" target="_blank"
                                    class="text-cyan-dark text-xs tracking-1 transition-colors cursor-pointer hover:text-primary">Airbus.com</a>
                            </nav>
                        </div>
                        <div class="programmes-section">
                            <h3
                                class="mb-3 uppercase font-jetbrains-mono font-semibold text-primary text-small tracking-15">
                                Programme</h3>
                            {{-- // __COMMENT__ navigasi dibawah ini adalah CTA yang akan mengarahkan ke section terkait, gunakan JavaScript. --}}
                            <nav class="flex flex-col gap-1.5">
                                <a id="toHistories"
                                    class="text-cyan-dark text-xs tracking-1 transition-colors cursor-pointer hover:text-primary">History</a>
                                <a id="toOperators"
                                    class="text-cyan-dark text-xs tracking-1 transition-colors cursor-pointer hover:text-primary">Operators</a>
                                <a id="toPerforms"
                                    class="text-cyan-dark text-xs tracking-1 transition-colors cursor-pointer hover:text-primary">Orders
                                    & Deliveries</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div
                    class="footer-credits mt-12 pt-6 flex flex-col md:flex-row justify-between items-center gap-3 border-t border-primary/10">
                    <p class="font-jetbrains-mono text-cyan-light/55 text-small tracking-1">© 2024 AIRBUS SAS · ALL
                        RIGHTS RESERVED · TOULOUSE, FRANCE</p>
                    <p class="font-jetbrains-mono text-cyan-light/55 text-small tracking-1">A320neo ANNIVERSARY ·
                        2014-2026</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
