import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp , Head , Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import {MyHelper} from "@/Helper/Functions";
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ElementPlus)
            .mixin(MyHelper)
            .use(ZiggyVue, Ziggy)
            .component('Head' , Head)
            .component('Link' , Link)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
