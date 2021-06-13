import Vue from 'vue';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import { VueReCaptcha } from 'vue-recaptcha-v3';
import ContactForm from './components/ContactForm';

Vue.config.devtools = true;
Vue.config.silent = false;
Vue.use(VueSweetalert2);

let vue_recaptcha_options = {
  siteKey: window.contact_script_data.google_recaptcha_site_key,
  loaderOptions: {
    autoHideBadge: true,
    explicitRenderParameters: {
      badge: 'bottomleft',
      size: 'invisible',
    }
  }
};

Vue.use(VueReCaptcha, vue_recaptcha_options);

new Vue({
  el: '#contact',
  render: h => h(ContactForm),
});
