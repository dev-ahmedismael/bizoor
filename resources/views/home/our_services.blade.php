<section class="bg-secondary py-20" id="services">
    <div class="container">
        <div class="flex justify-center mb-10">
            <h3 class="text-center bg-yellow-400 text-white text-3xl w-fit py-2 px-7">{{__('services.heading')}}</h3>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            @foreach($services as $service)
            <div class="text-center">
                <div class="flex justify-center text-6xl text-green-400 mb-5">
                    <i class="{{$service['icon']}}"></i>
                </div>
                <p class="text-3xl text-primary">{{$service['title']}}</p>
                <p class="text-slate-600 mb-5">{{$service['subtitle']}}</p>
                <p>{{$service['description']}}</p>
            </div>
            @endforeach()
        </div>
    </div>
</section>