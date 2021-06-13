<template>
  <section class="container px-[15px] mx-auto max-w-2xl">
    <div class="py-12">
      <h2 class="text-2xl font-bold">{{ contact_title }}</h2>
      <div class="mt-8">
        <ValidationObserver ref="formObserver">
          <form v-on:submit.prevent="onSubmit">
            <div class="grid grid-cols-1 gap-6">
              <label class="block">
                <ValidationProvider rules="name_required" v-slot="{ errors }">
                  <span class="text-gray-700">{{ contact_label_1 }}</span>
                  <input v-model="name" v-bind:class="errors.length ? 'border-[2px] border-red-500' : 'border-gray-300'" v-bind:placeholder="errors.length ? errors[0] : ''" type="text" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </ValidationProvider>
              </label>
              <label class="block">
                <ValidationProvider rules="phone_required" v-slot="{ errors }">
                  <span class="text-gray-700">{{ contact_label_2 }}</span>
                  <input v-model="phone" v-bind:class="errors.length ? 'border-[2px] border-red-500' : 'border-gray-300'" v-bind:placeholder="errors.length ? errors[0] : ''" type="text" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </ValidationProvider>
              </label>
              <label class="block">
                <ValidationProvider rules="email_valid" v-slot="{ errors }">
                  <span class="text-gray-700">{{ contact_label_3 }}</span>
                  <input v-model="email" v-bind:class="errors.length ? 'border-[2px] border-red-500' : 'border-gray-300'" type="email" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </ValidationProvider>
              </label>
              <label class="block">
                <ValidationProvider rules="message_required" v-slot="{ errors }">
                  <span class="text-gray-700">{{ contact_label_4 }}</span>
                  <textarea v-model="message" v-bind:class="errors.length ? 'border-[2px] border-red-500' : 'border-gray-300 '" v-bind:placeholder="errors.length ? errors[0] : ''" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="5"></textarea>
                </ValidationProvider>
              </label>
              <div class="block text-right">
                <button v-on:click="onSubmit" :disabled="loading" class="inline-flex items-center bg-dark-blue text-white py-[10px] px-[10px] border-[1px] border-dark-blue rounded-[5px] shadow-xl cursor-pointer transition-all ease-in-out duration-300 hover:text-dark-blue hover:bg-white focus:outline-none focus-within-outline-none">
                  <svg v-if="loading" class="animate-spin w-[20px] h-[20px] mr-[5px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  <svg v-if="!loading" xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px] mr-[5px]" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                  </svg>
                  <div class="font-sarpanch font-bold italic text-[18px] uppercase ">{{ contact_label_5 }}</div>
                </button>
              </div>
            </div>
          </form>
        </ValidationObserver>
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
