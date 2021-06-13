@extends('layouts.main')

@section('content')
    <main>
        <iframe class="w-full h-[60vh]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.245009870064!2d{{ get_field('google_maps_longitude') }}!3d{{ get_field('google_maps_latitude') }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d39d65211effb%3A0xaf55d06cbff09561!2sDr+Mobiles+Limited!5e0!3m2!1sen!2smy!4v1532858801107">
        </iframe>
        <div id="contact"></div>
    </main>
@endsection
