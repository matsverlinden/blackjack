import StartPlayer from './components/StartPlayer.vue';
import AddPlayer from './components/AddPlayer.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: StartPlayer
    },
    {
        name: 'add',
        path: '/add',
        component: AddPlayer
    }
];