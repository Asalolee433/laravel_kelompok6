<x-guest-layout>
    <div class="relative min-h-screen text-white">

        <!-- BACKGROUND IMAGE -->
        <div class="absolute inset-0 -z-10 bg-cover bg-center"
             style="background-image: url('{{ asset('images/lapangan.jpg') }}');">
        </div>

        <!-- SOFT OVERLAY (lebih terang) -->
        <div class="absolute inset-0 -z-10 bg-black/50"></div>

        <!-- FULLSCREEN CARD -->
        <div class="relative z-10 w-full min-h-screen
                    grid md:grid-cols-2 items-center
                    bg-black/40 backdrop-blur-xl
                    px-20">

            <!-- LEFT -->
            <div>
                <span class="text-sm tracking-widest text-[#d4af37]">
                    FUTSAL ARENA
                </span>

                <h2 class="text-6xl md:text-7xl font-extrabold leading-[1.1] my-6">
                    WELCOME<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#fff3c4]">
                        BACK
                    </span>
                </h2>

                <p class="text-white/80 mb-8">
                    Login untuk melanjutkan booking lapangan futsal favoritmu.
                </p>

                <div class="text-white/60 text-sm">
                    Belum punya akun?
                    <a href="{{ route('register') }}"
                       class="text-[#d4af37] font-semibold hover:text-[#fff3c4]">
                        Register
                    </a>
                </div>
            </div>

            <!-- RIGHT (FORM) -->
            <div class="flex items-center justify-center">
                <div class="w-full max-w-md bg-black/30 backdrop-blur-lg
                            border border-[#d4af37]/30 rounded-xl p-8">

                    <h2 class="text-2xl font-bold mb-6 text-center tracking-widest">
                        LOGIN
                    </h2>

                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <x-input-error :messages="$errors->all()" class="mb-4" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf

                        <input type="email" name="email" placeholder="Email"
                               class="w-full px-4 py-2 rounded bg-black/30 border border-white/20
                                      focus:border-[#d4af37] focus:ring-[#d4af37]
                                      text-white placeholder-white/50">

                        <input type="password" name="password" placeholder="Password"
                               class="w-full px-4 py-2 rounded bg-black/30 border border-white/20
                                      focus:border-[#d4af37] focus:ring-[#d4af37]
                                      text-white placeholder-white/50">

                        <div class="flex items-center justify-between text-sm">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="remember" class="accent-[#d4af37]">
                                Remember me
                            </label>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                   class="text-[#d4af37] hover:text-[#fff3c4]">
                                    Forgot password?
                                </a>
                            @endif
                        </div>

                        <button
                            class="w-full py-3 rounded-lg
                                   bg-gradient-to-r from-[#d4af37] to-[#f5e6b3]
                                   text-black font-semibold
                                   hover:scale-[1.02] transition">
                            Login
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>