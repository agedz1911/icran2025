<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICRAN 2025</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css" />

</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-gradient-to-t from-sky-600 to-sky-950">

        <div class="max-w-7xl mx-auto p-6 lg:p-8 ">
            <div class="flex flex-col justify-center items-center">
                <img src="images/logo/logo-icon-n.png" class="w-80 lg:w-96" alt="">
                <h1 class="text-white uppercase text-center mt-4 text-4xl font-semibold">The International Conference on Recent Advances in Neurotraumatology</h1>
                <h4 class="italic text-2xl mt-3 mb-3 text-amber-300">" Neurotrauma: Integrating Research into Clinical Practice "</h4>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-sky-600">
                        <div>
                            <div class="h-16 w-16 bg-sky-50 dark:bg-sky-800/20 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-screwdriver-wrench text-2xl text-sky-600"></i>
                            </div>

                            <h2 class="mt-6 text-xl uppercase font-semibold text-gray-900 dark:text-white">We are Available Soon</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                The website is under construction. Please contact the secretariat for further information
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-sky-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </div>

                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-sky-50 dark:bg-sky-800/20 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-id-card text-2xl text-sky-600"></i>
                            </div>

                            <h2 class="mt-6 text-xl uppercase font-bold text-gray-900 dark:text-white">secretariat</h2>

                            <div class="grid grid-cols-1 md:grid-cols-2 mt-3 gap-3 ">
                                <div class="flex flex-row items-center gap-3">
                                    <i class="fa-brands fa-whatsapp text-lg text-green-500"></i>
                                    <div class="flex flex-col gap-1">
                                        <a href="https://wa.me/+6281317857586" target="_blank" class="text-xs hover:underline hover:text-primary leading-relaxed text-slate-500">Ms. Sari : +62 813 1913 5153</a>
                                        <a href="https://wa.me/+6281317857586" target="_blank" class="text-xs hover:underline hover:text-primary leading-relaxed text-slate-500 ">Ms. Tiolan : +62 813 1785 7586</a>
                                    </div>
                                </div>
                                <div class="flex flex-row items-center gap-3">
                                    <i class="fa-solid fa-envelope text-lg"></i>
                                    <div class="flex flex-col">
                                        <a href="mailto:icran2025@pharma-pro.com" target="_blank" class="text-xs hover:underline hover:text-primary text-slate-500 leading-relaxed">icran2025@pharma-pro.com</a>
                                    </div>
                                </div>
                                <div class="flex flex-row items-center gap-3">
                                    <i class="fa-solid fa-location-dot text-secondary text-lg"></i>
                                    <div class="flex flex-col">
                                        <p class="text-xs leading-relaxed text-slate-500">Komplek Perkantoran Duta Merlin Blok C/35 <br>
                                            Jl. Gajah Mada 3-5, Jakarta 10130</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="#" class="group inline-flex text-white items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            MIS - IT Pharma-Pro © 2025
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-slate-100 dark:text-gray-400 sm:text-right sm:ml-0">
                    ICRAN 2025
                </div>
            </div>
        </div>
    </div>

    <script src="js/custom.js"></script>
    @vite('resources/js/app.js')
</body>

</html>