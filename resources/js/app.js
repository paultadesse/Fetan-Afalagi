require("./bootstrap");
import "tailwindcss/tailwind.css";

window.Vue = require("vue").default;
import VueRouter from "vue-router";
import routes from "./routes";


Vue.use(VueRouter);

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router: new VueRouter(routes)
});