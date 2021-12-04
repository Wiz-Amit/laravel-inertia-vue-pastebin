import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import Default from "./Pages/Layouts/Default.vue";

createInertiaApp({
    resolve: async (name) => {
        let page = (await require(`./Pages/${name}`)).default;
        page.layout = Default;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
