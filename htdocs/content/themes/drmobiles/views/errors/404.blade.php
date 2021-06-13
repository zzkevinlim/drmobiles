@extends('layouts.main')

@section('content')
    <main class="container px-[15px] pt-[15px] mx-auto">
        <section class="inline-block box-shadow py-[20px] px-[80px]">
            <div class="font-montserrat font-bold text-[32px] text-gray-700 mb-[16px]">Oops...</div>
            <div class="font-montserrat font-medium text-[18px] text-gray-500 mb-[35px]">
                The page you're looking for cannot be found.
            </div>
            <a class="font-montserrat font-bold text-[18px] text-gray-700 transition-all ease-in-out duration-300 hover:text-dark-blue" href="{{ home_url() }}">
                Please go back to our home page.
            </a>
        </section>
    </main>
@endsection
