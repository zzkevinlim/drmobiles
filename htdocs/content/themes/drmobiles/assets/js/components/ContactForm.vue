<template>
  <section class="container px-[15px] mx-auto max-w-[1536px]">
    <div class="grid grid-cols-12">
      <div class="col-span-12 lg:col-span-6 py-12">
        <div class="font-montserrat font-bold text-[28px] text-gray-700">{{ company_opening_hours_title }}</div>
        <div class="mt-[32px]">
          <div class="grid grid-cols-1 gap-[24px]">
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] text-gray-500 mr-[15px]" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z"/>
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
              </svg>
              <a class="font-roboto text-[18px] text-gray-500 transition-all ease-in-out duration-300 hover:text-dark-blue" v-bind:href="'tel:' + company_phone">{{
                  company_phone
                }}</a>
            </div>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] text-gray-500 mr-[15px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <a class="font-roboto text-[18px] text-gray-500 transition-all ease-in-out duration-300 hover:text-dark-blue" v-bind:href="'mailto:' + company_email">{{
                  company_email
                }}</a>
            </div>
            <div class="flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] text-gray-500 mr-[15px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <div class="font-roboto text-[18px] text-gray-500" v-html="company_address_extended"></div>
            </div>
            <div class="flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] text-gray-500 mr-[15px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <div class="font-roboto text-[18px] text-gray-500">{{ company_hours_1 }}</div>
            </div>
            <div class="flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] text-gray-500 mr-[15px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <div class="font-roboto text-[18px] text-gray-500">{{ company_hours_2 }}</div>
            </div>
            <div class="flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] text-gray-500 mr-[15px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <div class="font-roboto text-[18px] text-gray-500">{{ company_hours_3 }}</div>
            </div>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] text-gray-500 mr-[15px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
              </svg>
              <a class="font-roboto text-[18px] text-gray-500 transition-all ease-in-out duration-300 hover:text-dark-blue" v-bind:href="company_facebook">{{
                  company_facebook_label
                }}</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-6 py-[48px]">
        <div class="font-montserrat font-bold text-[28px] text-gray-700">{{ contact_title }}</div>
        <div class="mt-[32px]">
          <ValidationObserver ref="formObserver">
            <form v-on:submit.prevent="onSubmit">
              <div class="grid grid-cols-1 gap-[24px]">
                <label class="block">
                  <ValidationProvider rules="name_required" v-slot="{ errors }">
                    <span class="font-roboto text-[18px] text-gray-500">{{ contact_label_1 }}</span>
                    <input v-model="name" v-bind:class="errors.length ? 'border-[2px] border-red-500' : 'border-gray-300'" v-bind:placeholder="errors.length ? errors[0] : ''" type="text" class="mt-[4px] block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                  </ValidationProvider>
                </label>
                <label class="block">
                  <ValidationProvider rules="phone_required" v-slot="{ errors }">
                    <span class="font-roboto text-[18px] text-gray-500">{{ contact_label_2 }}</span>
                    <input v-model="phone" v-bind:class="errors.length ? 'border-[2px] border-red-500' : 'border-gray-300'" v-bind:placeholder="errors.length ? errors[0] : ''" type="text" class="mt-[4px] block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                  </ValidationProvider>
                </label>
                <label class="block">
                  <ValidationProvider rules="email_valid" v-slot="{ errors }">
                    <span class="font-roboto text-[18px] text-gray-500">{{ contact_label_3 }}</span>
                    <input v-model="email" v-bind:class="errors.length ? 'border-[2px] border-red-500' : 'border-gray-300'" type="email" class="mt-[4px] block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                  </ValidationProvider>
                </label>
                <label class="block">
                  <ValidationProvider rules="message_required" v-slot="{ errors }">
                    <span class="font-roboto text-[18px] text-gray-500">{{ contact_label_4 }}</span>
                    <textarea v-model="message" v-bind:class="errors.length ? 'border-[2px] border-red-500' : 'border-gray-300 '" v-bind:placeholder="errors.length ? errors[0] : ''" class="mt-[4px] block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="5"></textarea>
                  </ValidationProvider>
                </label>
                <div class="block text-right">
                  <button type="submit" :disabled="loading" class="inline-flex items-center bg-dark-blue text-white py-[10px] px-[10px] border-[1px] border-dark-blue rounded-[5px] shadow-xl cursor-pointer transition-all ease-in-out duration-300 hover:text-dark-blue hover:bg-white focus:outline-none focus-within-outline-none">
                    <svg v-if="loading" class="animate-spin w-[20px] h-[20px] mr-[5px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <svg v-if="!loading" xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px] mr-[5px]" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                    </svg>
                    <div class="font-sarpanch font-bold italic text-[18px] uppercase ">{{ contact_label_5 }}</div>
                  </button>
                </div>
              </div>
            </form>
          </ValidationObserver>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import { extend, ValidationProvider, ValidationObserver } from 'vee-validate';
import { required, email } from 'vee-validate/dist/rules';
import axios from 'axios';

extend('name_required', {
  ...required,
  message: window.contact_script_data.contact_error_1
});

extend('phone_required', {
  ...required,
  message: window.contact_script_data.contact_error_2
});

extend('email_valid', {
  ...email,
  message: window.contact_script_data.contact_error_3
});

extend('message_required', {
  ...required,
  message: window.contact_script_data.contact_error_4
});

export default {
  name: 'ContactForm',
  components: {
    ValidationProvider,
    ValidationObserver,
  },
  data () {
    return {
      wp_ajax: window.contact_script_data.wp_ajax,
      wp_nonce: window.contact_script_data.wp_nonce,
      name: '',
      phone: '',
      email: '',
      message: '',
      recaptcha_token: '',
      loading: false,
      company_opening_hours_title: window.contact_script_data.company_opening_hours_title,
      company_phone: window.contact_script_data.company_phone,
      company_email: window.contact_script_data.company_email,
      company_address_extended: window.contact_script_data.company_address_extended,
      company_hours_1: window.contact_script_data.company_hours_1,
      company_hours_2: window.contact_script_data.company_hours_2,
      company_hours_3: window.contact_script_data.company_hours_3,
      company_facebook_label: window.contact_script_data.company_facebook_label,
      company_facebook: window.contact_script_data.company_facebook,
      contact_title: window.contact_script_data.contact_title,
      contact_label_1: window.contact_script_data.contact_label_1,
      contact_label_2: window.contact_script_data.contact_label_2,
      contact_label_3: window.contact_script_data.contact_label_3,
      contact_label_4: window.contact_script_data.contact_label_4,
      contact_label_5: window.contact_script_data.contact_label_5,
      contact_error_1: window.contact_script_data.contact_error_1,
      contact_error_2: window.contact_script_data.contact_error_2,
      contact_error_3: window.contact_script_data.contact_error_3,
      contact_error_4: window.contact_script_data.contact_error_4,
    };
  },
  methods: {
    async onSubmit () {
      await this.$recaptchaLoaded();
      this.recaptcha_token = await this.$recaptcha('submit_contact_form');
      this.$refs.formObserver.validate().then(success => {
        if (success) {
          this.loading = true;
          let formData = new FormData();
          formData.append('wp_nonce', this.wp_nonce);
          formData.append('action', 'submit_contact_form');
          formData.append('name', this.name);
          formData.append('phone', this.phone);
          formData.append('email', this.email);
          formData.append('message', this.message);
          formData.append('recaptcha_token', this.recaptcha_token);
          axios({
            method: 'POST',
            url: this.wp_ajax,
            headers: {
              'Content-Type': 'multipart/form-data'
            },
            data: formData,
          }).then(response => {
            if (response.data.status === 1) {
              this.$swal('Sent', response.data.message, 'success');
              this.name = this.phone = this.email = this.message = '';
              this.$nextTick(() => {
                this.$refs.formObserver.reset();
              });
            } else {
              this.$swal('Error', response.data.message, 'error');
            }
            this.loading = false;
          });
        }
      });
      this.loading = false;
    },
  },
};
</script>
<style scoped lang="scss">
</style>
