<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <title>market_kiganjani_home</title>
    <title>market_kiganjani_home</title>
</head>

<body>

    {{-- heade --}}
    <x-header />

    {{-- body content --}}
    <h1 class="content_title">Recent products</h1>
    <x-second_section_produxt :items="$items" />
    {{-- end of ody content  --}}


    <!-- Footer -->
    <x-footer />
    <!-- Footer -->


    {{-- sript cdn links --}}
    <x-utilis.scriptcdn />
</body>

</html>
