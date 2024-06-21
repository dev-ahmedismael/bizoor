<x-layouts.main-layout>
    @include('home.header')
    @include('home.why_bizoor', [$why_bizoor_items])
    @include('home.our_services', [$services])
    @include('home.contact-us')
</x-layouts.main-layout>