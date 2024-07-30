<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.header')
</head>

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
    <main id="body-inner">
        <div id="page-transition">

            <div class="ptr-overlay"></div>
            <div class="ptr-preloader">
                <div class="ptr-prel-content">
                    <img src="{{ asset('/preloader.png') }}" class="ptr-prel-image tt-logo-light" alt="Logo">
                </div>
            </div>
        </div>
        <div id="magic-cursor">
            <div id="ball"></div>
        </div>
        <div class="bg-noise"></div>
        <span class="wp">
            <a href="https://wa.me/917415747504?text=I'm%20interested%20to%20work%20with%20you" target="_blank">
                <img src="/whatsapp.png" alt="WhatsApp">
            </a>
        </span>
        <div id="scroll-container">
            @include('component.navbar')
            <div id="content-wrap">
                @yield('content')
                @include('component.footer')
            </div>
        </div>
    </main>
    @include('component.javascript')
</body>

</html>