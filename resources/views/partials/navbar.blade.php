<style>
    .navbar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #333;
    }
    .nav title {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .nav-title p {
        color: #fff;
    }
    .nav-title span {
        color: #d4af37;
    }
    .nav-logo {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .nav-logo-seccond {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .nav-logo img {
        width: 40px;
        height: 40px;
        object-fit: contain;
        filter: drop-shadow(0 0 4px rgba(212, 175, 55, 0.3));
    }
    .nav-logo-seccond img {
        height: 40px;
        width: auto;
        max-width: 160px;
        object-fit: contain;
    }
    @media (min-width: 768px) {
        .nav-logo img {
            width: 45px;
            height: 45px;
        }
        .nav-logo-seccond img {
            height: 45px;
            max-width: 200px;
        }
    }
</style>
<nav class="navbar">
    <div class="nav-logo">
        <!-- LOGO -->
        <img src="{{ asset('images/neperlogo.png') }}"
             alt="Logo"
             class="w-8 h-8 md:w-9 md:h-9 object-contain
                    drop-shadow-[0_0_4px_rgba(212,175,55,0.3)]">

        <!-- TITLE -->
        <h1 class="nav-title">
            <p>NEPER<span>FUTSAL</span></p>
        </h1>
    </div>

    <div class="nav-logo-seccond">
    <!-- LOGO -->
    <img src="{{ asset('images/strugglefm.png') }}"
     alt="Logo"
     class="h-8 md:h-9 w-auto
            max-w-[160px] md:max-w-[200px]
            object-contain">
    </div>
</nav>