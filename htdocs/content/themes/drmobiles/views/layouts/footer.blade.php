<div class="fixed lg:hidden z-[9998] top-[65px] right-[0]">
    <a class="self-center font-sarpanch font-bold italic text-white text-[18px] uppercase bg-dark-blue py-[10px] px-[10px] border-[1px] border-dark-blue rounded-[5px] shadow-xl m-[15px] transition-all ease-in-out duration-300 hover:text-dark-blue hover:bg-white" href="{{ get_field('get_a_quote_page', 'option') }}">{{ get_field('get_a_quote_label', 'option') }}</a>
</div>
<div class="fixed z-[9998] bottom-[0] right-[0]">
    <div class="flex items-center justify-end w-full p-[15px]">
        <div id="scroll-to-top-button" class="inline-block text-white bg-dark-blue rounded-full shadow-xl p-[15px] cursor-pointer transition-all ease-in-out duration-300 opacity-0 hover:bg-dark-blue-300">
            <svg class="w-[40px] h-[40px] " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </div>
    </div>
</div>
<footer class="container px-[15px] py-[30px] mx-auto flex flex-col items-center justify-center">
    <div class="flex items-center justify-center">
        <img class="m-[15px]" style="cursor: pointer;" id="seal_2_certificate_image" src="https://www.crazydomains.co.nz/certification/seal/2/7d9696e2ff6346c19d2ad7c514de4fe01622857285/" onclick="if (document.getElementById('seal_2_certificate').style.display == 'none') document.getElementById('seal_2_certificate').style.display = ''; else document.getElementById('seal_2_certificate').style.display = 'none';"><div style="display:none;position: fixed; top: 50%; left: 50%; margin-left: -303px; margin-top: -313px;" id="seal_2_certificate"><a href="javascript:void(0);" onclick="javascript:document.getElementById('seal_2_certificate').style.display = 'none';" style=" font-size: 13px !important; top: -25px;  right: 607px; color: #484848;  opacity: 0.8;  float: right; font-weight: bold; position: relative;  line-height: 20px;  font-family: Verdana, Arial, sans-serif;" class="close">[×] close</a><iframe style="height:626px; width:607px; 690px; border: none; background: white; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border-radius: 6px;" scrolling="no" src="https://www.crazydomains.co.nz/certification/certificate/?token=7d9696e2ff6346c19d2ad7c514de4fe01622857285"></iframe></div>
        <img class="m-[15px]" src="//www.mysecuressls.com/images/seals/crazy_secure_01.png" border="0">
    </div>
    <div class="font-roboto text-[13px] text-black">{{ get_field('copyright', 'option') }}</div>
</footer>
