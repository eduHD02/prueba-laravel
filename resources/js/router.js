import { createRouter, createWebHistory } from "vue-router";

import Inicio from "./components/Inicio.vue";
import Fin from "./components/Fin.vue";

const routes = [
  { path: "/inicio", component: Inicio },
  { path: "/nosotros", component: Fin },
];

const history = createWebHistory();

const router = createRouter({
  history,
  routes,
});

export default router;