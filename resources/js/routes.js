import Home from "./components/Home";
import Explore from "./components/Explore";
import InfoDetail from "./components/InfoDetail";

export default {
    mode: "history",
    // linkActiveClass: "border-b-2 border-t-2 border-gray-400 text-gray-500 ",
    routes: [
        // {
        //     path: "*",
        //     component: PageNotFound
        // },

        {
            path: "/",
            component: Home,
            name: "Home"
        },
        {
            path: "/explore",
            component: Explore,
            name: "Explore"
        },
        {
            path: "/detail",
            component: InfoDetail,
            name: "detail"
        }
    ]
};
