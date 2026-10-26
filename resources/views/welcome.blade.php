<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio de Josh Kaninda — Développeur Logiciel & Full-Stack (Laravel, Vue.js, PHP, Tailwind CSS, SQL). Étudiant ECE Paris. Recherche de stage de 6 mois dès Avril 2027.">
        <meta name="author" content="Josh Kaninda">
        <title>Josh Kaninda — Développeur Logiciel & Full-Stack</title>

        <!-- Inline script to prevent theme flash -->
        <script>
            (function() {
                const stored = localStorage.getItem('theme');
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (stored === 'dark' || (!stored && prefersDark)) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            })();
        </script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#fafafa] dark:bg-[#09090b] text-neutral-900 dark:text-neutral-100 antialiased selection:bg-neutral-900 selection:text-white dark:selection:bg-white dark:selection:text-neutral-950 min-h-screen">
        
        <!-- Toast Notification -->
        <div id="toast-notification" class="fixed bottom-6 right-6 z-50 transform translate-y-4 opacity-0 pointer-events-none transition-all duration-200 rounded-xl bg-neutral-950 text-white dark:bg-white dark:text-neutral-950 px-4 py-2.5 text-xs font-semibold shadow-xl border border-neutral-800 dark:border-neutral-200 flex items-center gap-2">
            <span>Notification</span>
        </div>

        <!-- Clean Status Header Ribbon -->
        <div class="border-b border-neutral-200/80 dark:border-neutral-800/80 bg-neutral-100/70 dark:bg-neutral-900/50 py-2 px-4 text-center text-xs text-neutral-600 dark:text-neutral-300">
            <div class="mx-auto max-w-5xl flex items-center justify-center gap-2 flex-wrap">
                <span class="inline-flex items-center gap-1.5 font-medium">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span data-lang="fr">À la recherche d'un <strong>stage de fin d'études de 6 mois</strong> dès <strong>Avril 2027</strong> (Île-de-France )</span>
                    <span data-lang="en" class="hidden">Actively seeking a <strong>6-month final internship</strong> starting <strong>April 2027</strong> (Paris region )</span>
                </span>
                <span class="text-neutral-300 dark:text-neutral-700 hidden sm:inline">•</span>
                <a href="#contact" class="font-semibold text-neutral-900 dark:text-white hover:underline">
                    <span data-lang="fr">Me contacter →</span>
                    <span data-lang="en" class="hidden">Get in touch →</span>
                </a>
            </div>
        </div>

        <!-- Navigation Bar -->
        <header class="sticky top-0 z-40 border-b border-neutral-200/80 dark:border-neutral-800/80 bg-[#fafafa]/90 dark:bg-[#09090b]/90 backdrop-blur-md transition-colors">
            <nav class="mx-auto flex max-w-5xl items-center justify-between px-5 py-4 sm:px-6">
                <!-- Brand / Signature -->
                <a href="#accueil" class="flex items-center gap-2.5 group">
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-neutral-900 dark:bg-white text-white dark:text-neutral-950 font-bold text-xs tracking-tight">
                        JK
                    </span>
                    <div class="flex flex-col">
                        <span class="text-sm font-bold tracking-tight text-neutral-900 dark:text-white">
                            Josh Kaninda
                        </span>
                        <span class="text-[11px] text-neutral-500 dark:text-neutral-400 font-mono">
                            ECE Paris • Bac+3 CDA
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:flex items-center gap-6 text-xs font-medium text-neutral-600 dark:text-neutral-400">
                    <a href="#projets" class="hover:text-neutral-900 dark:hover:text-white transition-colors">
                        <span data-lang="fr">Réalisations</span>
                        <span data-lang="en" class="hidden">Projects</span>
                    </a>
                    <a href="#experience" class="hover:text-neutral-900 dark:hover:text-white transition-colors">
                        <span data-lang="fr">Parcours</span>
                        <span data-lang="en" class="hidden">Experience</span>
                    </a>
                    <a href="#competences" class="hover:text-neutral-900 dark:hover:text-white transition-colors">
                        <span data-lang="fr">Compétences</span>
                        <span data-lang="en" class="hidden">Stack</span>
                    </a>
                    <a href="#apropos" class="hover:text-neutral-900 dark:hover:text-white transition-colors">
                        <span data-lang="fr">À propos</span>
                        <span data-lang="en" class="hidden">About</span>
                    </a>
                    <a href="#contact" class="hover:text-neutral-900 dark:hover:text-white transition-colors">
                        <span data-lang="fr">Contact</span>
                        <span data-lang="en" class="hidden">Contact</span>
                    </a>
                </div>

                <!-- Utilities: Language Toggle, Theme Toggle, CV CTA -->
                <div class="flex items-center gap-2 sm:gap-3">
                    
                    <!-- Language Switcher (Segmented Button) -->
                    <div class="flex items-center p-0.5 rounded-lg border border-neutral-200 dark:border-neutral-800 bg-neutral-100 dark:bg-neutral-900 text-xs font-medium">
                        <button type="button" data-btn-lang="fr" class="lang-btn px-2 py-0.5 rounded-md transition-all" aria-label="Français">
                            FR
                        </button>
                        <button type="button" data-btn-lang="en" class="lang-btn px-2 py-0.5 rounded-md transition-all" aria-label="English">
                            EN
                        </button>
                    </div>

                    <!-- Theme Switcher (Minimal Icon) -->
                    <button type="button" class="theme-toggle-btn p-2 rounded-lg border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 transition-colors" aria-label="Changer le thème">
                        <!-- Sun Icon -->
                        <svg class="theme-icon-sun w-4 h-4 hidden text-neutral-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <!-- Moon Icon -->
                        <svg class="theme-icon-moon w-4 h-4 text-neutral-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>

                    <!-- CV Download Button -->
                    <a href="{{ asset('cv/CV_Josh_Kaninda.pdf') }}" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-1.5 rounded-lg border border-neutral-300 dark:border-neutral-700 bg-white dark:bg-neutral-900 px-3 py-1.5 text-xs font-semibold hover:border-neutral-900 dark:hover:border-white transition-colors">
                        <svg class="w-3.5 h-3.5 text-neutral-500 dark:text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span data-lang="fr">CV (PDF)</span>
                        <span data-lang="en" class="hidden">Resume</span>
                    </a>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-toggle" type="button" class="md:hidden p-2 rounded-lg border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 text-neutral-700 dark:text-neutral-300" aria-label="Menu">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </nav>

            <!-- Mobile Drawer Menu -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-950 px-6 py-4 space-y-3 text-sm">
                <a href="#projets" class="mobile-nav-link block py-1.5 text-neutral-700 dark:text-neutral-300">
                    <span data-lang="fr">Réalisations</span>
                    <span data-lang="en" class="hidden">Projects</span>
                </a>
                <a href="#experience" class="mobile-nav-link block py-1.5 text-neutral-700 dark:text-neutral-300">
                    <span data-lang="fr">Parcours</span>
                    <span data-lang="en" class="hidden">Experience</span>
                </a>
                <a href="#competences" class="mobile-nav-link block py-1.5 text-neutral-700 dark:text-neutral-300">
                    <span data-lang="fr">Compétences</span>
                    <span data-lang="en" class="hidden">Stack</span>
                </a>
                <a href="#apropos" class="mobile-nav-link block py-1.5 text-neutral-700 dark:text-neutral-300">
                    <span data-lang="fr">À propos</span>
                    <span data-lang="en" class="hidden">About</span>
                </a>
                <a href="#contact" class="mobile-nav-link block py-1.5 text-neutral-700 dark:text-neutral-300">
                    <span data-lang="fr">Contact</span>
                    <span data-lang="en" class="hidden">Contact</span>
                </a>
                <div class="pt-2 border-t border-neutral-200 dark:border-neutral-800">
                    <a href="{{ asset('cv/CV_Josh_Kaninda.pdf') }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 w-full py-2 rounded-lg bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 font-semibold text-xs">
                        <span data-lang="fr">Télécharger mon CV (PDF)</span>
                        <span data-lang="en" class="hidden">Download Resume (PDF)</span>
                    </a>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-5xl px-5 sm:px-6">
            
            <!-- Hero Section: Clean, authentic human presentation -->
            <section id="accueil" class="pt-14 pb-16 sm:pt-20 sm:pb-20 border-b border-neutral-200/80 dark:border-neutral-800/80">
                <div class="grid items-center gap-10 md:grid-cols-[1.25fr_0.75fr]">
                    
                    <div>
                        <!-- Pill -->
                        <div class="inline-flex items-center gap-2 rounded-full border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 px-3 py-1 text-xs text-neutral-600 dark:text-neutral-400 font-medium shadow-2xs">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            <span>Paris, France</span>
                            <span class="text-neutral-300 dark:text-neutral-700">•</span>
                            <span class="font-mono text-[11px]">ECE Paris</span>
                        </div>

                        <!-- Main Title -->
                        <h1 class="mt-5 text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-neutral-900 dark:text-white leading-[1.18]">
                            <span data-lang="fr">
                                Josh Kaninda, développeur logiciel & full-stack.
                            </span>
                            <span data-lang="en" class="hidden">
                                Josh Kaninda, software & full-stack developer.
                            </span>
                        </h1>

                        <!-- Bio -->
                        <p class="mt-4 text-base sm:text-lg text-neutral-600 dark:text-neutral-400 leading-relaxed">
                            <span data-lang="fr">
                            <span data-lang="fr">
                                Étudiant en dernière année de Bachelor Concepteur Développeur d'Applications, je cherche un stage de fin d'études de 5 à 6 mois. <strong>Rigoureux</strong> et <strong>autonome</strong>, je conçois des architectures backend fiables et des interfaces web modernes. Spécialisé dans l'écosystème <strong>PHP / Laravel</strong>, <strong>Vue.js</strong>, <strong>Tailwind CSS</strong>, <strong>Python</strong> et <strong>SQL</strong>, je m'intéresse vivement aux enjeux de l'<strong>IA</strong> et de la <strong>Data</strong>. J'ai conçu et déployé des projets réels en production au Canada, à Londres, à Bruxelles et à Kinshasa.
                            </span>
                            <span data-lang="en" class="hidden">
                                Final-year student in Application Development, seeking a 5-6 month final internship. <strong>Meticulous</strong> and <strong>self-driven</strong>, I design robust backend architectures and modern web interfaces. Specialized in the <strong>PHP / Laravel</strong>, <strong>Vue.js</strong>, <strong>Tailwind CSS</strong>, <strong>Python</strong>, and <strong>SQL</strong> ecosystem, I am deeply interested in <strong>AI</strong> and <strong>Data</strong>. I have designed and deployed real-world projects in production across Canada, London, Brussels, and Kinshasa.
                            </span>
                        </p>

                        <!-- Internship highlight callout -->
                        <div class="mt-6 p-4 rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900/80 text-sm">
                            <div class="flex items-start gap-3">
                                <span class="text-lg">🎯</span>
                                <div>
                                    <div class="font-semibold text-neutral-900 dark:text-white">
                                        <span data-lang="fr">Objectif : Stage de fin d'études de 6 mois</span>
                                        <span data-lang="en" class="hidden">Target: 6-month final-year internship</span>
                                    </div>
                                    <div class="text-xs text-neutral-600 dark:text-neutral-400 mt-0.5">
                                        <span data-lang="fr">Disponible à partir d'<strong>Avril 2027</strong> • Région parisienne .</span>
                                        <span data-lang="en" class="hidden">Available starting <strong>April 2027</strong> • Paris region .</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action buttons -->
                        <div class="mt-6 flex flex-wrap items-center gap-3">
                            <a href="#projets" class="inline-flex items-center gap-2 rounded-lg bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 font-semibold px-4 py-2.5 text-xs hover:bg-neutral-800 dark:hover:bg-neutral-200 transition-colors shadow-2xs">
                                <span data-lang="fr">Découvrir mes réalisations</span>
                                <span data-lang="en" class="hidden">Explore my work</span>
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>

                            <a href="{{ asset('cv/CV_Josh_Kaninda.pdf') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-lg border border-neutral-300 dark:border-neutral-700 bg-white dark:bg-neutral-900 font-semibold px-4 py-2.5 text-xs text-neutral-800 dark:text-neutral-200 hover:border-neutral-900 dark:hover:border-white transition-colors">
                                <svg class="w-3.5 h-3.5 text-neutral-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span data-lang="fr">Télécharger mon CV (PDF)</span>
                                <span data-lang="en" class="hidden">Download Resume (PDF)</span>
                            </a>

                            <a href="#contact" class="inline-flex items-center gap-1.5 px-3 py-2.5 text-xs font-semibold text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-white transition-colors">
                                <span data-lang="fr">Me contacter →</span>
                                <span data-lang="en" class="hidden">Contact me →</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Clean, tasteful photo card -->
                    <div class="flex justify-center md:justify-end">
                        <div class="w-full max-w-[280px] sm:max-w-[320px] rounded-2xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 p-2.5 shadow-sm">
                            <div class="overflow-hidden rounded-xl bg-neutral-100 dark:bg-neutral-800 aspect-[4/5] relative">
                                <img 
                                    src="{{ asset('images/josh-kaninda.jpg') }}" 
                                    alt="Josh Kaninda" 
                                    class="w-full h-full object-cover object-top hover:scale-102 transition-transform duration-300"
                                >
                            </div>
                            <div class="p-3 text-center">
                                <div class="font-bold text-sm text-neutral-900 dark:text-white">Josh Kaninda</div>
                                <div class="text-xs text-neutral-500 dark:text-neutral-400 font-mono mt-0.5">josh.kaninda@edu.ece.fr</div>
                                <div class="mt-3 flex items-center justify-center gap-4 text-xs font-medium text-neutral-600 dark:text-neutral-400 pt-2 border-t border-neutral-100 dark:border-neutral-800">
                                    <a href="https://github.com/Jmukandila" target="_blank" rel="noopener noreferrer" class="hover:text-neutral-900 dark:hover:text-white transition-colors">GitHub</a>
                                    <span class="text-neutral-300 dark:text-neutral-700">•</span>
                                    <a href="https://www.linkedin.com/in/josh-kaninda/" target="_blank" rel="noopener noreferrer" class="hover:text-neutral-900 dark:hover:text-white transition-colors">LinkedIn</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Projects Section: Real-world engineering showcase -->
            <section id="projets" class="py-16 sm:py-20 border-b border-neutral-200/80 dark:border-neutral-800/80">
                <div class="mb-10 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                    <div>
                        <div class="text-xs font-mono uppercase tracking-wider text-neutral-500 dark:text-neutral-400">
                            01 / <span data-lang="fr">Réalisations</span><span data-lang="en" class="hidden">Projects</span>
                        </div>
                        <h2 class="mt-2 text-2xl sm:text-3xl font-bold tracking-tight text-neutral-900 dark:text-white">
                            <span data-lang="fr">Sites en ligne & applications concrètes</span>
                            <span data-lang="en" class="hidden">Shipped websites & practical applications</span>
                        </h2>
                    </div>
                    <a href="https://github.com/Jmukandila" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-white flex items-center gap-1 transition-colors">
                        <span>github.com/Jmukandila</span>
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                    </a>
                </div>

                <div class="space-y-8">
                    
                    <!-- Project 1: Smart Cyberspace Inc -->
                    <article class="rounded-2xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 overflow-hidden shadow-xs hover:border-neutral-400 dark:hover:border-neutral-600 transition-colors">
                        <div class="grid md:grid-cols-12 gap-0">
                            <!-- Left: Screenshot in minimal browser shell -->
                            <div class="md:col-span-7 bg-neutral-100 dark:bg-neutral-950 border-b md:border-b-0 md:border-r border-neutral-200 dark:border-neutral-800 p-4 sm:p-5 flex flex-col justify-center">
                                <div class="rounded-xl border border-neutral-200 dark:border-neutral-800 overflow-hidden bg-white dark:bg-neutral-900 shadow-xs">
                                    <!-- Browser Header Bar -->
                                    <div class="flex items-center gap-1.5 px-3 py-2 border-b border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-950 text-[11px] text-neutral-400">
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="ml-2 font-mono text-[10px] text-neutral-500">https://smartcyberspace.ca</span>
                                    </div>
                                    <img 
                                        src="{{ asset('images/projects/smartcyberspace.png') }}" 
                                        alt="Smart Cyberspace Canada" 
                                        class="w-full h-auto object-cover object-top"
                                        loading="lazy"
                                    >
                                </div>
                            </div>

                            <!-- Right: Project info -->
                            <div class="md:col-span-5 p-6 sm:p-8 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between text-xs">
                                        <span class="font-mono text-neutral-500 dark:text-neutral-400">Ontario, Canada</span>
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-50 dark:bg-emerald-950/80 text-emerald-700 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800">
                                            ● En ligne
                                        </span>
                                    </div>
                                    <h3 class="mt-3 text-xl font-bold text-neutral-900 dark:text-white">
                                        Smart Cyberspace Inc
                                    </h3>
                                    <p class="mt-2.5 text-xs sm:text-sm text-neutral-600 dark:text-neutral-300 leading-relaxed">
                                        <span data-lang="fr">
                                            Entreprise canadienne spécialisée en ingénierie logicielle, cybersécurité et solutions IA. Réalisation de modules métier, migration d'architecture backend vers Laravel 11 pour de meilleures performances et optimisation des requêtes SQL.
                                        </span>
                                        <span data-lang="en" class="hidden">
                                            Canadian enterprise providing software engineering, cybersecurity and AI solutions. Developed core modules, executed backend migration to Laravel 11 to optimize latency, and refined SQL database structures.
                                        </span>
                                    </p>
                                    <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Laravel 11</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Vue.js</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Tailwind CSS</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Miabi</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">SQL</span>
                                    </div>
                                </div>

                                <div class="mt-6 pt-4 border-t border-neutral-100 dark:border-neutral-800">
                                    <a 
                                        href="https://smartcyberspace.ca/" 
                                        target="_blank" 
                                        rel="noopener noreferrer" 
                                        class="inline-flex items-center gap-1.5 text-xs font-semibold text-neutral-900 dark:text-white hover:underline"
                                    >
                                        <span data-lang="fr">Visiter smartcyberspace.ca</span>
                                        <span data-lang="en" class="hidden">Visit smartcyberspace.ca</span>
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Project 2: ANMI Consulting -->
                    <article class="rounded-2xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 overflow-hidden shadow-xs hover:border-neutral-400 dark:hover:border-neutral-600 transition-colors">
                        <div class="grid md:grid-cols-12 gap-0">
                            <!-- Left: Screenshot -->
                            <div class="md:col-span-7 bg-neutral-100 dark:bg-neutral-950 border-b md:border-b-0 md:border-r border-neutral-200 dark:border-neutral-800 p-4 sm:p-5 flex flex-col justify-center">
                                <div class="rounded-xl border border-neutral-200 dark:border-neutral-800 overflow-hidden bg-white dark:bg-neutral-900 shadow-xs">
                                    <div class="flex items-center gap-1.5 px-3 py-2 border-b border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-950 text-[11px] text-neutral-400">
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="ml-2 font-mono text-[10px] text-neutral-500">https://www.a-nmi.net</span>
                                    </div>
                                    <img 
                                        src="{{ asset('images/projects/anmi.png') }}" 
                                        alt="ANMI Consulting" 
                                        class="w-full h-auto object-cover object-top"
                                        loading="lazy"
                                    >
                                </div>
                            </div>

                            <!-- Right: Project info -->
                            <div class="md:col-span-5 p-6 sm:p-8 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between text-xs">
                                        <span class="font-mono text-neutral-500 dark:text-neutral-400">Cabinet de Conseil</span>
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-50 dark:bg-emerald-950/80 text-emerald-700 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800">
                                            ● En ligne
                                        </span>
                                    </div>
                                    <h3 class="mt-3 text-xl font-bold text-neutral-900 dark:text-white">
                                        ANMI Consulting
                                    </h3>
                                    <p class="mt-2.5 text-xs sm:text-sm text-neutral-600 dark:text-neutral-300 leading-relaxed">
                                        <span data-lang="fr">
                                            Site officiel du cabinet Africa New Market & International. Architecture bilingue dynamique (FR/EN), temps de chargement optimisé, SEO structuré et intégration soignée.
                                        </span>
                                        <span data-lang="en" class="hidden">
                                            Corporate website for Africa New Market & International consulting firm. Seamless bilingual architecture (FR/EN), optimized load performance, and structured SEO.
                                        </span>
                                    </p>
                                    <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Laravel</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Tailwind CSS</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">FR / EN</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Infomaniak</span>
                                    </div>
                                </div>

                                <div class="mt-6 pt-4 border-t border-neutral-100 dark:border-neutral-800">
                                    <a 
                                        href="https://www.a-nmi.net/" 
                                        target="_blank" 
                                        rel="noopener noreferrer" 
                                        class="inline-flex items-center gap-1.5 text-xs font-semibold text-neutral-900 dark:text-white hover:underline"
                                    >
                                        <span data-lang="fr">Visiter a-nmi.net</span>
                                        <span data-lang="en" class="hidden">Visit a-nmi.net</span>
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Project 3: Dialogue & Éducation en Afrique -->
                    <article class="rounded-2xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 overflow-hidden shadow-xs hover:border-neutral-400 dark:hover:border-neutral-600 transition-colors">
                        <div class="grid md:grid-cols-12 gap-0">
                            <!-- Left: Screenshot -->
                            <div class="md:col-span-7 bg-neutral-100 dark:bg-neutral-950 border-b md:border-b-0 md:border-r border-neutral-200 dark:border-neutral-800 p-4 sm:p-5 flex flex-col justify-center">
                                <div class="rounded-xl border border-neutral-200 dark:border-neutral-800 overflow-hidden bg-white dark:bg-neutral-900 shadow-xs">
                                    <div class="flex items-center gap-1.5 px-3 py-2 border-b border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-950 text-[11px] text-neutral-400">
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="w-2 h-2 rounded-full bg-neutral-300 dark:bg-neutral-700"></span>
                                        <span class="ml-2 font-mono text-[10px] text-neutral-500">https://dialogue-edu.org</span>
                                    </div>
                                    <img 
                                        src="{{ asset('images/projects/dialogue-edu.png') }}" 
                                        alt="Dialogue & Éducation en Afrique" 
                                        class="w-full h-auto object-cover object-top"
                                        loading="lazy"
                                    >
                                </div>
                            </div>

                            <!-- Right: Project info -->
                            <div class="md:col-span-5 p-6 sm:p-8 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between text-xs">
                                        <span class="font-mono text-neutral-500 dark:text-neutral-400">ASBL Bruxelles</span>
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-50 dark:bg-emerald-950/80 text-emerald-700 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800">
                                            ● En ligne
                                        </span>
                                    </div>
                                    <h3 class="mt-3 text-xl font-bold text-neutral-900 dark:text-white">
                                        Dialogue & Éducation en Afrique
                                    </h3>
                                    <p class="mt-2.5 text-xs sm:text-sm text-neutral-600 dark:text-neutral-300 leading-relaxed">
                                        <span data-lang="fr">
                                            Plateforme institutionnelle d'une association promouvant l'éducation en Afrique centrale. Gestion des formulaires de soutien, système de dons, actualités et pipeline CI/CD automatisé.
                                        </span>
                                        <span data-lang="en" class="hidden">
                                            Institutional platform for an NGO fostering education in Central Africa. Secure support and donation flows, educational news feed, and automated CI/CD pipeline.
                                        </span>
                                    </p>
                                    <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Laravel 13</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Tailwind 4</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">GSAP</span>
                                        <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">CI/CD</span>
                                    </div>
                                </div>

                                <div class="mt-6 pt-4 border-t border-neutral-100 dark:border-neutral-800">
                                    <a 
                                        href="https://dialogue-edu.org/" 
                                        target="_blank" 
                                        rel="noopener noreferrer" 
                                        class="inline-flex items-center gap-1.5 text-xs font-semibold text-neutral-900 dark:text-white hover:underline"
                                    >
                                        <span data-lang="fr">Visiter dialogue-edu.org</span>
                                        <span data-lang="en" class="hidden">Visit dialogue-edu.org</span>
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Two-column grid for open source / web apps -->
                    <div class="grid sm:grid-cols-2 gap-8">
                        
                        <!-- Project 4: Syndic Connect -->
                        <article class="rounded-2xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 p-6 flex flex-col justify-between shadow-xs hover:border-neutral-400 dark:hover:border-neutral-600 transition-colors">
                            <div>
                                <div class="flex items-center justify-between text-xs font-mono text-neutral-500">
                                    <span>Application SaaS</span>
                                    <span>Open Source</span>
                                </div>
                                <h3 class="mt-2 text-lg font-bold text-neutral-900 dark:text-white">
                                    Syndic Connect (Copro Smart Manager)
                                </h3>
                                <p class="mt-2 text-xs sm:text-sm text-neutral-600 dark:text-neutral-300 leading-relaxed">
                                    <span data-lang="fr">
                                        Solution de gestion d'incidents pour copropriétés. Console d'administration pour gestionnaires, signalement en temps réel pour résidents, assistance IA et export PDF certifié.
                                    </span>
                                    <span data-lang="en" class="hidden">
                                        Condominium incident tracking tool. Admin console for property managers, live resident reporting, AI-assisted summaries, and automated PDF export reports.
                                    </span>
                                </p>
                                <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Laravel 11</span>
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">OpenAI</span>
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">DomPDF</span>
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Tailwind</span>
                                </div>
                            </div>

                            <div class="mt-6 pt-4 border-t border-neutral-100 dark:border-neutral-800">
                                <a 
                                    href="https://github.com/Jmukandila/Copro-Smart-Manager" 
                                    target="_blank" 
                                    rel="noopener noreferrer" 
                                    class="inline-flex items-center gap-1.5 text-xs font-semibold text-neutral-900 dark:text-white hover:underline"
                                >
                                    <span data-lang="fr">Voir le code sur GitHub</span>
                                    <span data-lang="en" class="hidden">View code on GitHub</span>
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                </a>
                            </div>
                        </article>

                        <!-- Project 5: To-Do Fac -->
                        <article class="rounded-2xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 p-6 flex flex-col justify-between shadow-xs hover:border-neutral-400 dark:hover:border-neutral-600 transition-colors">
                            <div>
                                <div class="flex items-center justify-between text-xs font-mono text-neutral-500">
                                    <span>Outil Collaboratif</span>
                                    <span>Open Source</span>
                                </div>
                                <h3 class="mt-2 text-lg font-bold text-neutral-900 dark:text-white">
                                    To-Do Fac
                                </h3>
                                <p class="mt-2 text-xs sm:text-sm text-neutral-600 dark:text-neutral-300 leading-relaxed">
                                    <span data-lang="fr">
                                        Application collaborative pour étudiants facilitant la coordination des devoirs de groupe, la répartition des rôles et le respect des échéances avec tableaux Kanban.
                                    </span>
                                    <span data-lang="en" class="hidden">
                                        Collaborative platform built for students to coordinate group assignments, assign tasks, and track milestones with Kanban boards.
                                    </span>
                                </p>
                                <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">PHP</span>
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Laravel API</span>
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">MySQL</span>
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Posta</span>
                                    <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">Tailwind</span>
                                </div>
                            </div>

                            <div class="mt-6 pt-4 border-t border-neutral-100 dark:border-neutral-800">
                                <a 
                                    href="https://github.com/Jmukandila/todo_fac" 
                                    target="_blank" 
                                    rel="noopener noreferrer" 
                                    class="inline-flex items-center gap-1.5 text-xs font-semibold text-neutral-900 dark:text-white hover:underline"
                                >
                                    <span data-lang="fr">Voir le code sur GitHub</span>
                                    <span data-lang="en" class="hidden">View code on GitHub</span>
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                </a>
                            </div>
                        </article>

                    </div>

                </div>
            </section>

            <!-- Experience & Education Section: Clean Resume layout -->
            <section id="experience" class="py-16 sm:py-20 border-b border-neutral-200/80 dark:border-neutral-800/80">
                <div class="mb-10">
                    <div class="text-xs font-mono uppercase tracking-wider text-neutral-500 dark:text-neutral-400">
                        02 / <span data-lang="fr">Parcours</span><span data-lang="en" class="hidden">Experience</span>
                    </div>
                    <h2 class="mt-2 text-2xl sm:text-3xl font-bold tracking-tight text-neutral-900 dark:text-white">
                        <span data-lang="fr">Expériences professionnelles & formation</span>
                        <span data-lang="en" class="hidden">Work experiences & education</span>
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    
                    <!-- Experiences Column -->
                    <div>
                        <h3 class="text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 mb-6 font-semibold">
                            <span data-lang="fr">Expériences professionnelles</span>
                            <span data-lang="en" class="hidden">Professional Experience</span>
                        </h3>

                        <div class="space-y-8 border-l border-neutral-200 dark:border-neutral-800 pl-5">
                            
                            <!-- Smart Cyberspace -->
                            <div class="relative">
                                <span class="absolute -left-[25px] top-1.5 w-2 h-2 rounded-full bg-neutral-900 dark:bg-white"></span>
                                <div class="flex items-baseline justify-between flex-wrap gap-1">
                                    <h4 class="font-bold text-sm text-neutral-900 dark:text-white">Développeur Full-Stack</h4>
                                    <span class="text-xs font-mono text-neutral-500">Jan. 2026 – Sept. 2026</span>
                                </div>
                                <div class="text-xs text-neutral-600 dark:text-neutral-400 font-medium mt-0.5">
                                    <a href="https://smartcyberspace.ca/" target="_blank" rel="noopener noreferrer" class="hover:underline text-neutral-900 dark:text-white">Smart Cyberspace Inc ↗</a> • Ontario, Canada
                                </div>
                                <ul class="mt-2.5 space-y-1.5 text-xs text-neutral-600 dark:text-neutral-400 leading-relaxed">
                                    <li>• Conception de modules métier et développement d'interfaces réactives.</li>
                                    <li>• Migration de l'architecture backend vers Laravel 11 avec gain de performance et de maintenabilité.</li>
                                    <li>• Optimisation des requêtes SQL et structuration des routes API.</li>
                                </ul>
                            </div>

                            <!-- SMIRL Technologies -->
                            <div class="relative">
                                <span class="absolute -left-[25px] top-1.5 w-2 h-2 rounded-full bg-neutral-400 dark:bg-neutral-600"></span>
                                <div class="flex items-baseline justify-between flex-wrap gap-1">
                                    <h4 class="font-bold text-sm text-neutral-900 dark:text-white">Stagiaire Développeur Web</h4>
                                    <span class="text-xs font-mono text-neutral-500">Juil. 2025 – Déc. 2025</span>
                                </div>
                                <div class="text-xs text-neutral-600 dark:text-neutral-400 font-medium mt-0.5">
                                    SMIRL Technologies • Lubumbashi, RDC
                                </div>
                                <ul class="mt-2.5 space-y-1.5 text-xs text-neutral-600 dark:text-neutral-400 leading-relaxed">
                                    <li>• Développement et intégration continue des fonctionnalités d'une plateforme d'orientation scolaire.</li>
                                    <li>• Optimisation des requêtes en base de données et amélioration de l'ergonomie UX/UI.</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Education Column -->
                    <div>
                        <h3 class="text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 mb-6 font-semibold">
                            <span data-lang="fr">Diplômes & Éducation</span>
                            <span data-lang="en" class="hidden">Education & Degrees</span>
                        </h3>

                        <div class="space-y-8 border-l border-neutral-200 dark:border-neutral-800 pl-5">
                            
                            <!-- ECE Paris -->
                            <div class="relative">
                                <span class="absolute -left-[25px] top-1.5 w-2 h-2 rounded-full bg-neutral-900 dark:bg-white"></span>
                                <div class="flex items-baseline justify-between flex-wrap gap-1">
                                    <h4 class="font-bold text-sm text-neutral-900 dark:text-white">Bachelor Concepteur Développeur d'Applications (CDA)</h4>
                                    <span class="text-xs font-mono text-neutral-500">2026 – 2027</span>
                                </div>
                                <div class="text-xs text-neutral-600 dark:text-neutral-400 font-medium mt-0.5">
                                    ECE Paris (École Centrale d'Électronique) • Paris, France
                                </div>
                                <p class="mt-2 text-xs text-neutral-600 dark:text-neutral-400 leading-relaxed">
                                    Conception logicielle, architecture d'applications web, sécurité, tests unitaires et intégration continue. <strong>Recherche de stage de 6 mois dès Avril 2027.</strong>
                                </p>
                            </div>

                            <!-- ISC Lubumbashi -->
                            <div class="relative">
                                <span class="absolute -left-[25px] top-1.5 w-2 h-2 rounded-full bg-neutral-400 dark:bg-neutral-600"></span>
                                <div class="flex items-baseline justify-between flex-wrap gap-1">
                                    <h4 class="font-bold text-sm text-neutral-900 dark:text-white">Licence en Informatique et Gestion</h4>
                                    <span class="text-xs font-mono text-neutral-500">2021 – 2024</span>
                                </div>
                                <div class="text-xs text-neutral-600 dark:text-neutral-400 font-medium mt-0.5">
                                    Institut Supérieur de Commerce • Lubumbashi, RDC
                                </div>
                                <p class="mt-2 text-xs text-neutral-600 dark:text-neutral-400 leading-relaxed">
                                    Algorithmique, modélisation de données (Merise / MCD / SQL), développement orienté objet et systèmes d'information.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <!-- Tech Stack Section -->
            <section id="competences" class="py-16 sm:py-20 border-b border-neutral-200/80 dark:border-neutral-800/80">
                <div class="mb-10">
                    <div class="text-xs font-mono uppercase tracking-wider text-neutral-500 dark:text-neutral-400">
                        03 / <span data-lang="fr">Compétences</span><span data-lang="en" class="hidden">Stack</span>
                    </div>
                    <h2 class="mt-2 text-2xl sm:text-3xl font-bold tracking-tight text-neutral-900 dark:text-white">
                        <span data-lang="fr">Stack technique & outils de travail</span>
                        <span data-lang="en" class="hidden">Technical stack & everyday tools</span>
                    </h2>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <div class="p-5 rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900">
                        <div class="text-xs font-mono text-neutral-500 mb-2 font-semibold">Backend</div>
                        <div class="font-bold text-sm text-neutral-900 dark:text-white">PHP & Frameworks</div>
                        <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-1">Architecture MVC, API RESTful</p>
                        <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">PHP 8.x</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 font-bold">Laravel</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">Node.js</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">Python</span>
                        </div>
                    </div>

                    <div class="p-5 rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900">
                        <div class="text-xs font-mono text-neutral-500 mb-2 font-semibold">Frontend</div>
                        <div class="font-bold text-sm text-neutral-900 dark:text-white">Interface & UI</div>
                        <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-1">Design moderne & réactif</p>
                        <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">Vue.js</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">Nuxt.js</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 font-bold">Tailwind CSS</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">Blade</span>
                        </div>
                    </div>

                    <div class="p-5 rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900">
                        <div class="text-xs font-mono text-neutral-500 mb-2 font-semibold">Données</div>
                        <div class="font-bold text-sm text-neutral-900 dark:text-white">Bases de Données</div>
                        <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-1">Schémas & requêtes optimisées</p>
                        <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">MySQL</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">SQLite</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">PostgreSQL</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">Merise / SQL</span>
                        </div>
                    </div>

                    <div class="p-5 rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900">
                        <div class="text-xs font-mono text-neutral-500 mb-2 font-semibold">DevOps & Outils</div>
                        <div class="font-bold text-sm text-neutral-900 dark:text-white">Workflow & Déploiement</div>
                        <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-1">Automatisation et livraison</p>
                        <div class="mt-4 flex flex-wrap gap-1.5 font-mono text-[11px]">
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">Git / GitHub</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">GitLab & Gitea</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">CI/CD Actions</span>
                            <span class="px-2 py-0.5 rounded bg-neutral-100 dark:bg-neutral-800 text-neutral-800 dark:text-neutral-200">Miabi</span>
                        </div>
                    </div>

                </div>
            </section>

            <!-- About Section -->
            <section id="apropos" class="py-16 sm:py-20 border-b border-neutral-200/80 dark:border-neutral-800/80">
                <div class="grid md:grid-cols-12 gap-8 items-start">
                    <div class="md:col-span-4">
                        <div class="text-xs font-mono uppercase tracking-wider text-neutral-500 dark:text-neutral-400">
                            04 / <span data-lang="fr">À propos</span><span data-lang="en" class="hidden">About</span>
                        </div>
                        <h2 class="mt-2 text-2xl font-bold tracking-tight text-neutral-900 dark:text-white">
                            <span data-lang="fr">Rigueur technique & curiosité</span>
                            <span data-lang="en" class="hidden">Technical rigor & curiosity</span>
                        </h2>
                    </div>

                    <div class="md:col-span-8 space-y-4 text-sm sm:text-base text-neutral-600 dark:text-neutral-300 leading-relaxed">
                        <p>
                            <span data-lang="fr">
                                Passionné par la création de logiciels depuis plusieurs années, j'accorde une importance primordiale à la propreté du code, à la maintenabilité et à la qualité des livrables.
                            </span>
                            <span data-lang="en" class="hidden">
                                Passionate about software craftsmanship for years, I emphasize clean architecture, maintainability, and delivery excellence.
                            </span>
                        </p>
                        <p>
                            <span data-lang="fr">
                                Mon expérience au sein de l'équipe de <strong>Smart Cyberspace Inc</strong> (Canada) et sur des projets institutionnels m'a appris à collaborer avec des équipes réparties, à être proactif face aux blocages et à respecter les délais de livraison.
                            </span>
                            <span data-lang="en" class="hidden">
                                My experience within the <strong>Smart Cyberspace Inc</strong> team (Canada) and on institutional projects trained me to collaborate effectively in distributed settings and deliver on schedule.
                            </span>
                        </p>
                        <div class="pt-2 flex flex-wrap gap-4 text-xs font-medium text-neutral-600 dark:text-neutral-400">
                            <span class="px-3 py-1 rounded-md bg-neutral-100 dark:bg-neutral-800">Français (Natif)</span>
                            <span class="px-3 py-1 rounded-md bg-neutral-100 dark:bg-neutral-800">Anglais (Avancé)</span>
                            <span class="px-3 py-1 rounded-md bg-neutral-100 dark:bg-neutral-800">Permis & mobilité Île-de-France</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="py-16 sm:py-24">
                <div class="rounded-2xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 p-8 sm:p-12 shadow-xs">
                    <div class="grid md:grid-cols-12 gap-10 items-center">
                        
                        <div class="md:col-span-6">
                            <div class="text-xs font-mono uppercase tracking-wider text-neutral-500 dark:text-neutral-400">
                                05 / Contact
                            </div>
                            <h2 class="mt-2 text-2xl sm:text-3xl font-bold tracking-tight text-neutral-900 dark:text-white">
                                <span data-lang="fr">Discutons de votre opportunité</span>
                                <span data-lang="en" class="hidden">Let's connect</span>
                            </h2>
                            <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-300 leading-relaxed">
                                <span data-lang="fr">
                                    Je suis à votre disposition pour échanger au sujet d'un stage de fin d'études de 6 mois dès Avril 2027 ou d'un projet technique.
                                </span>
                                <span data-lang="en" class="hidden">
                                    Feel free to reach out to discuss a 6-month final internship starting April 2027 or an engineering collaboration.
                                </span>
                            </p>

                            <div class="mt-6 space-y-3 text-xs sm:text-sm">
                                <div class="flex items-center justify-between p-3 rounded-lg border border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-950">
                                    <span class="font-mono text-neutral-900 dark:text-white">josh.kaninda@edu.ece.fr</span>
                                    <button 
                                        type="button" 
                                        onclick="copyEmail('josh.kaninda@edu.ece.fr')" 
                                        class="px-2.5 py-1 rounded text-xs font-semibold bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 hover:opacity-85 transition-opacity"
                                    >
                                        <span data-lang="fr">Copier</span>
                                        <span data-lang="en" class="hidden">Copy</span>
                                    </button>
                                </div>
                                <div class="p-3 rounded-lg border border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-950 flex items-center justify-between">
                                    <span class="text-neutral-600 dark:text-neutral-400">Localisation</span>
                                    <span class="font-semibold text-neutral-900 dark:text-white">France</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right direct message form -->
                        <div class="md:col-span-6 p-6 rounded-xl border border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-950">
                            <form id="contact-form" class="space-y-4">
                                <div>
                                    <label class="block text-xs font-medium text-neutral-700 dark:text-neutral-300 mb-1">
                                        <span data-lang="fr">Votre Nom / Entreprise</span>
                                        <span data-lang="en" class="hidden">Your Name / Organization</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        required 
                                        class="w-full px-3 py-2 rounded-lg border border-neutral-300 dark:border-neutral-700 bg-white dark:bg-neutral-900 text-neutral-900 dark:text-white text-xs focus:outline-none focus:border-neutral-900 dark:focus:border-white transition-colors"
                                        placeholder="Ex: Entreprise Tech / Recruteur"
                                    >
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-neutral-700 dark:text-neutral-300 mb-1">Email</label>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        required 
                                        class="w-full px-3 py-2 rounded-lg border border-neutral-300 dark:border-neutral-700 bg-white dark:bg-neutral-900 text-neutral-900 dark:text-white text-xs focus:outline-none focus:border-neutral-900 dark:focus:border-white transition-colors"
                                        placeholder="contact@entreprise.com"
                                    >
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-neutral-700 dark:text-neutral-300 mb-1">Message</label>
                                    <textarea 
                                        name="message" 
                                        rows="3" 
                                        required 
                                        class="w-full px-3 py-2 rounded-lg border border-neutral-300 dark:border-neutral-700 bg-white dark:bg-neutral-900 text-neutral-900 dark:text-white text-xs focus:outline-none focus:border-neutral-900 dark:focus:border-white transition-colors resize-none"
                                        placeholder="Proposition de stage de 6 mois, question ou projet..."
                                    ></textarea>
                                </div>
                                <div id="form-status" class="hidden p-2 rounded text-xs bg-neutral-200 dark:bg-neutral-800 font-medium"></div>
                                <button 
                                    type="submit" 
                                    class="w-full py-2.5 rounded-lg bg-neutral-900 text-white dark:bg-white dark:text-neutral-950 font-semibold text-xs hover:bg-neutral-800 dark:hover:bg-neutral-200 transition-colors"
                                >
                                    <span data-lang="fr">Envoyer le message</span>
                                    <span data-lang="en" class="hidden">Send message</span>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <!-- Footer -->
        <footer class="border-t border-neutral-200/80 dark:border-neutral-800/80 bg-white dark:bg-neutral-950 py-8 transition-colors">
            <div class="mx-auto max-w-5xl px-5 sm:px-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-neutral-500 dark:text-neutral-400">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-neutral-900 dark:text-white">Josh Kaninda</span>
                    <span>© {{ date('Y') }}</span>
                    <span>•</span>
                    <span data-lang="fr">Tous droits réservés</span>
                    <span data-lang="en" class="hidden">All rights reserved</span>
                </div>

                <div class="flex items-center gap-5 font-medium">
                    <a href="https://github.com/Jmukandila" target="_blank" rel="noopener noreferrer" class="hover:text-neutral-900 dark:hover:text-white transition-colors">GitHub</a>
                    <a href="https://www.linkedin.com/in/josh-kaninda/" target="_blank" rel="noopener noreferrer" class="hover:text-neutral-900 dark:hover:text-white transition-colors">LinkedIn</a>
                    <a href="{{ asset('cv/CV_Josh_Kaninda.pdf') }}" target="_blank" rel="noopener noreferrer" class="hover:text-neutral-900 dark:hover:text-white transition-colors">CV (PDF)</a>
                    <a href="#accueil" class="hover:text-neutral-900 dark:hover:text-white transition-colors">↑ Haut</a>
                </div>
            </div>
        </footer>

    </body>
</html>
