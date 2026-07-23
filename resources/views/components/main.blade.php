<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Barlow Condensed Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- JetBrains Mono Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
    {{-- Inter Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
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
                        class="text-foreground uppercase tracking-widest font-barlow-condensed font-bold text-[1.1rem]">AIRBUS</span>
                    <span class="w-px h-4 bg-border mx-1"></span>
                    <span
                        class="uppercase tracking-widest font-jetbrains-mono text-[0.7rem] text-primary">A320NEO</span>
                </div>
                <div class="hidden md:flex items-center gap-1">
                    <button type="button"
                        class="px-4 py-1.5 text-sm transition-colors font-inter font-medium tracking-wider cursor-pointer outline-none border-b-2 border-solid border-primary text-primary active" tabindex="-1">Overview</button>
                    <button type="button"
                        class="px-4 py-1.5 text-sm transition-colors font-inter font-normal tracking-wider cursor-pointer outline-none border-b-2 border-solid border-transparent text-gray-smooth hover:text-primary focus:text-primary">Innovation</button>
                    <button type="button"
                        class="px-4 py-1.5 text-sm transition-colors font-inter font-normal tracking-wider cursor-pointer outline-none border-b-2 border-solid border-transparent text-gray-smooth hover:text-primary focus:text-primary">Spefications</button>
                    <button type="button"
                        class="px-4 py-1.5 text-sm transition-colors font-inter font-normal tracking-wider cursor-pointer outline-none border-b-2 border-solid border-transparent text-gray-smooth hover:text-primary focus:text-primary">Timeline</button>
                    <button type="button"
                        class="px-4 py-1.5 text-sm transition-colors font-inter font-normal tracking-wider cursor-pointer outline-none border-b-2 border-solid border-transparent text-gray-smooth hover:text-primary focus:text-primary">Operators</button>
                </div>
                <button
                    class="hidden md:flex items-center gap-2 px-4 py-2 text-xs uppercase tracking-widest transition-all font-jetbrains-mono font-medium text-primary bg-primary/10 border border-solid border-primary/30 rounded-xs cursor-pointer group focus:outline-primary">
                    <span>Explore Feet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right transition-transform duration-150 ease-in group-hover:translate-x-0.5 group-focus:translate-x-0.5">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            </div>
        </nav>
        <main>@yield('content')</main>
    </div>
</body>

</html>
