<x-guest-layout>
    <div class="relative min-h-screen bg-cover bg-center"
         style="background-image: url('{{ asset('images/lapangan.jpg') }}');">

        <!-- overlay (lebih terang) -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- CARD FULLSCREEN (lebih soft) -->
        <div class="relative z-10 w-full min-h-screen
                    bg-black/40 backdrop-blur-xl
                    flex border border-yellow-400/20">

            <!-- LEFT -->
            <div class="w-1/2 p-12 text-white flex flex-col justify-center">
                <span class="text-base tracking-[0.35em] text-[#d4af37] font-semibold uppercase">
                    FUTSAL ARENA
                </span>

                <h1 class="text-6xl md:text-7xl font-extrabold leading-[1.1] mt-6">
                    CREATE YOUR<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#d4af37] to-[#fff3c4]">
                        ACCOUNT
                    </span>
                </h1>

                <p class="text-lg text-white/80 mt-6 max-w-lg">
                    Daftar sekarang dan booking lapangan futsal favoritmu.
                </p>
            </div>

            <!-- RIGHT -->
            <div class="w-1/2 flex items-center justify-center">
                <div class="w-[380px] bg-black/30 backdrop-blur-lg rounded-xl p-7 text-white
                            border border-yellow-400/20">

                    <h2 class="text-xl font-extrabold mb-5 text-center tracking-widest">
                        REGISTER
                    </h2>

                    <x-input-error :messages="$errors->all()" class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                            class="w-full mb-3 px-4 py-2 rounded bg-black/30
                                   border border-white/20
                                   focus:border-yellow-400 focus:ring-yellow-400
                                   text-white placeholder-white/50">

                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                            class="w-full mb-3 px-4 py-2 rounded bg-black/30
                                   border border-white/20
                                   focus:border-yellow-400 focus:ring-yellow-400
                                   text-white placeholder-white/50">

                        <input type="password" name="password" placeholder="Password"
                            class="w-full mb-3 px-4 py-2 rounded bg-black/30
                                   border border-white/20
                                   focus:border-yellow-400 focus:ring-yellow-400
                                   text-white placeholder-white/50">

                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="w-full mb-4 px-4 py-2 rounded bg-black/30
                                   border border-white/20
                                   focus:border-yellow-400 focus:ring-yellow-400
                                   text-white placeholder-white/50">

                        <button
                            class="w-full py-2 rounded-lg font-extrabold text-black
                                   bg-yellow-400 hover:bg-yellow-500
                                   shadow-[0_0_30px_rgba(250,204,21,0.35)]">
                            <a href="{{ route('guest.index') }}" class="text-black font-extrabold">REGISTER</a>
                        </button>

                        <p class="text-sm text-center mt-4 text-gray-300">
                            Sudah punya akun?
                            <a href="{{ route('login') }}"
                               class="text-yellow-400 font-semibold hover:text-yellow-500">
                                Login
                            </a>
                        </p>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-guest-layout>