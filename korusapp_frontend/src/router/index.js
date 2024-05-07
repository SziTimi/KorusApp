//index.js
import { createRouter, createWebHistory } from 'vue-router';
import { isLoggedIn } from '@/utils/http';
import Home from '../views/Home.vue';
import Login from '../views/Login.vue';
import Registration from '../views/Registration.vue';
import Calendar from '../views/Calendar.vue';
import AbsenceForm from '../views/AbsenceForm.vue';
import MusicLibaryLink from '../views/MusicLibaryLink.vue';
import News from '../views/News.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      redirect: '/home'  // Átirányítja a felhasználókat '/home' útvonalra
    },
    {
      path: '/home',
      name: 'home',
      component: Home,
      meta: { requiresUnauth: true }  // Ez azt jelenti, hogy a nem hitelesített felhasználók számára elérhető
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
      meta: { requiresUnauth: true }
    },
    {
      path: '/registration',
      name: 'registration',
      component: Registration,
      meta: { requiresUnauth: true }
    },
    {
      path: '/calendar',
      name: 'calendar',
      component: Calendar,
      meta: { requiresAuth: true }
    },
    {
      path: '/absenceform',
      name: 'absenceform',
      component: AbsenceForm,
      meta: { requiresAuth: true }
    },
    {
      path: '/musiclibarylink',
      name: 'musiclibarylink',
      component: MusicLibaryLink,
      meta: { requiresAuth: true }
    },
    {
      path: '/news',
      name: 'news',
      component: News,
      meta: { requiresAuth: true }
    }
  ]
});

router.beforeEach((to, from, next) => {
  const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
  const isLogged = isLoggedIn();  // Biztos, hogy szinkron függvény és definiálva van

  if (requiresAuth && !isLogged) {
    next('/login');
  } else if (to.path === '/login' && isLogged) {
    next('/home');
  } else {
    next();
  }
});

export default router;









