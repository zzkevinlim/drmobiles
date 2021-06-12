@extends('layouts.main')

@section('content')
    <main class="container px-[15px] mx-auto">
        <section class="box-shadow bg-no-repeat bg-cover bg-top w-full h-[450px] lg:h-[420px] mb-[30px] relative" style="background-image: url({{ get_field('banner_1')['url'] }})">
            <div class="flex flex-col items-start justify-center lg:justify-start bg-dark-blue bg-opacity-50 w-full h-full p-[30px] lg:py-[30px] lg:px-[60px] absolute inset-0 ">
                <div class="inline-block font-sarpanch font-bold italic text-white text-[30px] lg:text-[60px] text-center bg-dark-blue px-[15px] mb-[25px]">{{ get_field('title_1') }}</div>
                <div class="font-montserrat text-[18px] lg:text-[24px] leading-[26px] lg:leading-[32px] text-white">{!! get_field('content_1') !!}</div>
                <a class="block font-montserrat text-[18px] lg:text-[24px] leading-[26px] lg:leading-[32px] text-white transition-all ease-in-out duration-300 hover:text-dark-blue" href="mailto:{{ get_field('company_email', 'option') }}">{{ get_field('company_email', 'option') }}</a>
                <a class="block font-montserrat text-[18px] lg:text-[24px] leading-[26px] lg:leading-[32px] text-white transition-all ease-in-out duration-300 hover:text-dark-blue" href="tel:{{ str_replace(' ', '', get_field('company_phone', 'option')) }}">{{ get_field('company_phone', 'option') }}</a>
                <a class="block font-montserrat text-[18px] lg:text-[24px] leading-[26px] lg:leading-[32px] text-white transition-all ease-in-out duration-300 hover:text-dark-blue" href="{{ get_permalink(get_page_by_title('contact')) }}">{{ get_field('company_address_minimal', 'option') }}</a>
            </div>
        </section>
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-[15px] mb-[30px]">
            @foreach(get_field('products_2') as $product)
                <img class="box-shadow" src="{{ $product['image']['url'] }}" alt="{{ $product['alt'] }}">
            @endforeach
        </section>
        <section class="box-shadow swiper-one swiper-container mb-[30px] relative">
            <div class="p-[15px] lg:py-[50px] lg:px-[70px] text-center">
                <div class="font-montserrat font-bold text-[21px] lg:text-[28px] text-gray-700 pb-[15px]">{{ get_field('title_3') }}</div>
                <div class="font-montserrat font-medium text-[17px] lg:text-[20px] text-gray-600">{!! get_field('content_3') !!}</div>
            </div>
            <div class="swiper-wrapper">
                @foreach(get_field('products_3') as $product)
                    <div class="swiper-slide h-auto">
                        <div class="grid grid-cols-12 auto-rows-fr h-full">
                            <div class="col-span-12 lg:col-span-6 max-h-[200px] lg:max-h-[600px]">
                                <img class="object-contain object-center w-full h-full" src="{{ $product['image']['url'] }}" alt="{{ $product['alt'] }}">
                            </div>
                            <div class="col-span-12 lg:col-span-6 flex flex-col justify-start lg:justify-center bg-gray-200 p-[30px] lg:px-[64px]">
                                <div class="font-montserrat font-medium text-[17px] lg:text-[42px] text-dark-blue">{{ $product['title'] }}</div>
                                <div class="font-montserrat text-[13px] lg:text-[19px] text-gray-600">{!! $product['content'] !!}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-custom-pagination flex items-center justify-center absolute w-full lg:w-[50%] h-[40px] lg:h-[80px] bottom-0 lg:left-[50%] z-[1]"></div>
        </section>
    </main>
@endsection
