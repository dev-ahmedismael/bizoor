<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{app()->getLocale() === 'ar' ? 'rtl' : 'ltr'}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Bizoor' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('shared.navbar.navbar', ['nav_links' =>
    [
    ['title' => __('nav.home'), 'path' => 'home'],
    ['title' => __('nav.why_choose_us'), 'path' => 'why_bizoor'],
    ['title' => __('nav.services'), 'path' => 'services'],
    ['title' => __('nav.contact_us'), 'path' => 'contact_us']
    ]
    ]
    )
    {{$slot}}
    @include('shared.footer.footer', ['nav_links' =>
    [
    ['title' => __('nav.home'), 'path' => 'home'],
    ['title' => __('nav.why_choose_us'), 'path' => 'why_bizoor'],
    ['title' => __('nav.services'), 'path' => 'services'],
    ['title' => __('nav.contact_us'), 'path' => 'contact_us']
    ]
    ])

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>