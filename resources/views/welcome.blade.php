<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio de Josh Kaninda — développeur full stack, créateur de produits numériques et sites web modernes.">
        <title>Josh Kaninda | Portfolio</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-950 text-slate-100 antialiased selection:bg-cyan-400 selection:text-slate-950">
        <div class="absolute inset-x-0 top-0 -z-10 h-[40rem] bg-[radial-gradient(circle_at_top,_rgba(34,211,238,0.22),_transparent_45%),radial-gradient(circle_at_right,_rgba(168,85,247,0.18),_transparent_35%)]"></div>

        <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/70 backdrop-blur-xl">
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
                <a href="#accueil" class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-400 to-violet-500 font-black text-slate-950">JK</span>
                    <span class="text-lg font-semibold tracking-tight">Josh Kaninda</span>
                </a>

                <div class="hidden items-center gap-8 text-sm text-slate-300 md:flex">
                    <a href="#apropos" class="transition hover:text-white">À propos</a>
                    <a href="#services" class="transition hover:text-white">Services</a>
                    <a href="#projets" class="transition hover:text-white">Projets</a>
                    <a href="#contact" class="transition hover:text-white">Contact</a>
                </div>

                <a href="mailto:hello@joshkaninda.dev" class="inline-flex items-center rounded-full border border-cyan-400/40 bg-cyan-400/10 px-4 py-2 text-sm font-medium text-cyan-200 transition hover:border-cyan-300 hover:bg-cyan-400/20">
                    Parlons projet
                </a>
            </nav>
        </header>

        <main>
            <section id="accueil" class="mx-auto max-w-7xl px-6 pb-20 pt-16 lg:px-8 lg:pt-24">
                <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr]">
                    <div>
                        <span class="inline-flex items-center gap-2 rounded-full border border-cyan-400/30 bg-cyan-400/10 px-3 py-1 text-xs font-medium uppercase tracking-[0.2em] text-cyan-200">
                            <span class="h-2 w-2 rounded-full bg-cyan-300"></span>
                            Disponible pour missions
                        </span>

                        <h1 class="mt-6 max-w-xl text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl lg:text-7xl">
                            Je crée des expériences web qui font <span class="bg-gradient-to-r from-cyan-300 via-blue-400 to-violet-400 bg-clip-text text-transparent">mieux vendre</span>.
                        </h1>

                        <p class="mt-6 max-w-xl text-lg leading-8 text-slate-300">
                            Développeur full stack passionné par les interfaces élégantes, les performances et les solutions qui simplifient la vie des entreprises.
                        </p>

                        <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                            <a href="#projets" class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 font-semibold text-slate-950 transition hover:-translate-y-0.5 hover:bg-slate-200">
                                Voir mes projets
                            </a>
                            <a href="#contact" class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3 font-semibold text-white transition hover:border-white/30 hover:bg-white/10">
                                Me contacter
                            </a>
                        </div>

                        <div class="mt-10 flex flex-wrap gap-10 text-sm text-slate-300">
                            <div>
                                <div class="text-3xl font-bold text-white">5+</div>
                                <div class="mt-1">années d’expérience</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-white">24</div>
                                <div class="mt-1">projets livrés</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-white">100%</div>
                                <div class="mt-1">engagement</div>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-10 top-8 h-24 w-24 rounded-full bg-cyan-400/30 blur-3xl"></div>
                        <div class="absolute -right-6 bottom-8 h-24 w-24 rounded-full bg-violet-500/30 blur-3xl"></div>

                        <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-gradient-to-br from-slate-900 via-slate-900 to-slate-800 p-6 shadow-2xl shadow-cyan-950/30">
                            <div class="rounded-[1.5rem] border border-white/10 bg-slate-950 p-5">
                                <div class="flex items-center justify-between">
                                    <div class="flex gap-2">
                                        <span class="h-3 w-3 rounded-full bg-red-400"></span>
                                        <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                                        <span class="h-3 w-3 rounded-full bg-green-400"></span>
                                    </div>
                                    <span class="rounded-full border border-cyan-400/30 bg-cyan-400/10 px-2 py-1 text-[10px] uppercase tracking-[0.2em] text-cyan-200">Portfolio</span>
                                </div>

                                <div class="mt-6 rounded-2xl bg-gradient-to-br from-cyan-500/20 via-slate-900 to-violet-500/20 p-5">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Profil</p>
                                            <h2 class="mt-2 text-2xl font-bold text-white">Josh K.</h2>
                                        </div>
                                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-400 to-violet-500 text-xl font-black text-slate-950">JK</div>
                                    </div>

                                    <div class="mt-6 space-y-3 text-sm text-slate-300">
                                        <div class="flex items-center justify-between rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                                            <span>UI/UX</span>
                                            <span class="font-semibold text-cyan-300">Excellent</span>
                                        </div>
                                        <div class="flex items-center justify-between rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                                            <span>Laravel</span>
                                            <span class="font-semibold text-violet-300">Avancé</span>
                                        </div>
                                        <div class="flex items-center justify-between rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                                            <span>Performance</span>
                                            <span class="font-semibold text-emerald-300">Optimisée</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="apropos" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
                <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
                    <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8">
                        <p class="text-sm uppercase tracking-[0.2em] text-cyan-300">À propos</p>
                        <h2 class="mt-4 text-3xl font-bold text-white">Je transforme des idées en produits utiles et beaux.</h2>
                    </div>

                    <div class="space-y-6 text-lg leading-8 text-slate-300">
                        <p>
                            Je suis un développeur web orienté produit. Mon travail consiste à créer des interfaces modernes, des applications fluides et des outils qui aident les entreprises à mieux communiquer, vendre et gérer leur activité en ligne.
                        </p>
                        <p>
                            J’aime travailler à la fois sur la stratégie, le design et le développement, afin d’offrir des solutions cohérentes du premier clic à la conversion finale.
                        </p>
                        <div class="flex flex-wrap gap-3 pt-2">
                            @php
                                $skills = ['Laravel', 'PHP', 'JavaScript', 'React', 'Tailwind', 'MySQL', 'API REST', 'SEO', 'UI Design', 'Performance'];
                            @endphp
                            @foreach ($skills as $skill)
                                <span class="rounded-full border border-white/10 bg-slate-900 px-3 py-2 text-sm text-slate-200">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
                <div class="mb-10 max-w-2xl">
                    <p class="text-sm uppercase tracking-[0.2em] text-cyan-300">Services</p>
                    <h2 class="mt-4 text-3xl font-bold text-white">Ce que je peux vous aider à construire</h2>
                </div>

                @php
                    $services = [
                        ['title' => 'Sites vitrines', 'desc' => 'Des pages web élégantes et efficaces pour présenter votre activité, vos services et votre valeur.'],
                        ['title' => 'Applications web', 'desc' => 'Des outils internes ou clients, pensés pour la productivité, la gestion et la croissance.'],
                        ['title' => 'Refonte UX/UI', 'desc' => 'Amélioration du parcours utilisateur et modernisation de l’expérience digitale existante.'],
                        ['title' => 'Maintenance & optimisation', 'desc' => 'Performances, sécurité, SEO et amélioration continue pour garder votre présence solide.'],
                    ];
                @endphp

                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                    @foreach ($services as $service)
                        <article class="rounded-[1.75rem] border border-white/10 bg-gradient-to-b from-slate-900 to-slate-950 p-6 transition hover:-translate-y-1 hover:border-cyan-400/30">
                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-400/20 to-violet-500/20 text-xl text-cyan-200">✦</div>
                            <h3 class="text-xl font-semibold text-white">{{ $service['title'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-300">{{ $service['desc'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="projets" class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
                <div class="mb-10 flex items-end justify-between gap-4">
                    <div>
                        <p class="text-sm uppercase tracking-[0.2em] text-cyan-300">Projets</p>
                        <h2 class="mt-4 text-3xl font-bold text-white">Quelques réalisations</h2>
                    </div>
                    <a href="#contact" class="hidden text-sm font-medium text-cyan-300 hover:text-cyan-200 md:inline-flex">Démarrer un projet →</a>
                </div>

                @php
                    $projects = [
                        ['name' => 'Nova Studio', 'category' => 'Site vitrine', 'desc' => 'Refonte d’un site d’agence avec mise en valeur du positionnement, un storytelling fort et un parcours de conversion optimisé.', 'tags' => ['Laravel', 'Tailwind', 'SEO']],
                        ['name' => 'Aster CRM', 'category' => 'Application web', 'desc' => 'Dashboard interne de suivi client avec gestion de tâches, reporting et automatisations pour optimiser la relation commerciale.', 'tags' => ['PHP', 'MySQL', 'API']],
                        ['name' => 'Luna Store', 'category' => 'E-commerce', 'desc' => 'Boutique e-commerce pensée pour la conversion, avec expérience mobile fluide et parcours d’achat simplifié.', 'tags' => ['React', 'UI/UX', 'Performance']],
                    ];
                @endphp

                <div class="grid gap-6 lg:grid-cols-3">
                    @foreach ($projects as $project)
                        <article class="group overflow-hidden rounded-[1.75rem] border border-white/10 bg-slate-900/70">
                            <div class="h-56 bg-[radial-gradient(circle_at_top,_rgba(34,211,238,0.2),_transparent_35%),linear-gradient(135deg,#0f172a,#111827,#1e293b)] p-5">
                                <div class="flex h-full items-end">
                                    <div class="w-full rounded-2xl border border-white/10 bg-slate-950/60 p-4 backdrop-blur-sm">
                                        <p class="text-xs uppercase tracking-[0.2em] text-slate-400">{{ $project['category'] }}</p>
                                        <h3 class="mt-3 text-2xl font-bold text-white">{{ $project['name'] }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-base leading-7 text-slate-300">{{ $project['desc'] }}</p>
                                <div class="mt-5 flex flex-wrap gap-2">
                                    @foreach ($project['tags'] as $tag)
                                        <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-1 text-xs font-medium text-cyan-200">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
                <div class="rounded-[2rem] border border-cyan-400/20 bg-gradient-to-r from-cyan-500/10 via-slate-900 to-violet-500/10 p-8 md:p-12">
                    <div class="grid gap-8 md:grid-cols-[1fr_auto] md:items-center">
                        <div>
                            <p class="text-sm uppercase tracking-[0.2em] text-cyan-300">Processus</p>
                            <h2 class="mt-4 text-3xl font-bold text-white">Un accompagnement clair, de l’idée au lancement.</h2>
                        </div>
                        <a href="#contact" class="inline-flex items-center justify-center rounded-full bg-cyan-400 px-6 py-3 font-semibold text-slate-950 transition hover:bg-cyan-300">
                            Demander un devis
                        </a>
                    </div>
                </div>
            </section>

            <section id="contact" class="mx-auto max-w-7xl px-6 pb-24 pt-20 lg:px-8">
                <div class="grid gap-10 rounded-[2rem] border border-white/10 bg-white/5 p-8 md:p-12 lg:grid-cols-[1fr_0.9fr]">
                    <div>
                        <p class="text-sm uppercase tracking-[0.2em] text-cyan-300">Contact</p>
                        <h2 class="mt-4 text-3xl font-bold text-white">Prêt à lancer votre prochain projet ?</h2>
                        <p class="mt-4 max-w-xl text-lg leading-8 text-slate-300">
                            Je peux vous accompagner pour créer un site, une application ou une refonte plus performante, plus claire et plus rentable.
                        </p>
                    </div>

                    <div class="space-y-4 rounded-[1.5rem] border border-white/10 bg-slate-950/80 p-6">
                        <a href="mailto:hello@joshkaninda.dev" class="block rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-slate-200 transition hover:border-cyan-400/30 hover:bg-white/10">
                            hello@joshkaninda.dev
                        </a>
                        <a href="https://www.linkedin.com" target="_blank" rel="noreferrer" class="block rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-slate-200 transition hover:border-cyan-400/30 hover:bg-white/10">
                            LinkedIn
                        </a>
                        <a href="https://github.com" target="_blank" rel="noreferrer" class="block rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-slate-200 transition hover:border-cyan-400/30 hover:bg-white/10">
                            GitHub
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-white/10 py-6">
            <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 text-sm text-slate-400 md:flex-row lg:px-8">
                <p>© 2026 Josh Kaninda — Tous droits réservés.</p>
                <p>Développé pour inspirer confiance et conversion.</p>
            </div>
        </footer>
    </body>
</html>
