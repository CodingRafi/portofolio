import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import PrimeVue from 'primevue/config';
import 'primevue/resources/themes/saga-blue/theme.css';     //theme
import 'primevue/resources/primevue.min.css';               //core css
import 'primeicons/primeicons.css';                           //icons
import MultiSelect from 'primevue/multiselect';
import TagsBall from 'TagCloud';
import $ from 'jquery';


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(TagsBall)
            .use(PrimeVue)
            .component('MultiSelect', MultiSelect)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#FBAF0E' });
