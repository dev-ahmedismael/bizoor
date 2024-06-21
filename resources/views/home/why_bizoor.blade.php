<section class="relative h-max w-full" id="why_bizoor">
    <img src="/assets/images/why_bizoor/banner.jpg" alt="Banner" class="absolute z-10 top-0 left-0 w-full h-full {{app()->getLocale() === 'ar' ? 'transform -scale-x-100' : ''}}">
    <div class="relative z-20">
        <div class="container grid grid-cols-3">
            <div class="col-span-2 py-20">
                <h3 class="text-3xl bg-yellow-400 text-white py-2 px-7 w-fit mb-10">{{__('why_bizoor.why_bizoor')}}</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    @foreach ($why_bizoor_items as $item)
                    <div>
                        <i class="{{$item['icon']}} text-5xl text-primary mb-3"></i>
                        <p class="text-2xl mb-3">{{$item['title']}}</p>
                        <p class="text-slate-600">{{$item['description']}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div></div>
        </div>
    </div>
</section>