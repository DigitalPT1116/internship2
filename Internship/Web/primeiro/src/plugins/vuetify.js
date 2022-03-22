import Vue from 'vue';
import Vuetify from 'vuetify/lib/framework';

Vue.use(Vuetify);


export default new Vuetify({

    vuetify: {
        theme: {
          dark: false,
          themes: {
            dark: {
              primary: '#4caf50',
              secondary: '#ff8c00',
              accent: '#9c27b0'
            }
          }
        }
      },
});
