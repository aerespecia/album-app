import { RouteConfig } from 'vue-router';

const routes: RouteConfig[] = [
  {
    path: '/',
    component: () => import('layouts/albums.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') },
      { path: '/photo/:id', component: () => import('pages/photo.vue') }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
];

export default routes;
