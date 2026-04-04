<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Futsal Arena</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes goldPulse {
            0% { box-shadow: 0 0 10px rgba(212,175,55,.25); }
            50% { box-shadow: 0 0 20px rgba(212,175,55,.45); }
            100% { box-shadow: 0 0 10px rgba(212,175,55,.25); }
        }
        .gold-glow {
            animation: goldPulse 3s ease-in-out infinite;
        }
    </style>
</head>

<body class="min-h-screen bg-black text-white flex flex-col">

    <!-- BACKGROUND IMAGE + OVERLAY -->
    <div class="absolute inset-0 -z-10">
        <!-- IMAGE -->
        <div class="absolute inset-0
                    bg-[url('/images/ManUnitedfeatured.jpg')]
                    bg-cover bg-center">
        </div>

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-black/85"></div>
    </div>

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- HERO --}}
    <main class="flex-1 flex items-center justify-center px-6 py-16">
        <div class="max-w-6xl w-full grid md:grid-cols-2 gap-10
                    bg-white/5 backdrop-blur-xl
                    border border-white/10 rounded-2xl p-12">

            <!-- LEFT -->
            <div>
                <span class="text-sm tracking-widest text-[#d4af37]">
                    LIVE BOOKING SYSTEM
                </span>

                <h2 class="text-5xl font-extrabold leading-tight my-6">
                    BOOK YOUR<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#fff3c4]">
                        FUTSAL GAME
                    </span>
                </h2>

                <p class="text-white/70 mb-8">
                    Booking lapangan futsal jadi lebih cepat dan praktis.
                    Pilih jadwal, datang, langsung main.
                </p>

                <!-- LOGIN & REGISTER BUTTON -->
                <div class="flex flex-wrap gap-4 mt-6">

                    @guest
                        <!-- LOGIN -->
                        <a href="{{ route('login') }}"
                           class="px-6 py-3 rounded-lg
                                  bg-gradient-to-r from-[#d4af37] to-[#f5e6b3]
                                  text-black font-semibold gold-glow
                                  hover:scale-105 transition">
                            Login
                        </a>

                        <!-- REGISTER -->
                        <a href="{{ route('register') }}"
                           class="px-6 py-3 rounded-lg
                                  border border-[#d4af37]
                                  text-[#d4af37] font-semibold
                                  hover:bg-[#d4af37] hover:text-black
                                  transition">
                            Register
                        </a>
                    @endguest

                    @auth
                        <!-- DASHBOARD -->
                        <a href="{{ route('dashboard.index') }}" 
                           class="px-6 py-3 rounded-lg
                                  bg-gradient-to-r from-[#d4af37] to-[#f5e6b3]
                                  text-black font-semibold gold-glow
                                  hover:scale-105 transition">
                            Masuk ke Dashboard
                        </a>
                    @endauth

                </div>
            </div>

            <!-- RIGHT -->
            <div class="flex items-center justify-center">
                <div class="w-full h-72 rounded-xl
                            border border-[#d4af37]/40
                            flex items-center justify-center
                            text-white/40">
                    IMAGE AREA
                </div>
            </div>

        </div>
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

</body>
</html>