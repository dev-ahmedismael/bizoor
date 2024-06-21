<footer class="bg-primary text-white pt-20 pb-5">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Description -->
            <div>
                <div class="flex gap-5 items-center mb-5"> <img src="/assets/images/logo/logo.jpg" alt="Logo" style="width: 80px; height:80px; border-radius:100%">
                    <p class="text-4xl">Bizoor</p>
                </div>
                <p>
                    {{__('footer.description')}}
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <p class="text-2xl mb-10">
                    {{__('footer.quick_links')}}
                </p>
                <ul class="flex flex-col gap-5">
                    @foreach($nav_links as $nav_link)
                    <li>
                        <a href="#{{$nav_link['path']}}">
                            {{$nav_link['title']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <p class="text-2xl mb-10">
                    {{__('footer.contact_info')}}
                </p>
                <div class="flex flex-col gap-5">
                    <div class="flex items-center gap-5">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            {{__('footer.address')}}

                        </p>
                    </div>
                    <div class="flex items-center gap-5">
                        <i class="fa-solid fa-phone"></i>
                        <p dir="ltr">+1 255 1234</p>
                    </div>
                    <div class="flex items-center gap-5">
                        <i class="fa-solid fa-envelope"></i>
                        <p>
                            contact@bizoor.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="flex justify-between items-end max-w-full">
        <div> <img src="/assets/images/footer/flower.png" alt="Flower" style="  height:200px">
        </div>
        <div> <img src="/assets/images/footer/farmer_car.png" alt="Farmer" style="  height:200px">
        </div>
    </div>
    <!-- Copyright -->
    <p class="text-center">
        {{__('footer.copyright')}}
    </p>
</footer>