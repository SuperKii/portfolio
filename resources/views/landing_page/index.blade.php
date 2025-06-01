<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('landing/assets/img/favicon.png') }}" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/styles.css') }}">

    <title>Portfolio</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    @include('landing_page.component.navbar')

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        @include('landing_page.component.home')

        <!--==================== ABOUT ====================-->
        @include('landing_page.component.about')

        <!--==================== SERVICES ====================-->
        {{-- @include('landing_page.component.service') --}}

        <!--==================== PROJECTS ====================-->
        @include('landing_page.component.project')

        <!--==================== CONTACT ====================-->
        @include('landing_page.component.contact')
    </main>

    <!--==================== FOOTER ====================-->
    @include('landing_page.component.footer')

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('landing/assets/js/scrollreveal.min.js') }}"></script>

    <!--=============== EMAIL JS ===============-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>
</body>

</html>
