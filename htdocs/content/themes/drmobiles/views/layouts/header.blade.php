<header class="bg-white h-[40px] lg:h-[130px] relative z-[9999]" x-data="header()" x-on:load.window.debounce.0="isHeaderScrolled()" x-on:scroll.window.debounce.0="isHeaderScrolled()">
    <div class="fixed w-full">
        <div class="bg-dark-blue h-[40px]">
            <div class="container px-[15px] mx-auto hidden lg:flex items-center justify-end h-full">
                <a class="inline-flex items-center font-roboto text-white text-[15px] px-[15px] h-full transition-all ease-in-out duration-300 hover:bg-dark-blue-300" href="tel:{{ str_replace(' ', '', get_field('company_phone', 'option')) }}">
                    <svg class="w-[20px] h-[20px] mr-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z"/>
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    {{ get_field('company_phone', 'option') }}
                </a>
                <a class="inline-flex items-center font-roboto text-white text-[15px] px-[15px] h-full transition-all ease-in-out duration-300 hover:bg-dark-blue-300" href="mailto:{{ get_field('company_email', 'option') }}">
                    <svg class="w-[20px] h-[20px] mr-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    {{ get_field('company_email', 'option') }}
                </a>
                <a class="inline-flex items-center font-roboto text-white text-[15px] px-[15px] h-full transition-all ease-in-out duration-300 hover:bg-dark-blue-300" href="{{ get_permalink(get_page_by_title('contact')) }}">
                    <svg class="w-[20px] h-[20px] mr-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    {{ get_field('company_address_minimal', 'option') }}
                </a>
            </div>
            <div class="container px-[15px] mx-auto flex lg:hidden items-center justify-between h-full">
                <div class="flex h-full">
                    <a class="inline-flex items-center font-sarpanch font-bold italic text-white text-[18px] px-[5px] h-full transition-all ease-in-out duration-300 hover:bg-dark-blue-300" href="{{ home_url() }}">{{ get_bloginfo('name') }}</a>
                </div>
                <div class="flex h-full">
                    <a class="inline-flex items-center font-roboto text-white text-[15px] px-[5px] h-full transition-all ease-in-out duration-300 hover:bg-dark-blue-300" href="tel:{{ str_replace(' ', '', get_field('company_phone', 'option')) }}">
                        <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z"/>
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                    </a>
                    <a class="inline-flex items-center font-roboto text-white text-[15px] px-[5px] h-full transition-all ease-in-out duration-300 hover:bg-dark-blue-300" href="mailto:{{ get_field('company_email', 'option') }}">
                        <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                    </a>
                    <a class="inline-flex items-center font-roboto text-white text-[15px] px-[5px] h-full transition-all ease-in-out duration-300 hover:bg-dark-blue-300" href="{{ get_permalink(get_page_by_title('contact')) }}">
                        <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <div class="inline-flex items-center font-roboto text-white text-[15px] px-[5px] h-full cursor-pointer transition-all ease-in-out duration-300 hover:bg-dark-blue-300" x-on:click.stop="toggleSidemenu()">
                        <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block bg-white border-b-[1px] border-gray transition-all ease-in-out duration-300" x-bind:class="{ 'h-[90px]' : !headerScrolled, 'h-[60px]' : headerScrolled }">
            <div class="container px-[15px] mx-auto flex justify-between h-full">
                <a class="flex items-center" href="{{ home_url() }}">
                    <img class="object-contain object-center h-full py-[5px]" src="{{ $logo_image_url }}" alt="{{ get_bloginfo('description') }}">
                    <div class="font-sarpanch font-bold italic text-dark-blue px-[20px] transition-all ease-in-out duration-300" x-bind:class="{ 'text-[60px]' : !headerScrolled, 'text-[36px]' : headerScrolled }">{{ get_bloginfo('name') }}</div>
                </a>
                <nav class="flex">
                    @foreach($menus as $menu)
                        <a class="inline-flex items-center h-full font-roboto font-medium text-[18px] {{ $menu->url == $current_url ? 'text-dark-blue' : 'text-gray-700' }} mx-[20px] relative" href="{{ $menu->url }}" target="{{ $menu->target }}" x-data="{ hover : false }" x-on:mouseover="hover = true" x-on:mouseover.away="hover = false">
                            <div class="absolute h-[2px] bg-dark-blue left-0 bottom-0 transition-all ease-in-out duration-300" x-bind:class="hover ? 'w-full' : 'w-0'"></div>
                            {{ $menu->title }}
                        </a>
                    @endforeach
                    <a class="self-center font-sarpanch font-bold italic text-white text-[18px] uppercase bg-dark-blue py-[10px] px-[10px] border-[1px] border-dark-blue rounded-[5px] ml-[20px] transition-all ease-in-out duration-300 hover:text-dark-blue hover:bg-white" href="{{ get_field('get_a_quote_page', 'option') }}">{{ get_field('get_a_quote_label', 'option') }}</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="fixed inset-0"
         style="display: none;"
         x-show="sidemenu"
         x-transition:enter="transition-all ease-in-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-all ease-in-out duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <div class="bg-dark-blue bg-opacity-50 absolute inset-0" x-on:click="toggleSidemenu()"></div>
        <div class="flex flex-col bg-white w-full max-w-xs h-full pt-[60px] relative"
             x-show="sidemenu"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full">
            <div class="flex items-center justify-center p-[5px] absolute top-0 right-0" x-on:click.stop="toggleSidemenu()">
                <div class="inline-flex items-center font-roboto text-dark-blue text-[15px] px-[5px] h-full cursor-pointer transition-all ease-in-out duration-300 hover:text-dark-blue-300" x-on:click.stop="toggleSidemenu()">
                    <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            @foreach($menus as $menu)
                <a class="font-sarpanch font-bold italic text-[30px] {{ $menu->url == $current_url ? 'text-dark-blue' : 'text-cape-palliser' }} py-[15px] px-[60px] transition-all ease-in-out duration-300 hover:text-white hover:bg-dark-blue" href="{{ $menu->url }}" target="{{ $menu->target }}">{{ $menu->title }}</a>
            @endforeach
        </div>
    </div>
</header>
<script>
  function header () {
    return {
      headerScrolled: false,
      isHeaderScrolled () {
        this.headerScrolled = window.scrollY > 0;
      },
      sidemenu: false,
      toggleSidemenu () {
        this.sidemenu = !this.sidemenu;
      }
    };
  }
</script>
