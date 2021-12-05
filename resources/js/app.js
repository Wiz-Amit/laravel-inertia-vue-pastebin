import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import Default from "./UI/Layouts/Default.vue";
import Nav from "./UI/Layouts/Nav.vue";
import { Link } from '@inertiajs/inertia-vue3'

createInertiaApp({
    resolve: async (name) => {
        let page = (await require(`./Pages/${name}`)).default;
        page.layout = Default;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Nav", Nav)
            .component("Link", Link)
            .mount(el);
    },
});
